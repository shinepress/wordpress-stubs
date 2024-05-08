<?php


/**
 * Registers a new block style.
 *
 * @since 5.3.0
 *
 * @link https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 *
 * @param string $block_name       Block type name including namespace.
 * @param array  $style_properties Array containing the properties of the style name, label,
 *                                 style_handle (name of the stylesheet to be enqueued),
 *                                 inline_style (string containing the CSS to be added).
 *                                 See WP_Block_Styles_Registry::register().
 * @return bool True if the block style was registered with success and false otherwise.
 * @phpstan-param array{
 *   name?: string,
 *   label?: string,
 *   inline_style?: string,
 *   style_handle?: string,
 *   is_default?: bool,
 * } $style_properties See WP_Block_Styles_Registry::register()
 */
function register_block_style($block_name, $style_properties)
{
}