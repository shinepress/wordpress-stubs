<?php


/**
 * Filters and sanitizes block content to remove non-allowable HTML
 * from parsed block attribute values.
 *
 * @since 5.3.1
 *
 * @param string         $text              Text that may contain block content.
 * @param array[]|string $allowed_html      Optional. An array of allowed HTML elements and attributes,
 *                                          or a context name such as 'post'. See wp_kses_allowed_html()
 *                                          for the list of accepted context names. Default 'post'.
 * @param string[]       $allowed_protocols Optional. Array of allowed URL protocols.
 *                                          Defaults to the result of wp_allowed_protocols().
 * @return string The filtered and sanitized content result.
 */
function filter_block_content($text, $allowed_html = 'post', $allowed_protocols = array())
{
}