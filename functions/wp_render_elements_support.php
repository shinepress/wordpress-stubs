<?php


/**
 * Updates the block content with elements class names.
 *
 * @deprecated 6.6.0 Generation of element class name is handled via `render_block_data` filter.
 *
 * @since 5.8.0
 * @since 6.4.0 Added support for button and heading element styling.
 * @access private
 *
 * @param string $block_content Rendered block content.
 * @param array  $block         Block object.
 * @return string Filtered block content.
 */
function wp_render_elements_support($block_content, $block)
{
}