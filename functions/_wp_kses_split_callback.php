<?php


/**
 * Callback for `wp_kses_split()`.
 *
 * @since 3.1.0
 * @access private
 * @ignore
 *
 * @global array[]|string $pass_allowed_html      An array of allowed HTML elements and attributes,
 *                                                or a context name such as 'post'.
 * @global string[]       $pass_allowed_protocols Array of allowed URL protocols.
 *
 * @param array $matches preg_replace regexp matches
 * @return string
 */
function _wp_kses_split_callback($match)
{
}