<?php


/**
 * Ensures the variation block support class name generated and added to
 * block attributes in the `render_block_data` filter gets applied to the
 * block's markup.
 *
 * @since 6.6.0
 * @access private
 *
 * @see wp_render_block_style_variation_support_styles
 *
 * @param  string $block_content Rendered block content.
 * @param  array  $block         Block object.
 *
 * @return string                Filtered block content.
 */
function wp_render_block_style_variation_class_name($block_content, $block)
{
}