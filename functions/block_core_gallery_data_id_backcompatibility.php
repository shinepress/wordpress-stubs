<?php


/**
 * Handles backwards compatibility for Gallery Blocks,
 * whose images feature a `data-id` attribute.
 *
 * Now that the Gallery Block contains inner Image Blocks,
 * we add a custom `data-id` attribute before rendering the gallery
 * so that the Image Block can pick it up in its render_callback.
 *
 * @since 5.9.0
 *
 * @param array $parsed_block The block being rendered.
 * @return array The migrated block object.
 */
function block_core_gallery_data_id_backcompatibility($parsed_block)
{
}