<?php


/**
 * Registers a block type from metadata stored in the `block.json` file.
 *
 * @since 5.5.0
 *
 * @param string $file_or_folder Path to the JSON file with metadata definition for
 *                               the block or path to the folder where the `block.json` file is located.
 * @param array  $args {
 *     Optional. Array of block type arguments. Accepts any public property of `WP_Block_Type`.
 *     Any arguments may be defined, however the ones described below are supported by default.
 *     Default empty array.
 *
 *     @type callable $render_callback Callback used to render blocks of this block type.
 * }
 * @return WP_Block_Type|false The registered block type on success, or false on failure.
 */
function register_block_type_from_metadata($file_or_folder, $args = array())
{
}