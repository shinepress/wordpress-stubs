<?php


/**
 * Based on a supplied width/height example, return the biggest possible dimensions based on the max width/height.
 *
 * @since 2.9.0
 *
 * @see wp_constrain_dimensions()
 *
 * @param int $example_width  The width of an example embed.
 * @param int $example_height The height of an example embed.
 * @param int $max_width      The maximum allowed width.
 * @param int $max_height     The maximum allowed height.
 * @return int[] {
 *     An array of maximum width and height values.
 *
 *     @type int $0 The maximum width in pixels.
 *     @type int $1 The maximum height in pixels.
 * }
 * @phpstan-return array{
 *   0: int,
 *   1: int,
 * }
 */
function wp_expand_dimensions($example_width, $example_height, $max_width, $max_height)
{
}