<?php


/**
 * Generates the name for an asset based on the name of the block
 * and the field name provided.
 *
 * @since 5.5.0
 * @since 6.1.0 Added `$index` parameter.
 * @since 6.5.0 Added support for `viewScriptModule` field.
 *
 * @param string $block_name Name of the block.
 * @param string $field_name Name of the metadata field.
 * @param int    $index      Optional. Index of the asset when multiple items passed.
 *                           Default 0.
 * @return string Generated asset name for the block's field.
 */
function generate_block_asset_handle($block_name, $field_name, $index = 0)
{
}