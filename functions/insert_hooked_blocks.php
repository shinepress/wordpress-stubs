<?php


/**
 * Returns the markup for blocks hooked to the given anchor block in a specific relative position.
 *
 * @since 6.5.0
 * @access private
 *
 * @param array                   $parsed_anchor_block The anchor block, in parsed block array format.
 * @param string                  $relative_position   The relative position of the hooked blocks.
 *                                                     Can be one of 'before', 'after', 'first_child', or 'last_child'.
 * @param array                   $hooked_blocks       An array of hooked block types, grouped by anchor block and relative position.
 * @param WP_Block_Template|array $context             The block template, template part, or pattern that the anchor block belongs to.
 * @return string
 * @phpstan-param 'before'|'after'|'first_child'|'last_child' $relative_position
 */
function insert_hooked_blocks(&$parsed_anchor_block, $relative_position, $hooked_blocks, $context)
{
}