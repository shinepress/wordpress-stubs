<?php


/**
 * HTML API: WP_HTML_Processor class
 *
 * @package WordPress
 * @subpackage HTML-API
 * @since 6.4.0
 */
/**
 * Core class used to safely parse and modify an HTML document.
 *
 * The HTML Processor class properly parses and modifies HTML5 documents.
 *
 * It supports a subset of the HTML5 specification, and when it encounters
 * unsupported markup, it aborts early to avoid unintentionally breaking
 * the document. The HTML Processor should never break an HTML document.
 *
 * While the `WP_HTML_Tag_Processor` is a valuable tool for modifying
 * attributes on individual HTML tags, the HTML Processor is more capable
 * and useful for the following operations:
 *
 *  - Querying based on nested HTML structure.
 *
 * Eventually the HTML Processor will also support:
 *  - Wrapping a tag in surrounding HTML.
 *  - Unwrapping a tag by removing its parent.
 *  - Inserting and removing nodes.
 *  - Reading and changing inner content.
 *  - Navigating up or around HTML structure.
 *
 * ## Usage
 *
 * Use of this class requires three steps:
 *
 *   1. Call a static creator method with your input HTML document.
 *   2. Find the location in the document you are looking for.
 *   3. Request changes to the document at that location.
 *
 * Example:
 *
 *     $processor = WP_HTML_Processor::create_fragment( $html );
 *     if ( $processor->next_tag( array( 'breadcrumbs' => array( 'DIV', 'FIGURE', 'IMG' ) ) ) ) {
 *         $processor->add_class( 'responsive-image' );
 *     }
 *
 * #### Breadcrumbs
 *
 * Breadcrumbs represent the stack of open elements from the root
 * of the document or fragment down to the currently-matched node,
 * if one is currently selected. Call WP_HTML_Processor::get_breadcrumbs()
 * to inspect the breadcrumbs for a matched tag.
 *
 * Breadcrumbs can specify nested HTML structure and are equivalent
 * to a CSS selector comprising tag names separated by the child
 * combinator, such as "DIV > FIGURE > IMG".
 *
 * Since all elements find themselves inside a full HTML document
 * when parsed, the return value from `get_breadcrumbs()` will always
 * contain any implicit outermost elements. For example, when parsing
 * with `create_fragment()` in the `BODY` context (the default), any
 * tag in the given HTML document will contain `array( 'HTML', 'BODY', … )`
 * in its breadcrumbs.
 *
 * Despite containing the implied outermost elements in their breadcrumbs,
 * tags may be found with the shortest-matching breadcrumb query. That is,
 * `array( 'IMG' )` matches all IMG elements and `array( 'P', 'IMG' )`
 * matches all IMG elements directly inside a P element. To ensure that no
 * partial matches erroneously match it's possible to specify in a query
 * the full breadcrumb match all the way down from the root HTML element.
 *
 * Example:
 *
 *     $html = '<figure><img><figcaption>A <em>lovely</em> day outside</figcaption></figure>';
 *     //               ----- Matches here.
 *     $processor->next_tag( array( 'breadcrumbs' => array( 'FIGURE', 'IMG' ) ) );
 *
 *     $html = '<figure><img><figcaption>A <em>lovely</em> day outside</figcaption></figure>';
 *     //                                  ---- Matches here.
 *     $processor->next_tag( array( 'breadcrumbs' => array( 'FIGURE', 'FIGCAPTION', 'EM' ) ) );
 *
 *     $html = '<div><img></div><img>';
 *     //                       ----- Matches here, because IMG must be a direct child of the implicit BODY.
 *     $processor->next_tag( array( 'breadcrumbs' => array( 'BODY', 'IMG' ) ) );
 *
 * ## HTML Support
 *
 * This class implements a small part of the HTML5 specification.
 * It's designed to operate within its support and abort early whenever
 * encountering circumstances it can't properly handle. This is
 * the principle way in which this class remains as simple as possible
 * without cutting corners and breaking compliance.
 *
 * ### Supported elements
 *
 * If any unsupported element appears in the HTML input the HTML Processor
 * will abort early and stop all processing. This draconian measure ensures
 * that the HTML Processor won't break any HTML it doesn't fully understand.
 *
 * The following list specifies the HTML tags that _are_ supported:
 *
 *  - Containers: ADDRESS, BLOCKQUOTE, DETAILS, DIALOG, DIV, FOOTER, HEADER, MAIN, MENU, SPAN, SUMMARY.
 *  - Custom elements: All custom elements are supported. :)
 *  - Form elements: BUTTON, DATALIST, FIELDSET, INPUT, LABEL, LEGEND, METER, PROGRESS, SEARCH.
 *  - Formatting elements: B, BIG, CODE, EM, FONT, I, PRE, SMALL, STRIKE, STRONG, TT, U, WBR.
 *  - Heading elements: H1, H2, H3, H4, H5, H6, HGROUP.
 *  - Links: A.
 *  - Lists: DD, DL, DT, LI, OL, UL.
 *  - Media elements: AUDIO, CANVAS, EMBED, FIGCAPTION, FIGURE, IMG, MAP, PICTURE, SOURCE, TRACK, VIDEO.
 *  - Paragraph: BR, P.
 *  - Phrasing elements: ABBR, AREA, BDI, BDO, CITE, DATA, DEL, DFN, INS, MARK, OUTPUT, Q, SAMP, SUB, SUP, TIME, VAR.
 *  - Sectioning elements: ARTICLE, ASIDE, HR, NAV, SECTION.
 *  - Templating elements: SLOT.
 *  - Text decoration: RUBY.
 *  - Deprecated elements: ACRONYM, BLINK, CENTER, DIR, ISINDEX, KEYGEN, LISTING, MULTICOL, NEXTID, PARAM, SPACER.
 *
 * ### Supported markup
 *
 * Some kinds of non-normative HTML involve reconstruction of formatting elements and
 * re-parenting of mis-nested elements. For example, a DIV tag found inside a TABLE
 * may in fact belong _before_ the table in the DOM. If the HTML Processor encounters
 * such a case it will stop processing.
 *
 * The following list specifies HTML markup that _is_ supported:
 *
 *  - Markup involving only those tags listed above.
 *  - Fully-balanced and non-overlapping tags.
 *  - HTML with unexpected tag closers.
 *  - Some unbalanced or overlapping tags.
 *  - P tags after unclosed P tags.
 *  - BUTTON tags after unclosed BUTTON tags.
 *  - A tags after unclosed A tags that don't involve any active formatting elements.
 *
 * @since 6.4.0
 *
 * @see WP_HTML_Tag_Processor
 * @see https://html.spec.whatwg.org/
 */
