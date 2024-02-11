<?php


/**
 * Registers a block type. The recommended way is to register a block type using
 * the metadata stored in the `block.json` file.
 *
 * @since 5.0.0
 * @since 5.8.0 First parameter now accepts a path to the `block.json` file.
 *
 * @param string|WP_Block_Type $block_type Block type name including namespace, or alternatively
 *                                         a path to the JSON file with metadata definition for the block,
 *                                         or a path to the folder where the `block.json` file is located,
 *                                         or a complete WP_Block_Type instance.
 *                                         In case a WP_Block_Type is provided, the $args parameter will be ignored.
 * @param array                $args       Optional. Array of block type arguments. Accepts any public property
 *                                         of `WP_Block_Type`. See WP_Block_Type::__construct() for information
 *                                         on accepted arguments. Default empty array.
 *
 * @return WP_Block_Type|false The registered block type on success, or false on failure.
 * @phpstan-param array{
 *   api_version?: string,
 *   title?: string,
 *   category?: string|null,
 *   parent?: string[]|null,
 *   ancestor?: string[]|null,
 *   icon?: string|null,
 *   description?: string,
 *   keywords?: string[],
 *   textdomain?: string|null,
 *   styles?: array[],
 *   variations?: array[],
 *   selectors?: array,
 *   supports?: array|null,
 *   example?: array|null,
 *   render_callback?: callable|null,
 *   attributes?: array|null,
 *   uses_context?: string[],
 *   provides_context?: string[]|null,
 *   block_hooks?: array[],
 *   editor_script_handles?: string[],
 *   script_handles?: string[],
 *   view_script_handles?: string[],
 *   editor_style_handles?: string[],
 *   style_handles?: string[],
 * } $args See WP_Block_Type::__construct()
 */
function register_block_type($block_type, $args = array())
{
}