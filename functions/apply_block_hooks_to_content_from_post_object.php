<?php


/**
 * Run the Block Hooks algorithm on a post object's content.
 *
 * This function is different from `apply_block_hooks_to_content` in that
 * it takes ignored hooked block information from the post's metadata into
 * account. This ensures that any blocks hooked as first or last child
 * of the block that corresponds to the post type are handled correctly.
 *
 * @since 6.8.0
 * @access private
 *
 * @param string       $content  Serialized content.
 * @param WP_Post|null $post     A post object that the content belongs to. If set to `null`,
 *                               `get_post()` will be called to use the current post as context.
 *                               Default: `null`.
 * @param callable     $callback A function that will be called for each block to generate
 *                               the markup for a given list of blocks that are hooked to it.
 *                               Default: 'insert_hooked_blocks'.
 * @return string The serialized markup.
 */
function apply_block_hooks_to_content_from_post_object($content, $post = \null, $callback = 'insert_hooked_blocks')
{
}