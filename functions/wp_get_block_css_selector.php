<?php


/**
 * Determines the CSS selector for the block type and property provided,
 * returning it if available.
 *
 * @since 6.3.0
 *
 * @param WP_Block_Type $block_type The block's type.
 * @param string|array  $target     The desired selector's target, `root` or array path.
 * @param boolean       $fallback   Whether to fall back to broader selector.
 *
 * @return string|null CSS selector or `null` if no selector available.
 */
function wp_get_block_css_selector($block_type, $target = 'root', $fallback = \false)
{
}