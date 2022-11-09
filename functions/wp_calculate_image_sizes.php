<?php


/**
 * Creates a 'sizes' attribute value for an image.
 *
 * @since 4.4.0
 *
 * @param array|string $size          Image size to retrieve. Accepts any valid image size, or an array
 *                                    of width and height values in pixels (in that order). Default 'medium'.
 * @param string       $image_src     Optional. The URL to the image file. Default null.
 * @param array        $image_meta    Optional. The image meta data as returned by 'wp_get_attachment_metadata()'.
 *                                    Default null.
 * @param int          $attachment_id Optional. Image attachment ID. Either `$image_meta` or `$attachment_id`
 *                                    is needed when using the image size name as argument for `$size`. Default 0.
 * @return string|bool A valid source size value for use in a 'sizes' attribute or false.
 */
function wp_calculate_image_sizes($size, $image_src = \null, $image_meta = \null, $attachment_id = 0)
{
}