<?php


/**
 * You add any KSES hooks here.
 *
 * There is currently only one KSES WordPress hook, {@see 'pre_kses'}, and it is called here.
 * All parameters are passed to the hooks and expected to receive a string.
 *
 * @since 1.0.0
 *
 * @param string          $string            Content to filter through KSES.
 * @param array[]|string  $allowed_html      List of allowed HTML elements.
 * @param string[]        $allowed_protocols Array of allowed URL protocols.
 * @return string Filtered content through {@see 'pre_kses'} hook.
 */
function wp_kses_hook($string, $allowed_html, $allowed_protocols)
{
}