<?php


/**
 * Collect the block editor assets that need to be loaded into the editor's iframe.
 *
 * @since 6.0.0
 * @access private
 *
 * @global string $pagenow The filename of the current screen.
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