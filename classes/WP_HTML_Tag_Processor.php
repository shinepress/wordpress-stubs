<?php


/**
 * HTML API: WP_HTML_Tag_Processor class
 *
 * Scans through an HTML document to find specific tags, then
 * transforms those tags by adding, removing, or updating the
 * values of the HTML attributes within that tag (opener).
 *
 * Does not fully parse HTML or _recurse_ into the HTML structure
 * Instead this scans linearly through a document and only parses
 * the HTML tag openers.
 *
 * ### Possible future direction for this module
 *
 *  - Prune the whitespace when removing classes/attributes: e.g. "a b c" -> "c" not " c".
 *    This would increase the size of the changes for some operations but leave more
 *    natural-looking output HTML.
 *  - Decode HTML character references within class names when matching. E.g. match having
 *    class `1<"2` needs to recognize `class="1&lt;&quot;2"`. Currently the Tag Processor
 *    will fail to find the right tag if the class name is encoded as such.
 *  - Properly decode HTML character references in `get_attribute()`. PHP's
 *    `html_entity_decode()` is wrong in a couple ways: it doesn't account for the
 *    no-ambiguous-ampersand rule, and it improperly handles the way semicolons may
 *    or may not terminate a character reference.
 *
 * @package WordPress
 * @subpackage HTML-API
 * @since 6.2.0
 */
