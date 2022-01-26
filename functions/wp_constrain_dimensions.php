<?php


/**
 * Calculates the new dimensions for a down-sampled image.
 *
 * If either width or height are empty, no constraint is applied on
 * that dimension.
 *
 * @since 2.5.0
 *
 * @param int $current_width  Current width of the image.
 * @param int $current_height Current height of the image.
 * @param int $max_width      Optional. Max width in pixels to constrain to. Default 0.
 * @param int $max_height     Optional. Max height in pixels to constrain to. Default 0.
 * @return int[] {
 *     An array of width and height values.
 *
 *     @type int $0 The width in pixels.
 *     @type int $1 The height in pixels.
 * }
 * @phpstan-return array{
 *   0: int,
 *   1: int,
 * }
 */
function wp_constrain_dimensions($current_width, $current_height, $max_width = 0, $max_height = 0)
{
}