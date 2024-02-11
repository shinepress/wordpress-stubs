<?php


/**
 * Returns a function that injects the hooked blocks after a given block.
 *
 * The returned function can be used as `$post_callback` argument to `traverse_and_serialize_block(s)`,
 * where it will append the markup for any blocks hooked `after` the given block and as its parent's
 * `last_child`, respectively.
 *
 * This function is meant for internal use only.
 *
 * @since 6.4.0
 * @access private
 *
 * @param array                   $hooked_blocks An array of blocks hooked to another block.
 * @param WP_Block_Template|array $context       A block template, template part, or pattern that the blocks belong to.
 * @return callable A function that returns the serialized markup for the given block,
 *                  including the markup for any hooked blocks after it.
 */
function make_after_block_visitor($hooked_blocks, $context)
{
}