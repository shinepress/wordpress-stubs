<?php


/**
 * Checks whether serialization of the current block's border properties should occur.
 *
 * @since 5.8.0
 * @access private
 * @deprecated 6.0.0 Use wp_should_skip_block_supports_serialization() introduced in 6.0.0.
 *
 * @see wp_should_skip_block_supports_serialization()
 *
 * @param WP_Block_Type $block_type Block type.
 * @return bool Whether serialization of the current block's border properties
 *              should occur.
 */
function wp_skip_border_serialization($block_type)
{
}