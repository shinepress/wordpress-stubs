<?php


/**
 * Returns the content of a block, including comment delimiters, serializing all
 * attributes from the given parsed block.
 *
 * This should be used when preparing a block to be saved to post content.
 * Prefer `render_block` when preparing a block for display. Unlike
 * `render_block`, this does not evaluate a block's `render_callback`, and will
 * instead preserve the markup as parsed.
 *
 * @since 5.3.1
 *
 * @param array $block A representative array of a single parsed block object. See WP_Block_Parser_Block.
 * @return string String of rendered HTML.
 */
function serialize_block($block)
{
}