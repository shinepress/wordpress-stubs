<?php


/**
 * Collect the block editor assets that need to be loaded into the editor's iframe.
 *
 * @since 6.0.0
 * @access private
 *
 * @global WP_Styles  $wp_styles  The WP_Styles current instance.
 * @global WP_Scripts $wp_scripts The WP_Scripts current instance.
 *
 * @return array {
 *     The block editor assets.
 *
 *     @type string|false $styles  String containing the HTML for styles.
 *     @type string|false $scripts String containing the HTML for scripts.
 * }
 * @phpstan-return array{
 *   styles: string|false,
 *   scripts: string|false,
 * }
 */
function _wp_get_iframed_editor_assets()
{
}