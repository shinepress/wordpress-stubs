<?php


/**
 * Renders the layout config to the block wrapper.
 *
 * @since 5.8.0
 * @since 6.3.0 Adds compound class to layout wrapper for global spacing styles.
 * @since 6.3.0 Check for layout support via the `layout` key with fallback to `__experimentalLayout`.
 * @access private
 *
 * @param string $block_content Rendered block content.
 * @param array  $block         Block object.
 * @return string Filtered block content.
 */
function wp_render_layout_support_flag($block_content, $block)
{
}