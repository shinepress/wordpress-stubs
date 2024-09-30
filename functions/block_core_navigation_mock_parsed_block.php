<?php


/**
 * Mock a parsed block for the Navigation block given its inner blocks and the `wp_navigation` post object.
 * The `wp_navigation` post's `_wp_ignored_hooked_blocks` meta is queried to add the `metadata.ignoredHookedBlocks` attribute.
 *
 * @since 6.5.0
 *
 * @param array   $inner_blocks Parsed inner blocks of a Navigation block.
 * @param WP_Post $post         `wp_navigation` post object corresponding to the block.
 *
 * @return array the normalized parsed blocks.
 */
function block_core_navigation_mock_parsed_block($inner_blocks, $post)
{
}