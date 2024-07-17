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
 * #### When matching fails
 *
 * When `next_tag()` returns `false` it could mean different things:
 *
 *  - The requested tag wasn't found in the input document.
 *  - The input document ended in the middle of an HTML syntax element.
 *
 * When a document ends in the middle of a syntax element it will pause
 * the processor. This is to make it possible in the future to extend the
 * input document and proceed - an important requirement for chunked
 * streaming parsing of a document.
 *
 * Example:
 *
 *     $processor = new WP_HTML_Tag_Processor( 'This <div is="a" partial="token' );
 *     false === $processor->next_tag();
 *
 * If a special element (see next section) is encountered but no closing tag
 * is found it will count as an incomplete tag. The parser will pause as if
 * the opening tag were incomplete.
 *
 * Example:
 *
 *     $processor = new WP_HTML_Tag_Processor( '<style>// there could be more styling to come' );
 *     false === $processor->next_tag();
 *
 *     $processor = new WP_HTML_Tag_Processor( '<style>// this is everything</style><div>' );
 *     true === $processor->next_tag( 'DIV' );
 *
 * #### Special elements
 *
 * Some HTML elements are handled in a special way; their start and end tags
 * act like a void tag. These are special because their contents can't contain
 * HTML markup. Everything inside these elements is handled in a special way
 * and content that _appears_ like HTML tags inside of them isn't. There can
 * be no nesting in these elements.
 *
 * In the following list, "raw text" means that all of the content in the HTML
 * until the matching closing tag is treated verbatim without any replacements
 * and without any parsing.
 *
 *  - IFRAME allows no content but requires a closing tag.
 *  - NOEMBED (deprecated) content is raw text.
 *  - NOFRAMES (deprecated) content is raw text.
 *  - SCRIPT content is plaintext apart from legacy rules allowing `</script>` inside an HTML comment.
 *  - STYLE content is raw text.
 *  - TITLE content is plain text but character references are decoded.
 *  - TEXTAREA content is plain text but character references are decoded.
 *  - XMP (deprecated) content is raw text.
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
 *     if ( $tags->next_tag( array( 'class_name' => 'wp-group-block' ) ) ) {
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
 * ## Tokens and finer-grained processing.
 *
 * It's possible to scan through every lexical token in the
 * HTML document using the `next_token()` function. This
 * alternative form takes no argument and provides no built-in
 * query syntax.
 *
 * Example:
 *
 *      $title = '(untitled)';
 *      $text  = '';
 *      while ( $processor->next_token() ) {
 *          switch ( $processor->get_token_name() ) {
 *              case '#text':
 *                  $text .= $processor->get_modifiable_text();
 *                  break;
 *
 *              case 'BR':
 *                  $text .= "\n";
 *                  break;
 *
 *              case 'TITLE':
 *                  $title = $processor->get_modifiable_text();
 *                  break;
 *          }
 *      }
 *      return trim( "# {$title}\n\n{$text}" );
 *
 * ### Tokens and _modifiable text_.
 *
 * #### Special "atomic" HTML elements.
 *
 * Not all HTML elements are able to contain other elements inside of them.
 * For instance, the contents inside a TITLE element are plaintext (except
 * that character references like &amp; will be decoded). This means that
 * if the string `<img>` appears inside a TITLE element, then it's not an
 * image tag, but rather it's text describing an image tag. Likewise, the
 * contents of a SCRIPT or STYLE element are handled entirely separately in
 * a browser than the contents of other elements because they represent a
 * different language than HTML.
 *
 * For these elements the Tag Processor treats the entire sequence as one,
 * from the opening tag, including its contents, through its closing tag.
 * This means that the it's not possible to match the closing tag for a
 * SCRIPT element unless it's unexpected; the Tag Processor already matched
 * it when it found the opening tag.
 *
 * The inner contents of these elements are that element's _modifiable text_.
 *
 * The special elements are:
 *  - `SCRIPT` whose contents are treated as raw plaintext but supports a legacy
 *    style of including JavaScript inside of HTML comments to avoid accidentally
 *    closing the SCRIPT from inside a JavaScript string. E.g. `console.log( '</script>' )`.
 *  - `TITLE` and `TEXTAREA` whose contents are treated as plaintext and then any
 *    character references are decoded. E.g. `1 &lt; 2 < 3` becomes `1 < 2 < 3`.
 *  - `IFRAME`, `NOSCRIPT`, `NOEMBED`, `NOFRAME`, `STYLE` whose contents are treated as
 *    raw plaintext and left as-is. E.g. `1 &lt; 2 < 3` remains `1 &lt; 2 < 3`.
 *
 * #### Other tokens with modifiable text.
 *
 * There are also non-elements which are void/self-closing in nature and contain
 * modifiable text that is part of that individual syntax token itself.
 *
 *  - `#text` nodes, whose entire token _is_ the modifiable text.
 *  - HTML comments and tokens that become comments due to some syntax error. The
 *    text for these tokens is the portion of the comment inside of the syntax.
 *    E.g. for `<!-- comment -->` the text is `" comment "` (note the spaces are included).
 *  - `CDATA` sections, whose text is the content inside of the section itself. E.g. for
 *    `<![CDATA[some content]]>` the text is `"some content"` (with restrictions [1]).
 *  - "Funky comments," which are a special case of invalid closing tags whose name is
 *    invalid. The text for these nodes is the text that a browser would transform into
 *    an HTML comment when parsing. E.g. for `</%post_author>` the text is `%post_author`.
 *  - `DOCTYPE` declarations like `<DOCTYPE html>` which have no closing tag.
 *  - XML Processing instruction nodes like `<?wp __( "Like" ); ?>` (with restrictions [2]).
 *  - The empty end tag `</>` which is ignored in the browser and DOM.
 *
 * [1]: There are no CDATA sections in HTML. When encountering `<![CDATA[`, everything
 *      until the next `>` becomes a bogus HTML comment, meaning there can be no CDATA
 *      section in an HTML document containing `>`. The Tag Processor will first find
 *      all valid and bogus HTML comments, and then if the comment _would_ have been a
 *      CDATA section _were they to exist_, it will indicate this as the type of comment.
 *
 * [2]: XML allows a broader range of characters in a processing instruction's target name
 *      and disallows "xml" as a name, since it's special. The Tag Processor only recognizes
 *      target names with an ASCII-representable subset of characters. It also exhibits the
 *      same constraint as with CDATA sections, in that `>` cannot exist within the token
 *      since Processing Instructions do no exist within HTML and their syntax transforms
 *      into a bogus comment in the DOM.
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
 * ### Scripting Flag
 *
 * The Tag Processor parses HTML with the "scripting flag" disabled. This means
 * that it doesn't run any scripts while parsing the page. In a browser with
 * JavaScript enabled, for example, the script can change the parse of the
 * document as it loads. On the server, however, evaluating JavaScript is not
 * only impractical, but also unwanted.
 *
 * Practically this means that the Tag Processor will descend into NOSCRIPT
 * elements and process its child tags. Were the scripting flag enabled, such
 * as in a typical browser, the contents of NOSCRIPT are skipped entirely.
 *
 * This allows the HTML API to process the content that will be presented in
 * a browser when scripting is disabled, but it offers a different view of a
 * page than most browser sessions will experience. E.g. the tags inside the
 * NOSCRIPT disappear.
 *
 * ### Text Encoding
 *
 * The Tag Processor assumes that the input HTML document is encoded with a
 * text encoding compatible with 7-bit ASCII's '<', '>', '&', ';', '/', '=',
 * "'", '"', 'a' - 'z', 'A' - 'Z', and the whitespace characters ' ', tab,
 * carriage-return, newline, and form-feed.
 *
 * In practice, this includes almost every single-byte encoding as well as
 * UTF-8. Notably, however, it does not include UTF-16. If providing input
 * that's incompatible, then convert the encoding beforehand.
 *
 * @since 6.2.0
 * @since 6.2.1 Fix: Support for various invalid comments; attribute updates are case-insensitive.
 * @since 6.3.2 Fix: Skip HTML-like content inside rawtext elements such as STYLE.
 * @since 6.5.0 Pauses processor when input ends in an incomplete syntax token.
 *              Introduces "special" elements which act like void elements, e.g. TITLE, STYLE.
 *              Allows scanning through all tokens and processing modifiable text, where applicable.
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
     * Specifies mode of operation of the parser at any given time.
     *
     * | State           | Meaning                                                              |
     * | ----------------|----------------------------------------------------------------------|
     * | *Ready*         | The parser is ready to run.                                          |
     * | *Complete*      | There is nothing left to parse.                                      |
     * | *Incomplete*    | The HTML ended in the middle of a token; nothing more can be parsed. |
     * | *Matched tag*   | Found an HTML tag; it's possible to modify its attributes.           |
     * | *Text node*     | Found a #text node; this is plaintext and modifiable.                |
     * | *CDATA node*    | Found a CDATA section; this is modifiable.                           |
     * | *Comment*       | Found a comment or bogus comment; this is modifiable.                |
     * | *Presumptuous*  | Found an empty tag closer: `</>`.                                    |
     * | *Funky comment* | Found a tag closer with an invalid tag name; this is modifiable.     |
     *
     * @since 6.5.0
     *
     * @see WP_HTML_Tag_Processor::STATE_READY
     * @see WP_HTML_Tag_Processor::STATE_COMPLETE
     * @see WP_HTML_Tag_Processor::STATE_INCOMPLETE_INPUT
     * @see WP_HTML_Tag_Processor::STATE_MATCHED_TAG
     * @see WP_HTML_Tag_Processor::STATE_TEXT_NODE
     * @see WP_HTML_Tag_Processor::STATE_CDATA_NODE
     * @see WP_HTML_Tag_Processor::STATE_COMMENT
     * @see WP_HTML_Tag_Processor::STATE_DOCTYPE
     * @see WP_HTML_Tag_Processor::STATE_PRESUMPTUOUS_TAG
     * @see WP_HTML_Tag_Processor::STATE_FUNKY_COMMENT
     *
     * @var string
     */
    protected $parser_state = self::STATE_READY;
    /**
     * What kind of syntax token became an HTML comment.
     *
     * Since there are many ways in which HTML syntax can create an HTML comment,
     * this indicates which of those caused it. This allows the Tag Processor to
     * represent more from the original input document than would appear in the DOM.
     *
     * @since 6.5.0
     *
     * @var string|null
     */
    protected $comment_type = \null;
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
     *     $start  = $attributes['src']->start;
     *     $length = $attributes['src']->length;
     *     $modifications[] = new WP_HTML_Text_Replacement( $start, $length, $new_value );
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
     * @since 6.5.0 No longer processes incomplete tokens at end of document; pauses the processor at start of token.
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
     * @return bool Whether a tag was matched.
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
     * Finds the next token in the HTML document.
     *
     * An HTML document can be viewed as a stream of tokens,
     * where tokens are things like HTML tags, HTML comments,
     * text nodes, etc. This method finds the next token in
     * the HTML document and returns whether it found one.
     *
     * If it starts parsing a token and reaches the end of the
     * document then it will seek to the start of the last
     * token and pause, returning `false` to indicate that it
     * failed to find a complete token.
     *
     * Possible token types, based on the HTML specification:
     *
     *  - an HTML tag, whether opening, closing, or void.
     *  - a text node - the plaintext inside tags.
     *  - an HTML comment.
     *  - a DOCTYPE declaration.
     *  - a processing instruction, e.g. `<?xml version="1.0" ?>`.
     *
     * The Tag Processor currently only supports the tag token.
     *
     * @since 6.5.0
     *
     * @return bool Whether a token was parsed.
     */
    public function next_token()
    {
    }
    /**
     * Whether the processor paused because the input HTML document ended
     * in the middle of a syntax element, such as in the middle of a tag.
     *
     * Example:
     *
     *     $processor = new WP_HTML_Tag_Processor( '<input type="text" value="Th' );
     *     false      === $processor->get_next_tag();
     *     true       === $processor->paused_at_incomplete_token();
     *
     * @since 6.5.0
     *
     * @return bool Whether the parse paused at the start of an incomplete token.
     */
    public function paused_at_incomplete_token()
    {
    }
    /**
     * Generator for a foreach loop to step through each class name for the matched tag.
     *
     * This generator function is designed to be used inside a "foreach" loop.
     *
     * Example:
     *
     *     $p = new WP_HTML_Tag_Processor( "<div class='free &lt;egg&lt;\tlang-en'>" );
     *     $p->next_tag();
     *     foreach ( $p->class_list() as $class_name ) {
     *         echo "{$class_name} ";
     *     }
     *     // Outputs: "free <egg> lang-en "
     *
     * @since 6.4.0
     * @phpstan-return void
     */
    public function class_list()
    {
    }
    /**
     * Returns if a matched tag contains the given ASCII case-insensitive class name.
     *
     * @since 6.4.0
     *
     * @param string $wanted_class Look for this CSS class name, ASCII case-insensitive.
     * @return bool|null Whether the matched tag contains the given class name, or null if not matched.
     */
    public function has_class($wanted_class)
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
    public function get_attribute_names_with_prefix($prefix)
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
     * Indicates the kind of matched token, if any.
     *
     * This differs from `get_token_name()` in that it always
     * returns a static string indicating the type, whereas
     * `get_token_name()` may return values derived from the
     * token itself, such as a tag name or processing
     * instruction tag.
     *
     * Possible values:
     *  - `#tag` when matched on a tag.
     *  - `#text` when matched on a text node.
     *  - `#cdata-section` when matched on a CDATA node.
     *  - `#comment` when matched on a comment.
     *  - `#doctype` when matched on a DOCTYPE declaration.
     *  - `#presumptuous-tag` when matched on an empty tag closer.
     *  - `#funky-comment` when matched on a funky comment.
     *
     * @since 6.5.0
     *
     * @return string|null What kind of token is matched, or null.
     */
    public function get_token_type()
    {
    }
    /**
     * Returns the node name represented by the token.
     *
     * This matches the DOM API value `nodeName`. Some values
     * are static, such as `#text` for a text node, while others
     * are dynamically generated from the token itself.
     *
     * Dynamic names:
     *  - Uppercase tag name for tag matches.
     *  - `html` for DOCTYPE declarations.
     *
     * Note that if the Tag Processor is not matched on a token
     * then this function will return `null`, either because it
     * hasn't yet found a token or because it reached the end
     * of the document without matching a token.
     *
     * @since 6.5.0
     *
     * @return string|null Name of the matched token.
     */
    public function get_token_name()
    {
    }
    /**
     * Indicates what kind of comment produced the comment node.
     *
     * Because there are different kinds of HTML syntax which produce
     * comments, the Tag Processor tracks and exposes this as a type
     * for the comment. Nominally only regular HTML comments exist as
     * they are commonly known, but a number of unrelated syntax errors
     * also produce comments.
     *
     * @see self::COMMENT_AS_ABRUPTLY_CLOSED_COMMENT
     * @see self::COMMENT_AS_CDATA_LOOKALIKE
     * @see self::COMMENT_AS_INVALID_HTML
     * @see self::COMMENT_AS_HTML_COMMENT
     * @see self::COMMENT_AS_PI_NODE_LOOKALIKE
     *
     * @since 6.5.0
     *
     * @return string|null
     */
    public function get_comment_type()
    {
    }
    /**
     * Returns the modifiable text for a matched token, or an empty string.
     *
     * Modifiable text is text content that may be read and changed without
     * changing the HTML structure of the document around it. This includes
     * the contents of `#text` nodes in the HTML as well as the inner
     * contents of HTML comments, Processing Instructions, and others, even
     * though these nodes aren't part of a parsed DOM tree. They also contain
     * the contents of SCRIPT and STYLE tags, of TEXTAREA tags, and of any
     * other section in an HTML document which cannot contain HTML markup (DATA).
     *
     * If a token has no modifiable text then an empty string is returned to
     * avoid needless crashing or type errors. An empty string does not mean
     * that a token has modifiable text, and a token with modifiable text may
     * have an empty string (e.g. a comment with no contents).
     *
     * @since 6.5.0
     *
     * @return string
     */
    public function get_modifiable_text()
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
     * @since 6.4.0 No longer calls subclass method `next_tag()` after updating HTML.
     *
     * @return string The processed HTML.
     */
    public function get_updated_html()
    {
    }
    /**
     * Parser Ready State.
     *
     * Indicates that the parser is ready to run and waiting for a state transition.
     * It may not have started yet, or it may have just finished parsing a token and
     * is ready to find the next one.
     *
     * @since 6.5.0
     *
     * @access private
     */
    const STATE_READY = 'STATE_READY';
    /**
     * Parser Complete State.
     *
     * Indicates that the parser has reached the end of the document and there is
     * nothing left to scan. It finished parsing the last token completely.
     *
     * @since 6.5.0
     *
     * @access private
     */
    const STATE_COMPLETE = 'STATE_COMPLETE';
    /**
     * Parser Incomplete Input State.
     *
     * Indicates that the parser has reached the end of the document before finishing
     * a token. It started parsing a token but there is a possibility that the input
     * HTML document was truncated in the middle of a token.
     *
     * The parser is reset at the start of the incomplete token and has paused. There
     * is nothing more than can be scanned unless provided a more complete document.
     *
     * @since 6.5.0
     *
     * @access private
     */
    const STATE_INCOMPLETE_INPUT = 'STATE_INCOMPLETE_INPUT';
    /**
     * Parser Matched Tag State.
     *
     * Indicates that the parser has found an HTML tag and it's possible to get
     * the tag name and read or modify its attributes (if it's not a closing tag).
     *
     * @since 6.5.0
     *
     * @access private
     */
    const STATE_MATCHED_TAG = 'STATE_MATCHED_TAG';
    /**
     * Parser Text Node State.
     *
     * Indicates that the parser has found a text node and it's possible
     * to read and modify that text.
     *
     * @since 6.5.0
     *
     * @access private
     */
    const STATE_TEXT_NODE = 'STATE_TEXT_NODE';
    /**
     * Parser CDATA Node State.
     *
     * Indicates that the parser has found a CDATA node and it's possible
     * to read and modify its modifiable text. Note that in HTML there are
     * no CDATA nodes outside of foreign content (SVG and MathML). Outside
     * of foreign content, they are treated as HTML comments.
     *
     * @since 6.5.0
     *
     * @access private
     */
    const STATE_CDATA_NODE = 'STATE_CDATA_NODE';
    /**
     * Indicates that the parser has found an HTML comment and it's
     * possible to read and modify its modifiable text.
     *
     * @since 6.5.0
     *
     * @access private
     */
    const STATE_COMMENT = 'STATE_COMMENT';
    /**
     * Indicates that the parser has found a DOCTYPE node and it's
     * possible to read and modify its modifiable text.
     *
     * @since 6.5.0
     *
     * @access private
     */
    const STATE_DOCTYPE = 'STATE_DOCTYPE';
    /**
     * Indicates that the parser has found an empty tag closer `</>`.
     *
     * Note that in HTML there are no empty tag closers, and they
     * are ignored. Nonetheless, the Tag Processor still
     * recognizes them as they appear in the HTML stream.
     *
     * These were historically discussed as a "presumptuous tag
     * closer," which would close the nearest open tag, but were
     * dismissed in favor of explicitly-closing tags.
     *
     * @since 6.5.0
     *
     * @access private
     */
    const STATE_PRESUMPTUOUS_TAG = 'STATE_PRESUMPTUOUS_TAG';
    /**
     * Indicates that the parser has found a "funky comment"
     * and it's possible to read and modify its modifiable text.
     *
     * Example:
     *
     *     </%url>
     *     </{"wp-bit":"query/post-author"}>
     *     </2>
     *
     * Funky comments are tag closers with invalid tag names. Note
     * that in HTML these are turn into bogus comments. Nonetheless,
     * the Tag Processor recognizes them in a stream of HTML and
     * exposes them for inspection and modification.
     *
     * @since 6.5.0
     *
     * @access private
     */
    const STATE_FUNKY_COMMENT = 'STATE_WP_FUNKY';
    /**
     * Indicates that a comment was created when encountering abruptly-closed HTML comment.
     *
     * Example:
     *
     *     <!-->
     *     <!--->
     *
     * @since 6.5.0
     */
    const COMMENT_AS_ABRUPTLY_CLOSED_COMMENT = 'COMMENT_AS_ABRUPTLY_CLOSED_COMMENT';
    /**
     * Indicates that a comment would be parsed as a CDATA node,
     * were HTML to allow CDATA nodes outside of foreign content.
     *
     * Example:
     *
     *     <![CDATA[This is a CDATA node.]]>
     *
     * This is an HTML comment, but it looks like a CDATA node.
     *
     * @since 6.5.0
     */
    const COMMENT_AS_CDATA_LOOKALIKE = 'COMMENT_AS_CDATA_LOOKALIKE';
    /**
     * Indicates that a comment was created when encountering
     * normative HTML comment syntax.
     *
     * Example:
     *
     *     <!-- this is a comment -->
     *
     * @since 6.5.0
     */
    const COMMENT_AS_HTML_COMMENT = 'COMMENT_AS_HTML_COMMENT';
    /**
     * Indicates that a comment would be parsed as a Processing
     * Instruction node, were they to exist within HTML.
     *
     * Example:
     *
     *     <?wp __( 'Like' ) ?>
     *
     * This is an HTML comment, but it looks like a CDATA node.
     *
     * @since 6.5.0
     */
    const COMMENT_AS_PI_NODE_LOOKALIKE = 'COMMENT_AS_PI_NODE_LOOKALIKE';
    /**
     * Indicates that a comment was created when encountering invalid
     * HTML input, a so-called "bogus comment."
     *
     * Example:
     *
     *     <?nothing special>
     *     <!{nothing special}>
     *
     * @since 6.5.0
     */
    const COMMENT_AS_INVALID_HTML = 'COMMENT_AS_INVALID_HTML';
}