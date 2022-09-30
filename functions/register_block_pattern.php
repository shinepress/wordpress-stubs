<?php


/**
 * Registers a new block pattern.
 *
 * @since 5.5.0
 *
 * @param string $pattern_name       Block pattern name including namespace.
 * @param array  $pattern_properties List of properties for the block pattern.
 *                                   See WP_Block_Patterns_Registry::register() for accepted arguments.
 * @return bool True if the pattern was registered with success and false otherwise.
 * @phpstan-param array{
 *   title?: string,
 *   content?: string,
 *   description?: string,
 *   viewportWidth?: int,
 *   categories?: array,
 *   keywords?: array,
 * } $pattern_properties See WP_Block_Patterns_Registry::register()
 */
function register_block_pattern($pattern_name, $pattern_properties)
{
}