<?php


/**
 * A helper function to calculate the image sources to include in a 'srcset' attribute.
 *
 * @since 4.4.0
 *
 * @param int[]  $size_array    {
 *     An array of width and height values.
 *
 *     @type int $0 The width in pixels.
 *     @type int $1 The height in pixels.
 * }
 * @param string $image_src     The 'src' of the image.
 * @param array  $image_meta    The image meta data as returned by 'wp_get_attachment_metadata()'.
 * @param int    $attachment_id Optional. The image attachment ID. Default 0.
 * @return string|false The 'srcset' attribute value. False on error or when only one source exists.
 */
function wp_calculate_image_srcset($size_array, $image_src, $image_meta, $attachment_id = 0)
{
}