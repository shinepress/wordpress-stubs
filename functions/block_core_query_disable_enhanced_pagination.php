<?php


/**
 * Traverse the tree of blocks looking for any plugin block (i.e., a block from
 * an installed plugin) inside a Query block with the enhanced pagination
 * enabled. If at least one is found, the enhanced pagination is effectively
 * disabled to prevent any potential incompatibilities.
 *
 * @since 6.4.0
 *
 * @param array $parsed_block The block being rendered.
 * @return string Returns the parsed block, unmodified.
 */
function block_core_query_disable_enhanced_pagination($parsed_block)
{
}