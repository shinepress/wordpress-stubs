<?php


/**
 * Internal implementation of CSS clamp() based on available min/max viewport
 * width and min/max font sizes.
 *
 * @since 6.1.0
 * @since 6.3.0 Checks for unsupported min/max viewport values that cause invalid clamp values.
 * @access private
 *
 * @param array $args {
 *     Optional. An associative array of values to calculate a fluid formula
 *     for font size. Default is empty array.
 *
 *     @type string $maximum_viewport_width Maximum size up to which type will have fluidity.
 *     @type string $minimum_viewport_width Minimum viewport size from which type will have fluidity.
 *     @type string $maximum_font_size      Maximum font size for any clamp() calculation.
 *     @type string $minimum_font_size      Minimum font size for any clamp() calculation.
 *     @type int    $scale_factor           A scale factor to determine how fast a font scales within boundaries.
 * }
 * @return string|null A font-size value using clamp() on success, otherwise null.
 * @phpstan-param array{
 *   maximum_viewport_width?: string,
 *   minimum_viewport_width?: string,
 *   maximum_font_size?: string,
 *   minimum_font_size?: string,
 *   scale_factor?: int,
 * } $args
 */
function wp_get_computed_fluid_typography_value($args = array())
{
}