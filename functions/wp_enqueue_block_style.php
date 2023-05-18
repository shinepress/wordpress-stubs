<?php


/**
 * Enqueues a stylesheet for a specific block.
 *
 * If the theme has opted-in to separate-styles loading,
 * then the stylesheet will be enqueued on-render,
 * otherwise when the block inits.
 *
 * @since 5.9.0
 *
 * @param string $block_name The block-name, including namespace.
 * @param array  $args       An array of arguments [handle,src,deps,ver,media].
 * @return void
 */
function wp_enqueue_block_style($block_name, $args)
{
}