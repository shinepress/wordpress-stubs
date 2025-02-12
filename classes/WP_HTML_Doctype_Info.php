<?php


/**
 * Core class used by the HTML API to represent a DOCTYPE declaration.
 *
 * This class parses DOCTYPE tokens for the full parser in the HTML Processor.
 * Most code interacting with HTML won't need to parse DOCTYPE declarations;
 * the HTML Processor is one exception. Consult the HTML Processor for proper
 * parsing of an HTML document.
 *
 * A DOCTYPE declaration may indicate its document compatibility mode, which impacts
 * the structure of the following HTML as well as the behavior of CSS class selectors.
 * There are three possible modes:
 *
 *  - "no-quirks" and "limited-quirks" modes (also called "standards mode").
 *  - "quirks" mode.
 *
 * These modes mostly determine whether CSS class name selectors match values in the
 * HTML `class` attribute in an ASCII-case-insensitive way (quirks mode), or whether
 * they match only when byte-for-byte identical (no-quirks mode).
 *
 * All HTML documents should start with the standard HTML5 DOCTYPE: `<!DOCTYPE html>`.
 *
 * > DOCTYPEs are required for legacy reasons. When omitted, browsers tend to use a different
 * > rendering mode that is incompatible with some specifications. Including the DOCTYPE in a
 * > document ensures that the browser makes a best-effort attempt at following the
 * > relevant specifications.
 *
 * @see https://html.spec.whatwg.org/#the-doctype
 *
 * DOCTYPE declarations comprise four properties: a name, public identifier, system identifier,
 * and an indication of which document compatability mode they would imply if an HTML parser
 * hadn't already determined it from other information.
 *
 * @see https://html.spec.whatwg.org/#the-initial-insertion-mode
 *
 * Historically, the DOCTYPE declaration was used in SGML documents to instruct a parser how
 * to interpret the various tags and entities within a document. Its role in HTML diverged
 * from how it was used in SGML and no meaning should be back-read into HTML based on how it
 * is used in SGML, XML, or XHTML documents.
 *
 * @see https://www.iso.org/standard/16387.html
 *
 * @since 6.7.0
 *
 * @see WP_HTML_Processor
 */
