<?php


/**
 * Renders server-side dimensions styles to the block wrapper.
 * This block support uses the `render_block` hook to ensure that
 * it is also applied to non-server-rendered blocks.
 *
 * @since 6.5.0
 * @access private
 *
 * @param  string $block_content Rendered block content.
 * @param  array  $block         Block object.
 * @return string                Filtered block content.
 */
function wp_render_dimensions_support($block_content, $block)
{
}