/**
 * Core class used to modify attributes in an HTML document for tags matching a query.
 *
 * ## Usage
 *
 * Use of this class requires three steps:
 *
 *  1. Create a new class instance with your input HTML document.
 *  2. Find the tag(s) you are looking for.
 *  3. Request changes to the attributes in those tag(s).
 *
 * Example:
 *
 *     $tags = new WP_HTML_Tag_Processor( $html );
 *     if ( $tags->next_tag( 'option' ) ) {
 *         $tags->set_attribute( 'selected', true );
 *     }
 *
 * ### Finding tags
 *
 * The `next_tag()` function moves the internal cursor through
 * your input HTML document until it finds a tag meeting any of
 * the supplied restrictions in the optional query argument. If
 * no argument is provided then it will find the next HTML tag,
 * regardless of what kind it is.
 *
 * If you want to _find whatever the next tag is_:
 *
 *     $tags->next_tag();
 *
 * | Goal                                                      | Query                                                                           |
 * |-----------------------------------------------------------|---------------------------------------------------------------------------------|
 * | Find any tag.                                             | `$tags->next_tag();`                                                            |
 * | Find next image tag.                                      | `$tags->next_tag( array( 'tag_name' => 'img' ) );`                              |
 * | Find next image tag (without passing the array).          | `$tags->next_tag( 'img' );`                                                     |
 * | Find next tag containing the `fullwidth` CSS class.       | `$tags->next_tag( array( 'class_name' => 'fullwidth' ) );`                      |
 * | Find next image tag containing the `fullwidth` CSS class. | `$tags->next_tag( array( 'tag_name' => 'img', 'class_name' => 'fullwidth' ) );` |
 *
 * If a tag was found meeting your criteria then `next_tag()`
 * will return `true` and you can proceed to modify it. If it
 * returns `false`, however, it failed to find the tag and
 * moved the cursor to the end of the file.
 *
 * Once the cursor reaches the end of the file the processor
 * is done and if you want to reach an earlier tag you will
 * need to recreate the processor and start over, as it's
 * unable to back up or move in reverse.
 *
 * See the section on bookmarks for an exception to this
 * no-backing-up rule.
 *
 * #### Custom queries
 *
 * Sometimes it's necessary to further inspect an HTML tag than
 * the query syntax here permits. In these cases one may further
 * inspect the search results using the read-only functions
 * provided by the processor or external state or variables.
 *
 * Example:
 *
 *     // Paint up to the first five DIV or SPAN tags marked with the "jazzy" style.
 *     $remaining_count = 5;
 *     while ( $remaining_count > 0 && $tags->next_tag() ) {
 *         if (
 *              ( 'DIV' === $tags->get_tag() || 'SPAN' === $tags->get_tag() ) &&
 *              'jazzy' === $tags->get_attribute( 'data-style' )
 *         ) {
 *             $tags->add_class( 'theme-style-everest-jazz' );
 *             $remaining_count--;
 *         }
 *     }
 *
 * `get_attribute()` will return `null` if the attribute wasn't present
 * on the tag when it was called. It may return `""` (the empty string)
 * in cases where the attribute was present but its value was empty.
 * For boolean attributes, those whose name is present but no value is
 * given, it will return `true` (the only way to set `false` for an
 * attribute is to remove it).
 *
 * ### Modifying HTML attributes for a found tag
 *
 * Once you've found the start of an opening tag you can modify
 * any number of the attributes on that tag. You can set a new
 * value for an attribute, remove the entire attribute, or do
 * nothing and move on to the next opening tag.
 *
 * Example:
 *
 *     if ( $tags->next_tag( array( 'class' => 'wp-group-block' ) ) ) {
 *         $tags->set_attribute( 'title', 'This groups the contained content.' );
 *         $tags->remove_attribute( 'data-test-id' );
 *     }
 *
 * If `set_attribute()` is called for an existing attribute it will
 * overwrite the existing value. Similarly, calling `remove_attribute()`
 * for a non-existing attribute has no effect on the document. Both
 * of these methods are safe to call without knowing if a given attribute
 * exists beforehand.
 *
 * ### Modifying CSS classes for a found tag
 *
 * The tag processor treats the `class` attribute as a special case.
 * Because it's a common operation to add or remove CSS classes, this
 * interface adds helper methods to make that easier.
 *
 * As with attribute values, adding or removing CSS classes is a safe
 * operation that doesn't require checking if the attribute or class
 * exists before making changes. If removing the only class then the
 * entire `class` attribute will be removed.
 *
 * Example:
 *
 *     // from `<span>Yippee!</span>`
 *     //   to `<span class="is-active">Yippee!</span>`
 *     $tags->add_class( 'is-active' );
 *
 *     // from `<span class="excited">Yippee!</span>`
 *     //   to `<span class="excited is-active">Yippee!</span>`
 *     $tags->add_class( 'is-active' );
 *
 *     // from `<span class="is-active heavy-accent">Yippee!</span>`
 *     //   to `<span class="is-active heavy-accent">Yippee!</span>`
 *     $tags->add_class( 'is-active' );
 *
 *     // from `<input type="text" class="is-active rugby not-disabled" length="24">`
 *     //   to `<input type="text" class="is-active not-disabled" length="24">
 *     $tags->remove_class( 'rugby' );
 *
 *     // from `<input type="text" class="rugby" length="24">`
 *     //   to `<input type="text" length="24">
 *     $tags->remove_class( 'rugby' );
 *
 *     // from `<input type="text" length="24">`
 *     //   to `<input type="text" length="24">
 *     $tags->remove_class( 'rugby' );
 *
 * When class changes are enqueued but a direct change to `class` is made via
 * `set_attribute` then the changes to `set_attribute` (or `remove_attribute`)
 * will take precedence over those made through `add_class` and `remove_class`.
 *
 * ### Bookmarks
 *
 * While scanning through the input HTMl document it's possible to set
 * a named bookmark when a particular tag is found. Later on, after
 * continuing to scan other tags, it's possible to `seek` to one of
 * the set bookmarks and then proceed again from that point forward.
 *
 * Because bookmarks create processing overhead one should avoid
 * creating too many of them. As a rule, create only bookmarks
 * of known string literal names; avoid creating "mark_{$index}"
 * and so on. It's fine from a performance standpoint to create a
 * bookmark and update it frequently, such as within a loop.
 *
 *     $total_todos = 0;
 *     while ( $p->next_tag( array( 'tag_name' => 'UL', 'class_name' => 'todo' ) ) ) {
 *         $p->set_bookmark( 'list-start' );
 *         while ( $p->next_tag( array( 'tag_closers' => 'visit' ) ) ) {
 *             if ( 'UL' === $p->get_tag() && $p->is_tag_closer() ) {
 *                 $p->set_bookmark( 'list-end' );
 *                 $p->seek( 'list-start' );
 *                 $p->set_attribute( 'data-contained-todos', (string) $total_todos );
 *                 $total_todos = 0;
 *                 $p->seek( 'list-end' );
 *                 break;
 *             }
 *
 *             if ( 'LI' === $p->get_tag() && ! $p->is_tag_closer() ) {
 *                 $total_todos++;
 *             }
 *         }
 *     }
 *
 * ## Design and limitations
 *
 * The Tag Processor is designed to linearly scan HTML documents and tokenize
 * HTML tags and their attributes. It's designed to do this as efficiently as
 * possible without compromising parsing integrity. Therefore it will be
 * slower than some methods of modifying HTML, such as those incorporating
 * over-simplified PCRE patterns, but will not introduce the defects and
 * failures that those methods bring in, which lead to broken page renders
 * and often to security vulnerabilities. On the other hand, it will be faster
 * than full-blown HTML parsers such as DOMDocument and use considerably
 * less memory. It requires a negligible memory overhead, enough to consider
 * it a zero-overhead system.
 *
 * The performance characteristics are maintained by avoiding tree construction
 * and semantic cleanups which are specified in HTML5. Because of this, for
 * example, it's not possible for the Tag Processor to associate any given
 * opening tag with its corresponding closing tag, or to return the inner markup
 * inside an element. Systems may be built on top of the Tag Processor to do
 * this, but the Tag Processor is and should be constrained so it can remain an
 * efficient, low-level, and reliable HTML scanner.
 *
 * The Tag Processor's design incorporates a "garbage-in-garbage-out" philosophy.
 * HTML5 specifies that certain invalid content be transformed into different forms
 * for display, such as removing null bytes from an input document and replacing
 * invalid characters with the Unicode replacement character `U+FFFD` (visually "�").
 * Where errors or transformations exist within the HTML5 specification, the Tag Processor
 * leaves those invalid inputs untouched, passing them through to the final browser
 * to handle. While this implies that certain operations will be non-spec-compliant,
 * such as reading the value of an attribute with invalid content, it also preserves a
 * simplicity and efficiency for handling those error cases.
 *
 * Most operations within the Tag Processor are designed to minimize the difference
 * between an input and output document for any given change. For example, the
 * `add_class` and `remove_class` methods preserve whitespace and the class ordering
 * within the `class` attribute; and when encountering tags with duplicated attributes,
 * the Tag Processor will leave those invalid duplicate attributes where they are but
 * update the proper attribute which the browser will read for parsing its value. An
 * exception to this rule is that all attribute updates store their values as
 * double-quoted strings, meaning that attributes on input with single-quoted or
 * unquoted values will appear in the output with double-quotes.
 *
 * @since 6.2.0
 */
