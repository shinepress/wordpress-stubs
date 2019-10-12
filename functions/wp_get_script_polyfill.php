<?php


/**
 * Returns contents of an inline script used in appending polyfill scripts for
 * browsers which fail the provided tests. The provided array is a mapping from
 * a condition to verify feature support to its polyfill script handle.
 *
 * @since 5.0.0
 *
 * @param WP_Scripts $scripts WP_Scripts object.
 * @param array      $tests   Features to detect.
 * @return string Conditional polyfill inline script.
 */
function wp_get_script_polyfill(&$scripts, $tests)
{
}