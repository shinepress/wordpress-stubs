<?php


/**
 * Functions related to registering and parsing blocks.
 *
 * @package WordPress
 * @subpackage Blocks
 * @since 5.0.0
 */
/**
 * Registers a block type.
 *
 * @since 5.0.0
 *
 * @param string|WP_Block_Type $name Block type name including namespace, or alternatively
 *                                   a complete WP_Block_Type instance. In case a WP_Block_Type
 *                                   is provided, the $args parameter will be ignored.
 * @param array                $args Optional. Array of block type arguments. Accepts any public property
 *                                   of `WP_Block_Type`. See WP_Block_Type::__construct() for information
 *                                   on accepted arguments. Default empty array.
 * @return WP_Block_Type|false The registered block type on success, or false on failure.
 */
function register_block_type($name, $args = array())
{
}