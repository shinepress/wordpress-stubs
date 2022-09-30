<?php


/**
 * Filters and sanitizes a parsed block attribute value to remove non-allowable
 * HTML.
 *
 * @since 5.3.1
 *
 * @param string[]|string $value             The attribute value to filter.
 * @param array[]|string  $allowed_html      An array of allowed HTML elements
 *                                           and attributes, or a context name
 *                                           such as 'post'.
 * @param string[]        $allowed_protocols Array of allowed URL protocols.
 * @return string[]|string The filtered and sanitized result.
 */
function filter_block_kses_value($value, $allowed_html, $allowed_protocols = array())
{
}