class WP_HTML_Processor extends \WP_HTML_Tag_Processor
{
    /**
     * The maximum number of bookmarks allowed to exist at any given time.
     *
     * HTML processing requires more bookmarks than basic tag processing,
     * so this class constant from the Tag Processor is overwritten.
     *
     * @since 6.4.0
     *
     * @var int
     */
    const MAX_BOOKMARKS = 100;
    /*
     * Public Interface Functions
     */
    /**
     * Creates an HTML processor in the fragment parsing mode.
     *
     * Use this for cases where you are processing chunks of HTML that
     * will be found within a bigger HTML document, such as rendered
     * block output that exists within a post, `the_content` inside a
     * rendered site layout.
     *
     * Fragment parsing occurs within a context, which is an HTML element
     * that the document will eventually be placed in. It becomes important
     * when special elements have different rules than others, such as inside
     * a TEXTAREA or a TITLE tag where things that look like tags are text,
     * or inside a SCRIPT tag where things that look like HTML syntax are JS.
     *
     * The context value should be a representation of the tag into which the
     * HTML is found. For most cases this will be the body element. The HTML
     * form is provided because a context element may have attributes that
     * impact the parse, such as with a SCRIPT tag and its `type` attribute.
     *
     * ## Current HTML Support
     *
     *  - The only supported context is `<body>`, which is the default value.
     *  - The only supported document encoding is `UTF-8`, which is the default value.
     *
     * @since 6.4.0
     * @since 6.6.0 Returns `static` instead of `self` so it can create subclass instances.
     *
     * @param string $html     Input HTML fragment to process.
     * @param string $context  Context element for the fragment, must be default of `<body>`.
     * @param string $encoding Text encoding of the document; must be default of 'UTF-8'.
     * @return static|null The created processor if successful, otherwise null.
     */
    public static function create_fragment($html, $context = '<body>', $encoding = 'UTF-8')
    {
    }
    /**
     * Constructor.
     *
     * Do not use this method. Use the static creator methods instead.
     *
     * @access private
     *
     * @since 6.4.0
     *
     * @see WP_HTML_Processor::create_fragment()
     *
     * @param string      $html                                  HTML to process.
     * @param string|null $use_the_static_create_methods_instead This constructor should not be called manually.
     */
    public function __construct($html, $use_the_static_create_methods_instead = \null)
    {
    }
    /**
     * Returns the last error, if any.
     *
     * Various situations lead to parsing failure but this class will
     * return `false` in all those cases. To determine why something
     * failed it's possible to request the last error. This can be
     * helpful to know to distinguish whether a given tag couldn't
     * be found or if content in the document caused the processor
     * to give up and abort processing.
     *
     * Example
     *
     *     $processor = WP_HTML_Processor::create_fragment( '<template><strong><button><em><p><em>' );
     *     false === $processor->next_tag();
     *     WP_HTML_Processor::ERROR_UNSUPPORTED === $processor->get_last_error();
     *
     * @since 6.4.0
     *
     * @see self::ERROR_UNSUPPORTED
     * @see self::ERROR_EXCEEDED_MAX_BOOKMARKS
     *
     * @return string|null The last error, if one exists, otherwise null.
     */
    public function get_last_error()
    {
    }
    /**
     * Finds the next tag matching the $query.
     *
     * @todo Support matching the class name and tag name.
     *
     * @since 6.4.0
     * @since 6.6.0 Visits all tokens, including virtual ones.
     *
     * @throws Exception When unable to allocate a bookmark for the next token in the input HTML document.
     *
     * @param array|string|null $query {
     *     Optional. Which tag name to find, having which class, etc. Default is to find any tag.
     *
     *     @type string|null $tag_name     Which tag to find, or `null` for "any tag."
     *     @type string      $tag_closers  'visit' to pause at tag closers, 'skip' or unset to only visit openers.
     *     @type int|null    $match_offset Find the Nth tag matching all search criteria.
     *                                     1 for "first" tag, 3 for "third," etc.
     *                                     Defaults to first tag.
     *     @type string|null $class_name   Tag must contain this whole class name to match.
     *     @type string[]    $breadcrumbs  DOM sub-path at which element is found, e.g. `array( 'FIGURE', 'IMG' )`.
     *                                     May also contain the wildcard `*` which matches a single element, e.g. `array( 'SECTION', '*' )`.
     * }
     * @return bool Whether a tag was matched.
     * @phpstan-param null|array{
     *   tag_name?: string|null,
     *   tag_closers?: string,
     *   match_offset?: int|null,
     *   class_name?: string|null,
     *   breadcrumbs?: string[],
     * } $query
     */
    public function next_tag($query = \null)
    {
    }
    /**
     * Ensures internal accounting is maintained for HTML semantic rules while
     * the underlying Tag Processor class is seeking to a bookmark.
     *
     * This doesn't currently have a way to represent non-tags and doesn't process
     * semantic rules for text nodes. For access to the raw tokens consider using
     * WP_HTML_Tag_Processor instead.
     *
     * @since 6.5.0 Added for internal support; do not use.
     *
     * @access private
     *
     * @return bool
     */
    public function next_token()
    {
    }
    /**
     * Indicates if the current tag token is a tag closer.
     *
     * Example:
     *
     *     $p = WP_HTML_Processor::create_fragment( '<div></div>' );
     *     $p->next_tag( array( 'tag_name' => 'div', 'tag_closers' => 'visit' ) );
     *     $p->is_tag_closer() === false;
     *
     *     $p->next_tag( array( 'tag_name' => 'div', 'tag_closers' => 'visit' ) );
     *     $p->is_tag_closer() === true;
     *
     * @since 6.6.0 Subclassed for HTML Processor.
     *
     * @return bool Whether the current tag is a tag closer.
     */
    public function is_tag_closer()
    {
    }
    /**
     * Indicates if the currently-matched tag matches the given breadcrumbs.
     *
     * A "*" represents a single tag wildcard, where any tag matches, but not no tags.
     *
     * At some point this function _may_ support a `**` syntax for matching any number
     * of unspecified tags in the breadcrumb stack. This has been intentionally left
     * out, however, to keep this function simple and to avoid introducing backtracking,
     * which could open up surprising performance breakdowns.
     *
     * Example:
     *
     *     $processor = WP_HTML_Processor::create_fragment( '<div><span><figure><img></figure></span></div>' );
     *     $processor->next_tag( 'img' );
     *     true  === $processor->matches_breadcrumbs( array( 'figure', 'img' ) );
     *     true  === $processor->matches_breadcrumbs( array( 'span', 'figure', 'img' ) );
     *     false === $processor->matches_breadcrumbs( array( 'span', 'img' ) );
     *     true  === $processor->matches_breadcrumbs( array( 'span', '*', 'img' ) );
     *
     * @since 6.4.0
     *
     * @param string[] $breadcrumbs DOM sub-path at which element is found, e.g. `array( 'FIGURE', 'IMG' )`.
     *                              May also contain the wildcard `*` which matches a single element, e.g. `array( 'SECTION', '*' )`.
     * @return bool Whether the currently-matched tag is found at the given nested structure.
     */
    public function matches_breadcrumbs($breadcrumbs)
    {
    }
    /**
     * Indicates if the currently-matched node expects a closing
     * token, or if it will self-close on the next step.
     *
     * Most HTML elements expect a closer, such as a P element or
     * a DIV element. Others, like an IMG element are void and don't
     * have a closing tag. Special elements, such as SCRIPT and STYLE,
     * are treated just like void tags. Text nodes and self-closing
     * foreign content will also act just like a void tag, immediately
     * closing as soon as the processor advances to the next token.
     *
     * @since 6.6.0
     *
     * @todo When adding support for foreign content, ensure that
     *       this returns false for self-closing elements in the
     *       SVG and MathML namespace.
     *
     * @param  ?WP_HTML_Token $node Node to examine instead of current node, if provided.
     * @return bool Whether to expect a closer for the currently-matched node,
     *              or `null` if not matched on any token.
     */
    public function expects_closer($node = \null)
    {
    }
    /**
     * Steps through the HTML document and stop at the next tag, if any.
     *
     * @since 6.4.0
     *
     * @throws Exception When unable to allocate a bookmark for the next token in the input HTML document.
     *
     * @see self::PROCESS_NEXT_NODE
     * @see self::REPROCESS_CURRENT_NODE
     *
     * @param string $node_to_process Whether to parse the next node or reprocess the current node.
     * @return bool Whether a tag was matched.
     */
    public function step($node_to_process = self::PROCESS_NEXT_NODE)
    {
    }
    /**
     * Computes the HTML breadcrumbs for the currently-matched node, if matched.
     *
     * Breadcrumbs start at the outermost parent and descend toward the matched element.
     * They always include the entire path from the root HTML node to the matched element.
     *
     * @todo It could be more efficient to expose a generator-based version of this function
     *       to avoid creating the array copy on tag iteration. If this is done, it would likely
     *       be more useful to walk up the stack when yielding instead of starting at the top.
     *
     * Example
     *
     *     $processor = WP_HTML_Processor::create_fragment( '<p><strong><em><img></em></strong></p>' );
     *     $processor->next_tag( 'IMG' );
     *     $processor->get_breadcrumbs() === array( 'HTML', 'BODY', 'P', 'STRONG', 'EM', 'IMG' );
     *
     * @since 6.4.0
     *
     * @return string[]|null Array of tag names representing path to matched node, if matched, otherwise NULL.
     */
    public function get_breadcrumbs()
    {
    }
    /**
     * Returns the nesting depth of the current location in the document.
     *
     * Example:
     *
     *     $processor = WP_HTML_Processor::create_fragment( '<div><p></p></div>' );
     *     // The processor starts in the BODY context, meaning it has depth from the start: HTML > BODY.
     *     2 === $processor->get_current_depth();
     *
     *     // Opening the DIV element increases the depth.
     *     $processor->next_token();
     *     3 === $processor->get_current_depth();
     *
     *     // Opening the P element increases the depth.
     *     $processor->next_token();
     *     4 === $processor->get_current_depth();
     *
     *     // The P element is closed during `next_token()` so the depth is decreased to reflect that.
     *     $processor->next_token();
     *     3 === $processor->get_current_depth();
     *
     * @since 6.6.0
     *
     * @return int Nesting-depth of current location in the document.
     */
    public function get_current_depth()
    {
    }
    /*
     * HTML semantic overrides for Tag Processor
     */
    /**
     * Returns the uppercase name of the matched tag.
     *
     * The semantic rules for HTML specify that certain tags be reprocessed
     * with a different tag name. Because of this, the tag name presented
     * by the HTML Processor may differ from the one reported by the HTML
     * Tag Processor, which doesn't apply these semantic rules.
     *
     * Example:
     *
     *     $processor = new WP_HTML_Tag_Processor( '<div class="test">Test</div>' );
     *     $processor->next_tag() === true;
     *     $processor->get_tag() === 'DIV';
     *
     *     $processor->next_tag() === false;
     *     $processor->get_tag() === null;
     *
     * @since 6.4.0
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
     * @since 6.6.0 Subclassed for the HTML Processor.
     *
     * @return bool Whether the currently matched tag contains the self-closing flag.
     */
    public function has_self_closing_flag()
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
     * @since 6.6.0 Subclassed for the HTML Processor.
     *
     * @return string|null Name of the matched token.
     */
    public function get_token_name()
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
     * @since 6.6.0 Subclassed for the HTML Processor.
     *
     * @return string|null What kind of token is matched, or null.
     */
    public function get_token_type()
    {
    }
    /**
     * Returns the value of a requested attribute from a matched tag opener if that attribute exists.
     *
     * Example:
     *
     *     $p = WP_HTML_Processor::create_fragment( '<div enabled class="test" data-test-id="14">Test</div>' );
     *     $p->next_token() === true;
     *     $p->get_attribute( 'data-test-id' ) === '14';
     *     $p->get_attribute( 'enabled' ) === true;
     *     $p->get_attribute( 'aria-label' ) === null;
     *
     *     $p->next_tag() === false;
     *     $p->get_attribute( 'class' ) === null;
     *
     * @since 6.6.0 Subclassed for HTML Processor.
     *
     * @param string $name Name of attribute whose value is requested.
     * @return string|true|null Value of attribute or `null` if not available. Boolean attributes return `true`.
     */
    public function get_attribute($name)
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
     * @since 6.6.0 Subclassed for the HTML Processor.
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
     * @since 6.6.0 Subclassed for HTML Processor.
     *
     * @param string $name The attribute name to remove.
     * @return bool Whether an attribute was removed.
     */
    public function remove_attribute($name)
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
     * @since 6.6.0 Subclassed for the HTML Processor.
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
     * Adds a new class name to the currently matched tag.
     *
     * @since 6.6.0 Subclassed for the HTML Processor.
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
     * @since 6.6.0 Subclassed for the HTML Processor.
     *
     * @param string $class_name The class name to remove.
     * @return bool Whether the class was set to be removed.
     */
    public function remove_class($class_name)
    {
    }
    /**
     * Returns if a matched tag contains the given ASCII case-insensitive class name.
     *
     * @since 6.6.0 Subclassed for the HTML Processor.
     *
     * @param string $wanted_class Look for this CSS class name, ASCII case-insensitive.
     * @return bool|null Whether the matched tag contains the given class name, or null if not matched.
     */
    public function has_class($wanted_class)
    {
    }
    /**
     * Generator for a foreach loop to step through each class name for the matched tag.
     *
     * This generator function is designed to be used inside a "foreach" loop.
     *
     * Example:
     *
     *     $p = WP_HTML_Processor::create_fragment( "<div class='free &lt;egg&lt;\tlang-en'>" );
     *     $p->next_tag();
     *     foreach ( $p->class_list() as $class_name ) {
     *         echo "{$class_name} ";
     *     }
     *     // Outputs: "free <egg> lang-en "
     *
     * @since 6.6.0 Subclassed for the HTML Processor.
     */
    public function class_list()
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
     * @since 6.6.0 Subclassed for the HTML Processor.
     *
     * @return string
     */
    public function get_modifiable_text()
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
     * @since 6.6.0 Subclassed for the HTML Processor.
     *
     * @return string|null
     */
    public function get_comment_type()
    {
    }
    /**
     * Removes a bookmark that is no longer needed.
     *
     * Releasing a bookmark frees up the small
     * performance overhead it requires.
     *
     * @since 6.4.0
     *
     * @param string $bookmark_name Name of the bookmark to remove.
     * @return bool Whether the bookmark already existed before removal.
     */
    public function release_bookmark($bookmark_name)
    {
    }
    /**
     * Moves the internal cursor in the HTML Processor to a given bookmark's location.
     *
     * Be careful! Seeking backwards to a previous location resets the parser to the
     * start of the document and reparses the entire contents up until it finds the
     * sought-after bookmarked location.
     *
     * In order to prevent accidental infinite loops, there's a
     * maximum limit on the number of times seek() can be called.
     *
     * @throws Exception When unable to allocate a bookmark for the next token in the input HTML document.
     *
     * @since 6.4.0
     *
     * @param string $bookmark_name Jump to the place in the document identified by this bookmark name.
     * @return bool Whether the internal cursor was successfully moved to the bookmark's location.
     */
    public function seek($bookmark_name)
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
     * @since 6.4.0
     *
     * @param string $bookmark_name Identifies this particular bookmark.
     * @return bool Whether the bookmark was successfully created.
     */
    public function set_bookmark($bookmark_name)
    {
    }
    /**
     * Checks whether a bookmark with the given name exists.
     *
     * @since 6.5.0
     *
     * @param string $bookmark_name Name to identify a bookmark that potentially exists.
     * @return bool Whether that bookmark exists.
     */
    public function has_bookmark($bookmark_name)
    {
    }
    /*
     * HTML Specification Helpers
     */
    /**
     * Returns whether an element of a given name is in the HTML special category.
     *
     * @since 6.4.0
     *
     * @see https://html.spec.whatwg.org/#special
     *
     * @param string $tag_name Name of element to check.
     * @return bool Whether the element of the given name is in the special category.
     */
    public static function is_special($tag_name)
    {
    }
    /**
     * Returns whether a given element is an HTML Void Element
     *
     * > area, base, br, col, embed, hr, img, input, link, meta, source, track, wbr
     *
     * @since 6.4.0
     *
     * @see https://html.spec.whatwg.org/#void-elements
     *
     * @param string $tag_name Name of HTML tag to check.
     * @return bool Whether the given tag is an HTML Void Element.
     */
    public static function is_void($tag_name)
    {
    }
    /*
     * Constants that would pollute the top of the class if they were found there.
     */
    /**
     * Indicates that the next HTML token should be parsed and processed.
     *
     * @since 6.4.0
     *
     * @var string
     */
    const PROCESS_NEXT_NODE = 'process-next-node';
    /**
     * Indicates that the current HTML token should be reprocessed in the newly-selected insertion mode.
     *
     * @since 6.4.0
     *
     * @var string
     */
    const REPROCESS_CURRENT_NODE = 'reprocess-current-node';
    /**
     * Indicates that the current HTML token should be processed without advancing the parser.
     *
     * @since 6.5.0
     *
     * @var string
     */
    const PROCESS_CURRENT_NODE = 'process-current-node';
    /**
     * Indicates that the parser encountered unsupported markup and has bailed.
     *
     * @since 6.4.0
     *
     * @var string
     */
    const ERROR_UNSUPPORTED = 'unsupported';
    /**
     * Indicates that the parser encountered more HTML tokens than it
     * was able to process and has bailed.
     *
     * @since 6.4.0
     *
     * @var string
     */
    const ERROR_EXCEEDED_MAX_BOOKMARKS = 'exceeded-max-bookmarks';
    /**
     * Unlock code that must be passed into the constructor to create this class.
     *
     * This class extends the WP_HTML_Tag_Processor, which has a public class
     * constructor. Therefore, it's not possible to have a private constructor here.
     *
     * This unlock code is used to ensure that anyone calling the constructor is
     * doing so with a full understanding that it's intended to be a private API.
     *
     * @access private
     */
    const CONSTRUCTOR_UNLOCK_CODE = 'Use WP_HTML_Processor::create_fragment() instead of calling the class constructor directly.';
}