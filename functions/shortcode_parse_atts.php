<?php


/**
 * Retrieves all attributes from the shortcodes tag.
 *
 * The attributes list has the attribute name as the key and the value of the
 * attribute as the value in the key/value pair. This allows for easier
 * retrieval of the attributes, since all attributes have to be known.
 *
 * @since 2.5.0
 *
 * @param string $text Shortcode arguments list.
 * @return array|string Array of attribute values keyed by attribute name.
 *                      Returns empty array if there are no attributes.
 *                      Returns the original arguments string if it cannot be parsed.
 */
function shortcode_parse_atts($text)
{
}