<?php


/**
 * Retrieves the value for an image attachment's 'srcset' attribute.
 *
 * @since 4.4.0
 *
 * @see wp_calculate_image_srcset()
 *
 * @param int          $attachment_id Image attachment ID.
 * @param array|string $size          Optional. Image size. Accepts any valid image size, or an array of
 *                                    width and height values in pixels (in that order). Default 'medium'.
 * @param array        $image_meta    Optional. The image meta data as returned by 'wp_get_attachment_metadata()'.
 *                                    Default null.
 * @return string|bool A 'srcset' value string or false.
 */
function wp_get_attachment_image_srcset($attachment_id, $size = 'medium', $image_meta = \null)
{
}