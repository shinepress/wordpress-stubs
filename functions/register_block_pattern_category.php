<?php


/**
 * Registers a new pattern category.
 *
 * @since 5.5.0
 *
 * @param string $category_name       Pattern category name including namespace.
 * @param array  $category_properties List of properties for the block pattern.
 *                                    See WP_Block_Pattern_Categories_Registry::register() for
 *                                    accepted arguments.
 * @return bool True if the pattern category was registered with success and false otherwise.
 * @phpstan-param array{
 *   label?: string,
 * } $category_properties See WP_Block_Pattern_Categories_Registry::register()
 */
function register_block_pattern_category($category_name, $category_properties)
{
}