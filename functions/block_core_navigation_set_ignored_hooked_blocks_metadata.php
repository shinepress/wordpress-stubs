<?php


/**
 * Insert ignoredHookedBlocks meta into the Navigation block and its inner blocks.
 *
 * Given a Navigation block's inner blocks and its corresponding `wp_navigation` post object,
 * this function inserts ignoredHookedBlocks meta into it, and returns the serialized inner blocks in a
 * mock Navigation block wrapper.
 *
 * @since 6.5.0
 *
 * @param array   $inner_blocks Parsed inner blocks of a Navigation block.
 * @param WP_Post $post         `wp_navigation` post object corresponding to the block.
 * @return string Serialized inner blocks in mock Navigation block wrapper, with hooked blocks inserted, if any.
 */
function block_core_navigation_set_ignored_hooked_blocks_metadata($inner_blocks, $post)
{
}