class WP_HTML_Tag_Processor
{
    /**
     * The maximum number of bookmarks allowed to exist at
     * any given time.
     *
     * @since 6.2.0
     * @var int
     *
     * @see WP_HTML_Tag_Processor::set_bookmark()
     */
    const MAX_BOOKMARKS = 10;
    /**
     * Maximum number of times seek() can be called.
     * Prevents accidental infinite loops.
     *
     * @since 6.2.0
     * @var int
     *
     * @see WP_HTML_Tag_Processor::seek()
     */
    const MAX_SEEK_OPS = 1000;
    /**
     * The HTML document to parse.
     *
     * @since 6.2.0
     * @var string
     */
    protected $html;
    /**
     * Tracks a semantic location in the original HTML which
     * shifts with updates as they are applied to the document.
     *
     * @since 6.2.0
     * @var WP_HTML_Span[]
     */
    protected $bookmarks = array();
    const ADD_CLASS = \true;
    const REMOVE_CLASS = \false;
    const SKIP_CLASS = \null;
    /**
     * Lexical replacements to apply to input HTML document.
     *
     * "Lexical" in this class refers to the part of this class which
     * operates on pure text _as text_ and not as HTML. There's a line
     * between the public interface, with HTML-semantic methods like
     * `set_attribute` and `add_class`, and an internal state that tracks
     * text offsets in the input document.
     *
     * When higher-level HTML methods are called, those have to transform their
     * operations (such as setting an attribute's value) into text diffing
     * operations (such as replacing the sub-string from indices A to B with
     * some given new string). These text-diffing operations are the lexical
     * updates.
     *
     * As new higher-level methods are added they need to collapse their
     * operations into these lower-level lexical updates since that's the
     * Tag Processor's internal language of change. Any code which creates
     * these lexical updates must ensure that they do not cross HTML syntax
     * boundaries, however, so these should never be exposed outside of this
     * class or any classes which intentionally expand its functionality.
     *
     * These are enqueued while editing the document instead of being immediately
     * applied to avoid processing overhead, string allocations, and string
     * copies when applying many updates to a single document.
     *
     * Example:
     *
     *     // Replace an attribute stored with a new value, indices
     *     // sourced from the lazily-parsed HTML recognizer.
     *     $start = $attributes['src']->start;
     *     $end   = $attributes['src']->end;
     *     $modifications[] = new WP_HTML_Text_Replacement( $start, $end, $new_value );
     *
     *     // Correspondingly, something like this will appear in this array.
     *     $lexical_updates = array(
     *         WP_HTML_Text_Replacement( 14, 28, 'https://my-site.my-domain/wp-content/uploads/2014/08/kittens.jpg' )
     *     );
     *
     * @since 6.2.0
     * @var WP_HTML_Text_Replacement[]
     */
    protected $lexical_updates = array();
    /**
     * Tracks and limits `seek()` calls to prevent accidental infinite loops.
     *
     * @since 6.2.0
     * @var int
     *
     * @see WP_HTML_Tag_Processor::seek()
     */
    protected $seek_count = 0;
    /**
     * Constructor.
     *
     * @since 6.2.0
     *
     * @param string $html HTML to process.
     */
    public function __construct($html)
    {
    }
    /**
     * Finds the next tag matching the $query.
     *
     * @since 6.2.0
     *
     * @param array|string|null $query {
     *     Optional. Which tag name to find, having which class, etc. Default is to find any tag.
     *
     *     @type string|null $tag_name     Which tag to find, or `null` for "any tag."
     *     @type int|null    $match_offset Find the Nth tag matching all search criteria.
     *                                     1 for "first" tag, 3 for "third," etc.
     *                                     Defaults to first tag.
     *     @type string|null $class_name   Tag must contain this whole class name to match.
     *     @type string|null $tag_closers  "visit" or "skip": whether to stop on tag closers, e.g. </div>.
     * }
     * @return boolean Whether a tag was matched.
     * @phpstan-param null|array{
     *   tag_name?: string|null,
     *   match_offset?: int|null,
     *   class_name?: string|null,
     *   tag_closers?: string|null,
     * } $query
     */
    public function next_tag($query = \null)
    {
    }
    /**
     * Sets a bookmark in the HTML document.
     *
     * Bookmarks represent specific places or tokens in the HTML
     * document, such as a tag opener or closer. When applying
     * edits to a document, such as setting an attribute, the
     * text offsets of that token may shift; the bookmark is
     * kept updated with those shifts and remains stable unless
     * the entire span of text in which the token sits is removed.
     *
     * Release bookmarks when they are no longer needed.
     *
     * Example:
     *
     *     <main><h2>Surprising fact you may not know!</h2></main>
     *           ^  ^
     *            \-|-- this `H2` opener bookmark tracks the token
     *
     *     <main class="clickbait"><h2>Surprising fact you may no…
     *                             ^  ^
     *                              \-|-- it shifts with edits
     *
     * Bookmarks provide the ability to seek to a previously-scanned
     * place in the HTML document. This avoids the need to re-scan
     * the entire document.
     *
     * Example:
     *
     *     <ul><li>One</li><li>Two</li><li>Three</li></ul>
     *                                 ^^^^
     *                                 want to note this last item
     *
     *     $p = new WP_HTML_Tag_Processor( $html );
     *     $in_list = false;
     *     while ( $p->next_tag( array( 'tag_closers' => $in_list ? 'visit' : 'skip' ) ) ) {
     *         if ( 'UL' === $p->get_tag() ) {
     *             if ( $p->is_tag_closer() ) {
     *                 $in_list = false;
     *                 $p->set_bookmark( 'resume' );
     *                 if ( $p->seek( 'last-li' ) ) {
     *                     $p->add_class( 'last-li' );
     *                 }
     *                 $p->seek( 'resume' );
     *                 $p->release_bookmark( 'last-li' );
     *                 $p->release_bookmark( 'resume' );
     *             } else {
     *                 $in_list = true;
     *             }
     *         }
     *
     *         if ( 'LI' === $p->get_tag() ) {
     *             $p->set_bookmark( 'last-li' );
     *         }
     *     }
     *
     * Bookmarks intentionally hide the internal string offsets
     * to which they refer. They are maintained internally as
     * updates are applied to the HTML document and therefore
     * retain their "position" - the location to which they
     * originally pointed. The inability to use bookmarks with
     * functions like `substr` is therefore intentional to guard
     * against accidentally breaking the HTML.
     *
     * Because bookmarks allocate memory and require processing
     * for every applied update, they are limited and require
     * a name. They should not be created with programmatically-made
     * names, such as "li_{$index}" with some loop. As a general
     * rule they should only be created with string-literal names
     * like "start-of-section" or "last-paragraph".
     *
     * Bookmarks are a powerful tool to enable complicated behavior.
     * Consider double-checking that you need this tool if you are
     * reaching for it, as inappropriate use could lead to broken
     * HTML structure or unwanted processing overhead.
     *
     * @since 6.2.0
     *
     * @param string $name Identifies this particular bookmark.
     * @return bool Whether the bookmark was successfully created.
     */
    public function set_bookmark($name)
    {
    }
    /**
     * Removes a bookmark that is no longer needed.
     *
     * Releasing a bookmark frees up the small
     * performance overhead it requires.
     *
     * @param string $name Name of the bookmark to remove.
     * @return bool Whether the bookmark already existed before removal.
     */
    public function release_bookmark($name)
    {
    }
    /**
     * Checks whether a bookmark with the given name exists.
     *
     * @since 6.3.0
     *
     * @param string $bookmark_name Name to identify a bookmark that potentially exists.
     * @return bool Whether that bookmark exists.
     */
    public function has_bookmark($bookmark_name)
    {
    }
    /**
     * Move the internal cursor in the Tag Processor to a given bookmark's location.
     *
     * In order to prevent accidental infinite loops, there's a
     * maximum limit on the number of times seek() can be called.
     *
     * @since 6.2.0
     *
     * @param string $bookmark_name Jump to the place in the document identified by this bookmark name.
     * @return bool Whether the internal cursor was successfully moved to the bookmark's location.
     */
    public function seek($bookmark_name)
    {
    }
    /**
     * Returns the value of a requested attribute from a matched tag opener if that attribute exists.
     *
     * Example:
     *
     *     $p = new WP_HTML_Tag_Processor( '<div enabled class="test" data-test-id="14">Test</div>' );
     *     $p->next_tag( array( 'class_name' => 'test' ) ) === true;
     *     $p->get_attribute( 'data-test-id' ) === '14';
     *     $p->get_attribute( 'enabled' ) === true;
     *     $p->get_attribute( 'aria-label' ) === null;
     *
     *     $p->next_tag() === false;
     *     $p->get_attribute( 'class' ) === null;
     *
     * @since 6.2.0
     *
     * @param string $name Name of attribute whose value is requested.
     * @return string|true|null Value of attribute or `null` if not available. Boolean attributes return `true`.
     */
    public function get_attribute($name)
    {
    }
    /**
     * Gets lowercase names of all attributes matching a given prefix in the current tag.
     *
     * Note that matching is case-insensitive. This is in accordance with the spec:
     *
     * > There must never be two or more attributes on
     * > the same start tag whose names are an ASCII
     * > case-insensitive match for each other.
     *     - HTML 5 spec
     *
     * Example:
     *
     *     $p = new WP_HTML_Tag_Processor( '<div data-ENABLED class="test" DATA-test-id="14">Test</div>' );
     *     $p->next_tag( array( 'class_name' => 'test' ) ) === true;
     *     $p->get_attribute_names_with_prefix( 'data-' ) === array( 'data-enabled', 'data-test-id' );
     *
     *     $p->next_tag() === false;
     *     $p->get_attribute_names_with_prefix( 'data-' ) === null;
     *
     * @since 6.2.0
     *
     * @see https://html.spec.whatwg.org/multipage/syntax.html#attributes-2:ascii-case-insensitive
     *
     * @param string $prefix Prefix of requested attribute names.
     * @return array|null List of attribute names, or `null` when no tag opener is matched.
     */
    function get_attribute_names_with_prefix($prefix)
    {
    }
    /**
     * Returns the uppercase name of the matched tag.
     *
     * Example:
     *
     *     $p = new WP_HTML_Tag_Processor( '<div class="test">Test</div>' );
     *     $p->next_tag() === true;
     *     $p->get_tag() === 'DIV';
     *
     *     $p->next_tag() === false;
     *     $p->get_tag() === null;
     *
     * @since 6.2.0
     *
     * @return string|null Name of currently matched tag in input HTML, or `null` if none found.
     */
    public function get_tag()
    {
    }
    /**
     * Indicates if the currently matched tag contains the self-closing flag.
     *
     * No HTML elements ought to have the self-closing flag and for those, the self-closing
     * flag will be ignored. For void elements this is benign because they "self close"
     * automatically. For non-void HTML elements though problems will appear if someone
     * intends to use a self-closing element in place of that element with an empty body.
     * For HTML foreign elements and custom elements the self-closing flag determines if
     * they self-close or not.
     *
     * This function does not determine if a tag is self-closing,
     * but only if the self-closing flag is present in the syntax.
     *
     * @since 6.3.0
     *
     * @return bool Whether the currently matched tag contains the self-closing flag.
     */
    public function has_self_closing_flag()
    {
    }
    /**
     * Indicates if the current tag token is a tag closer.
     *
     * Example:
     *
     *     $p = new WP_HTML_Tag_Processor( '<div></div>' );
     *     $p->next_tag( array( 'tag_name' => 'div', 'tag_closers' => 'visit' ) );
     *     $p->is_tag_closer() === false;
     *
     *     $p->next_tag( array( 'tag_name' => 'div', 'tag_closers' => 'visit' ) );
     *     $p->is_tag_closer() === true;
     *
     * @since 6.2.0
     *
     * @return bool Whether the current tag is a tag closer.
     */
    public function is_tag_closer()
    {
    }
    /**
     * Updates or creates a new attribute on the currently matched tag with the passed value.
     *
     * For boolean attributes special handling is provided:
     *  - When `true` is passed as the value, then only the attribute name is added to the tag.
     *  - When `false` is passed, the attribute gets removed if it existed before.
     *
     * For string attributes, the value is escaped using the `esc_attr` function.
     *
     * @since 6.2.0
     * @since 6.2.1 Fix: Only create a single update for multiple calls with case-variant attribute names.
     *
     * @param string      $name  The attribute name to target.
     * @param string|bool $value The new attribute value.
     * @return bool Whether an attribute value was set.
     */
    public function set_attribute($name, $value)
    {
    }
    /**
     * Remove an attribute from the currently-matched tag.
     *
     * @since 6.2.0
     *
     * @param string $name The attribute name to remove.
     * @return bool Whether an attribute was removed.
     */
    public function remove_attribute($name)
    {
    }
    /**
     * Adds a new class name to the currently matched tag.
     *
     * @since 6.2.0
     *
     * @param string $class_name The class name to add.
     * @return bool Whether the class was set to be added.
     */
    public function add_class($class_name)
    {
    }
    /**
     * Removes a class name from the currently matched tag.
     *
     * @since 6.2.0
     *
     * @param string $class_name The class name to remove.
     * @return bool Whether the class was set to be removed.
     */
    public function remove_class($class_name)
    {
    }
    /**
     * Returns the string representation of the HTML Tag Processor.
     *
     * @since 6.2.0
     *
     * @see WP_HTML_Tag_Processor::get_updated_html()
     *
     * @return string The processed HTML.
     */
    public function __toString()
    {
    }
    /**
     * Returns the string representation of the HTML Tag Processor.
     *
     * @since 6.2.0
     * @since 6.2.1 Shifts the internal cursor corresponding to the applied updates.
     *
     * @return string The processed HTML.
     */
    public function get_updated_html()
    {
    }
}