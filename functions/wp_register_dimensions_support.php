<?php


/**
 * Dimensions block support flag.
 *
 * This does not include the `spacing` block support even though that visually
 * appears under the "Dimensions" panel in the editor. It remains in its
 * original `spacing.php` file for backwards compatibility.
 *
 * @package WordPress
 * @since 5.9.0
 */
/**
 * Registers the style block attribute for block types that support it.
 *
 * @since 5.9.0
 * @access private
 *
 * @param WP_Block_Type $block_type Block Type.
 * @phpstan-return void
 */
function wp_register_dimensions_support($block_type)
{
}