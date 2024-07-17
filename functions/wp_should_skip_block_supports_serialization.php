<?php


/**
 * Block support utility functions.
 *
 * @package WordPress
 * @subpackage Block Supports
 * @since 6.0.0
 */
/**
 * Checks whether serialization of the current block's supported properties
 * should occur.
 *
 * @since 6.0.0
 * @access private
 *
 * @param WP_Block_Type $block_type  Block type.
 * @param string        $feature_set Name of block support feature set..
 * @param string        $feature     Optional name of individual feature to check.
 *
 * @return bool Whether to serialize block support styles & classes.
 */
function wp_should_skip_block_supports_serialization($block_type, $feature_set, $feature = \null)
{
}