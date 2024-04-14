<?php


/**
 * Callback for `wp_kses_normalize_entities()` for regular expression.
 *
 * This function helps `wp_kses_normalize_entities()` to only accept valid Unicode
 * numeric entities in hex form.
 *
 * @since 2.7.0
 * @access private
 * @ignore
 *
 * @param array $matches `preg_replace_callback()` matches array.
 * @return string Correctly encoded entity.
 */
function wp_kses_normalize_entities3($matches)
{
}