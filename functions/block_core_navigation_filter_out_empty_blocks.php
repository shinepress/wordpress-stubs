<?php


/**
 * Filter out empty "null" blocks from the block list.
 * 'parse_blocks' includes a null block with '\n\n' as the content when
 * it encounters whitespace. This is not a bug but rather how the parser
 * is designed.
 *
 * @since 5.9.0
 *
 * @param array $parsed_blocks the parsed blocks to be normalized.
 * @return array the normalized parsed blocks.
 */
function block_core_navigation_filter_out_empty_blocks($parsed_blocks)
{
}