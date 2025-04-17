<?php


/**
 * Generate block style variation instance name.
 *
 * @since 6.6.0
 * @deprecated 6.7.0 Use `wp_unique_id( $variation . '--' )` instead.
 *
 * @access private
 *
 * @param array  $block     Block object.
 * @param string $variation Slug for the block style variation.
 *
 * @return string The unique variation name.
 */
function wp_create_block_style_variation_instance_name($block, $variation)
{
}