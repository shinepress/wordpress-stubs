<?php


/**
 * Escape single quotes, specialchar double quotes, and fix line endings.
 *
 * The filter {@see 'js_escape'} is also applied by esc_js().
 *
 * @since 2.0.4
 * @deprecated 2.8.0 Use esc_js()
 * @see esc_js()
 *
 * @param string $text The text to be escaped.
 * @return string Escaped text.
 */
function js_escape($text)
{
}