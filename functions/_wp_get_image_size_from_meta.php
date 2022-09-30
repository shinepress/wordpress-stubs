<?php


/**
 * Get the image size as array from its meta data.
 *
 * Used for responsive images.
 *
 * @since 4.4.0
 * @access private
 *
 * @param string $size_name  Image size. Accepts any registered image size name.
 * @param array  $image_meta The image meta data.
 * @return array|false {
 *     Array of width and height or false if the size isn't present in the meta data.
 *
 *     @type int $0 Image width.
 *     @type int $1 Image height.
 * }
 * @phpstan-return false|array{
 *   0: int,
 *   1: int,
 * }
 */
function _wp_get_image_size_from_meta($size_name, $image_meta)
{
}