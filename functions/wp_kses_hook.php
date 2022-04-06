<?php


/**
 * You add any kses hooks here.
 *
 * There is currently only one kses WordPress hook, {@see 'pre_kses'}, and it is called here.
 * All parameters are passed to the hooks and expected to receive a string.
 *
 * @since 1.0.0
 *
 * @param string $string            Content to filter through kses
 * @param array  $allowed_html      List of allowed HTML elements
 * @param array  $allowed_protocols Allowed protocol in links
 * @return string Filtered content through {@see 'pre_kses'} hook.
 */
function wp_kses_hook($string, $allowed_html, $allowed_protocols)
{
}