class WP_HTML_Doctype_Info
{
    /**
     * Name of the DOCTYPE: should be "html" for HTML documents.
     *
     * This value should be considered "read only" and not modified.
     *
     * Historically the DOCTYPE name indicates name of the document's root element.
     *
     *     <!DOCTYPE html>
     *               ╰──┴── name is "html".
     *
     * @see https://html.spec.whatwg.org/#tokenization
     *
     * @since 6.7.0
     *
     * @var string|null
     */
    public $name = \null;
    /**
     * Public identifier of the DOCTYPE.
     *
     * This value should be considered "read only" and not modified.
     *
     * The public identifier is optional and should not appear in HTML documents.
     * A `null` value indicates that no public identifier was present in the DOCTYPE.
     *
     * Historically the presence of the public identifier indicated that a document
     * was meant to be shared between computer systems and the value indicated to a
     * knowledgeable parser how to find the relevant document type definition (DTD).
     *
     *     <!DOCTYPE html PUBLIC "public id goes here in quotes">
     *               │  │         ╰─── public identifier ─────╯
     *               ╰──┴── name is "html".
     *
     * @see https://html.spec.whatwg.org/#tokenization
     *
     * @since 6.7.0
     *
     * @var string|null
     */
    public $public_identifier = \null;
    /**
     * System identifier of the DOCTYPE.
     *
     * This value should be considered "read only" and not modified.
     *
     * The system identifier is optional and should not appear in HTML documents.
     * A `null` value indicates that no system identifier was present in the DOCTYPE.
     *
     * Historically the system identifier specified where a relevant document type
     * declaration for the given document is stored and may be retrieved.
     *
     *     <!DOCTYPE html SYSTEM "system id goes here in quotes">
     *               │  │         ╰──── system identifier ────╯
     *               ╰──┴── name is "html".
     *
     * If a public identifier were provided it would indicate to a knowledgeable
     * parser how to interpret the system identifier.
     *
     *     <!DOCTYPE html PUBLIC "public id goes here in quotes" "system id goes here in quotes">
     *               │  │         ╰─── public identifier ─────╯   ╰──── system identifier ────╯
     *               ╰──┴── name is "html".
     *
     * @see https://html.spec.whatwg.org/#tokenization
     *
     * @since 6.7.0
     *
     * @var string|null
     */
    public $system_identifier = \null;
    /**
     * Which document compatability mode this DOCTYPE declaration indicates.
     *
     * This value should be considered "read only" and not modified.
     *
     * When an HTML parser has not already set the document compatability mode,
     * (e.g. "quirks" or "no-quirks" mode), it will infer if from the properties
     * of the appropriate DOCTYPE declaration, if one exists. The DOCTYPE can
     * indicate one of three possible document compatability modes:
     *
     *  - "no-quirks" and "limited-quirks" modes (also called "standards" mode).
     *  - "quirks" mode (also called `CSS1Compat` mode).
     *
     * An appropriate DOCTYPE is one encountered in the "initial" insertion mode,
     * before the HTML element has been opened and before finding any other
     * DOCTYPE declaration tokens.
     *
     * @see https://html.spec.whatwg.org/#the-initial-insertion-mode
     *
     * @since 6.7.0
     *
     * @var string One of "no-quirks", "limited-quirks", or "quirks".
     */
    public $indicated_compatability_mode;
    /**
     * Creates a WP_HTML_Doctype_Info instance by parsing a raw DOCTYPE declaration token.
     *
     * Use this method to parse a DOCTYPE declaration token and get access to its properties
     * via the returned WP_HTML_Doctype_Info class instance. The provided input must parse
     * properly as a DOCTYPE declaration, though it must not represent a valid DOCTYPE.
     *
     * Example:
     *
     *     // Normative HTML DOCTYPE declaration.
     *     $doctype = WP_HTML_Doctype_Info::from_doctype_token( '<!DOCTYPE html>' );
     *     'no-quirks' === $doctype->indicated_compatability_mode;
     *
     *     // A nonsensical DOCTYPE is still valid, and will indicate "quirks" mode.
     *     $doctype = WP_HTML_Doctype_Info::from_doctype_token( '<!doctypeJSON SILLY "nonsense\'>' );
     *     'quirks' === $doctype->indicated_compatability_mode;
     *
     *     // Textual quirks present in raw HTML are handled appropriately.
     *     $doctype = WP_HTML_Doctype_Info::from_doctype_token( "<!DOCTYPE\nhtml\n>" );
     *     'no-quirks' === $doctype->indicated_compatability_mode;
     *
     *     // Anything other than a proper DOCTYPE declaration token fails to parse.
     *     null === WP_HTML_Doctype_Info::from_doctype_token( ' <!DOCTYPE>' );
     *     null === WP_HTML_Doctype_Info::from_doctype_token( '<!DOCTYPE ><p>' );
     *     null === WP_HTML_Doctype_Info::from_doctype_token( '<!TYPEDOC>' );
     *     null === WP_HTML_Doctype_Info::from_doctype_token( 'html' );
     *     null === WP_HTML_Doctype_Info::from_doctype_token( '<?xml version="1.0" encoding="UTF-8" ?>' );
     *
     * @since 6.7.0
     *
     * @param string $doctype_html The complete raw DOCTYPE HTML string, e.g. `<!DOCTYPE html>`.
     *
     * @return WP_HTML_Doctype_Info|null A WP_HTML_Doctype_Info instance will be returned if the
     *                                   provided DOCTYPE HTML is a valid DOCTYPE. Otherwise, null.
     */
    public static function from_doctype_token(string $doctype_html): ?self
    {
    }
}