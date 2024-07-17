<?php


/**
 * Ensure the elements block support class name generated, and added to
 * block attributes, in the `render_block_data` filter gets applied to the
 * block's markup.
 *
 * @see wp_render_elements_support_styles
 * @since 6.6.0
 *
 * @param  string $block_content Rendered block content.
 * @param  array  $block         Block object.
 * @return string                Filtered block content.
 */
function wp_render_elements_class_name($block_content, $block)
{
}