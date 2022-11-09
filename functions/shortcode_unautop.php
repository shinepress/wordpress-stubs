<?php


/**
 * Don't auto-p wrap shortcodes that stand alone
 *
 * Ensures that shortcodes are not wrapped in `<p>...</p>`.
 *
 * @since 2.9.0
 *
 * @global array $shortcode_tags
 *
 * @param string $pee The content.
 * @return string The filtered content.
 */
function shortcode_unautop($pee)
{
}