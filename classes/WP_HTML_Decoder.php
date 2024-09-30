<?php


/**
 * HTML API: WP_HTML_Decoder class
 *
 * Decodes spans of raw text found inside HTML content.
 *
 * @package WordPress
 * @subpackage HTML-API
 * @since 6.6.0
 */
class WP_HTML_Decoder
{
    /**
     * Indicates if an attribute value starts with a given raw string value.
     *
     * Use this method to determine if an attribute value starts with a given string, regardless
     * of how it might be encoded in HTML. For instance, `http:` could be represented as `http:`
     * or as `http&colon;` or as `&#x68;ttp:` or as `h&#116;tp&colon;`, or in many other ways.
     *
     * Example:
     *
     *     $value = 'http&colon;//wordpress.org/';
     *     true   === WP_HTML_Decoder::attribute_starts_with( $value, 'http:', 'ascii-case-insensitive' );
     *     false  === WP_HTML_Decoder::attribute_starts_with( $value, 'https:', 'ascii-case-insensitive' );
     *
     * @since 6.6.0
     *
     * @param string $haystack         String containing the raw non-decoded attribute value.
     * @param string $search_text      Does the attribute value start with this plain string.
     * @param string $case_sensitivity Optional. Pass 'ascii-case-insensitive' to ignore ASCII case when matching.
     *                                 Default 'case-sensitive'.
     * @return bool Whether the attribute value starts with the given string.
     */
    public static function attribute_starts_with($haystack, $search_text, $case_sensitivity = 'case-sensitive')
    {
    }
    /**
     * Returns a string containing the decoded value of a given HTML text node.
     *
     * Text nodes appear in HTML DATA sections, which are the text segments inside
     * and around tags, excepting SCRIPT and STYLE elements (and some others),
     * whose inner text is not decoded. Use this function to read the decoded
     * value of such a text span in an HTML document.
     *
     * Example:
     *
     *     '“😄”' === WP_HTML_Decode::decode_text_node( '&#x93;&#x1f604;&#x94' );
     *
     * @since 6.6.0
     *
     * @param string $text Text containing raw and non-decoded text node to decode.
     * @return string Decoded UTF-8 value of given text node.
     */
    public static function decode_text_node($text)
    {
    }
    /**
     * Returns a string containing the decoded value of a given HTML attribute.
     *
     * Text found inside an HTML attribute has different parsing rules than for
     * text found inside other markup, or DATA segments. Use this function to
     * read the decoded value of an HTML string inside a quoted attribute.
     *
     * Example:
     *
     *     '“😄”' === WP_HTML_Decode::decode_attribute( '&#x93;&#x1f604;&#x94' );
     *
     * @since 6.6.0
     *
     * @param string $text Text containing raw and non-decoded attribute value to decode.
     * @return string Decoded UTF-8 value of given attribute value.
     */
    public static function decode_attribute($text)
    {
    }
    /**
     * Decodes a span of HTML text, depending on the context in which it's found.
     *
     * This is a low-level method; prefer calling WP_HTML_Decoder::decode_attribute() or
     * WP_HTML_Decoder::decode_text_node() instead. It's provided for cases where this
     * may be difficult to do from calling code.
     *
     * Example:
     *
     *     '©' = WP_HTML_Decoder::decode( 'data', '&copy;' );
     *
     * @since 6.6.0
     *
     * @access private
     *
     * @param string $context `attribute` for decoding attribute values, `data` otherwise.
     * @param string $text    Text document containing span of text to decode.
     * @return string Decoded UTF-8 string.
     */
    public static function decode($context, $text)
    {
    }
    /**
     * Attempt to read a character reference at the given location in a given string,
     * depending on the context in which it's found.
     *
     * If a character reference is found, this function will return the translated value
     * that the reference maps to. It will then set `$match_byte_length` the
     * number of bytes of input it read while consuming the character reference. This
     * gives calling code the opportunity to advance its cursor when traversing a string
     * and decoding.
     *
     * Example:
     *
     *     null === WP_HTML_Decoder::read_character_reference( 'attribute', 'Ships&hellip;', 0 );
     *     '…'  === WP_HTML_Decoder::read_character_reference( 'attribute', 'Ships&hellip;', 5, $token_length );
     *     8    === $token_length; // `&hellip;`
     *
     *     null === WP_HTML_Decoder::read_character_reference( 'attribute', '&notin', 0 );
     *     '∉'  === WP_HTML_Decoder::read_character_reference( 'attribute', '&notin;', 0, $token_length );
     *     7    === $token_length; // `&notin;`
     *
     *     '¬'  === WP_HTML_Decoder::read_character_reference( 'data', '&notin', 0, $token_length );
     *     4    === $token_length; // `&not`
     *     '∉'  === WP_HTML_Decoder::read_character_reference( 'data', '&notin;', 0, $token_length );
     *     7    === $token_length; // `&notin;`
     *
     * @since 6.6.0
     *
     * @param string $context            `attribute` for decoding attribute values, `data` otherwise.
     * @param string $text               Text document containing span of text to decode.
     * @param int    $at                 Optional. Byte offset into text where span begins, defaults to the beginning (0).
     * @param int    &$match_byte_length Optional. Set to byte-length of character reference if provided and if a match
     *                                   is found, otherwise not set. Default null.
     * @return string|false Decoded character reference in UTF-8 if found, otherwise `false`.
     */
    public static function read_character_reference($context, $text, $at = 0, &$match_byte_length = \null)
    {
    }
    /**
     * Encode a code point number into the UTF-8 encoding.
     *
     * This encoder implements the UTF-8 encoding algorithm for converting
     * a code point into a byte sequence. If it receives an invalid code
     * point it will return the Unicode Replacement Character U+FFFD `�`.
     *
     * Example:
     *
     *     '🅰' === WP_HTML_Decoder::code_point_to_utf8_bytes( 0x1f170 );
     *
     *     // Half of a surrogate pair is an invalid code point.
     *     '�' === WP_HTML_Decoder::code_point_to_utf8_bytes( 0xd83c );
     *
     * @since 6.6.0
     *
     * @see https://www.rfc-editor.org/rfc/rfc3629 For the UTF-8 standard.
     *
     * @param int $code_point Which code point to convert.
     * @return string Converted code point, or `�` if invalid.
     */
    public static function code_point_to_utf8_bytes($code_point)
    {
    }
}