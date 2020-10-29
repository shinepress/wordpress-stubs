<?php


/**
 * Searches for HTML tags, no matter how malformed.
 *
 * It also matches stray `>` characters.
 *
 * @since 1.0.0
 *
 * @global array $pass_allowed_html
 * @global array $pass_allowed_protocols
 *
 * @param string   $string            Content to filter.
 * @param array    $allowed_html      Allowed HTML elements.
 * @param string[] $allowed_protocols Array of allowed URL protocols.
 * @return string Content with fixed HTML tags
 */
function wp_kses_split($string, $allowed_html, $allowed_protocols)
{
}