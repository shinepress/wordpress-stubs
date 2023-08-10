<?php


/**
 * Searches for HTML tags, no matter how malformed.
 *
 * It also matches stray `>` characters.
 *
 * @since 1.0.0
 *
 * @global array[]|string $pass_allowed_html      An array of allowed HTML elements and attributes,
 *                                                or a context name such as 'post'.
 * @global string[]       $pass_allowed_protocols Array of allowed URL protocols.
 *
 * @param string         $content           Content to filter.
 * @param array[]|string $allowed_html      An array of allowed HTML elements and attributes,
 *                                          or a context name such as 'post'. See wp_kses_allowed_html()
 *                                          for the list of accepted context names.
 * @param string[]       $allowed_protocols Array of allowed URL protocols.
 * @return string Content with fixed HTML tags
 */
function wp_kses_split($content, $allowed_html, $allowed_protocols)
{
}