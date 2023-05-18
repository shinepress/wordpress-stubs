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
 *   parent?: array|null,
 *   icon?: string|null,
 *   description?: string,
 *   keywords?: array,
 *   textdomain?: string|null,
 *   styles?: array,
 *   variations?: array,
 *   supports?: array|null,
 *   example?: array|null,
 *   render_callback?: callable|null,
 *   attributes?: array|null,
 *   uses_context?: array,
 *   provides_context?: array|null,
 *   editor_script?: string|null,
 *   script?: string|null,
 *   view_script?: string|null,
 *   editor_style?: string|null,
 *   style?: string|null,
 * } $args See WP_Block_Type::__construct()
 */
function register_block_type($block_type, $args = array())
{
}