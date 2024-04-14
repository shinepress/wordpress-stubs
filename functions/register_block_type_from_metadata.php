<?php


/**
 * Registers a block type from the metadata stored in the `block.json` file.
 *
 * @since 5.5.0
 *
 * @param string $file_or_folder Path to the JSON file with metadata definition for
 *                               the block or path to the folder where the `block.json` file is located.
 * @param array  $args           Optional. Array of block type arguments. Accepts any public property
 *                               of `WP_Block_Type`. See WP_Block_Type::__construct() for information
 *                               on accepted arguments. Default empty array.
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
 *   editor_style?: string|null,
 *   style?: string|null,
 * } $args See WP_Block_Type::__construct()
 */
function register_block_type_from_metadata($file_or_folder, $args = array())
{
}