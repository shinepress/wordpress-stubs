<?php


/**
 * Retrieve all attributes from the shortcodes tag.
 *
 * The attributes list has the attribute name as the key and the value of the
 * attribute as the value in the key/value pair. This allows for easier
 * retrieval of the attributes, since all attributes have to be known.
 *
 * @since 2.5.0
 *
 * @param string $text
 * @return array|string List of attribute values.
 *                      Returns empty array if trim( $text ) == '""'.
 *                      Returns empty string if trim( $text ) == ''.
 *                      All other matches are checked for not empty().
 */
function shortcode_parse_atts($text)
{
}