<?php


/**
 * Preloads common data used with the block editor by specifying an array of
 * REST API paths that will be preloaded for a given block editor context.
 *
 * @since 5.8.0
 *
 * @global WP_Post $post Global post object.
 *
 * @param string[]                $preload_paths        List of paths to preload.
 * @param WP_Block_Editor_Context $block_editor_context The current block editor context.
 *
 * @return void
 */
function block_editor_rest_api_preload(array $preload_paths, $block_editor_context)
{
}