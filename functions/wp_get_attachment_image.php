<?php


/**
 * Get an HTML img element representing an image attachment
 *
 * While `$size` will accept an array, it is better to register a size with
 * add_image_size() so that a cropped version is generated. It's much more
 * efficient than having to find the closest-sized image and then having the
 * browser scale down the image.
 *
 * @since 2.5.0
 *
 * @param int          $attachment_id Image attachment ID.
 * @param string|array $size          Optional. Image size. Accepts any valid image size, or an array of width
 *                                    and height values in pixels (in that order). Default 'thumbnail'.
 * @param bool         $icon          Optional. Whether the image should be treated as an icon. Default false.
 * @param string|array $attr          Optional. Attributes for the image markup. Default empty.
 * @return string HTML img element or empty string on failure.
 */
function wp_get_attachment_image($attachment_id, $size = 'thumbnail', $icon = \false, $attr = '')
{
}