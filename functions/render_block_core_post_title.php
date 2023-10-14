<?php


/**
 * Server-side rendering of the `core/post-title` block.
 *
 * @package WordPress
 */
/**
 * Renders the `core/post-title` block on the server.
 *
 * @since 6.3.0 Omitting the $post argument from the `get_the_title`.
 *
 * @param array    $attributes Block attributes.
 * @param string   $content    Block default content.
 * @param WP_Block $block      Block instance.
 *
 * @return string Returns the filtered post title for the current post wrapped inside "h1" tags.
 */
function render_block_core_post_title($attributes, $content, $block)
{
}