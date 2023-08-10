<?php


/**
 * Filters and sanitizes a parsed block attribute value to remove
 * non-allowable HTML.
 *
 * @since 5.3.1
 *
 * @param string[]|string $value             The attribute value to filter.
 * @param array[]|string  $allowed_html      An array of allowed HTML elements and attributes,
 *                                           or a context name such as 'post'. See wp_kses_allowed_html()
 *                                           for the list of accepted context names.
 * @param string[]        $allowed_protocols Optional. Array of allowed URL protocols.
 *                                           Defaults to the result of wp_allowed_protocols().
 * @return string[]|string The filtered and sanitized result.
 */
function filter_block_kses_value($value, $allowed_html, $allowed_protocols = array())
{
}