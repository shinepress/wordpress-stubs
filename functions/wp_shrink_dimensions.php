<?php


/**
 * Calculates the new dimensions for a downsampled image.
 *
 * @since 2.0.0
 * @deprecated 3.0.0 Use wp_constrain_dimensions()
 * @see wp_constrain_dimensions()
 *
 * @param int $width Current width of the image
 * @param int $height Current height of the image
 * @param int $wmax Maximum wanted width
 * @param int $hmax Maximum wanted height
 * @return array Shrunk dimensions (width, height).
 */
function wp_shrink_dimensions($width, $height, $wmax = 128, $hmax = 96)
{
}