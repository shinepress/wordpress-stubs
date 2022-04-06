<?php


/**
 * Retrieves the value for an image attachment's 'sizes' attribute.
 *
 * @since 4.4.0
 *
 * @see wp_calculate_image_sizes()
 *
 * @param int          $attachment_id Image attachment ID.
 * @param string|int[] $size          Optional. Image size. Accepts any registered image size name, or an array of
 *                                    width and height values in pixels (in that order). Default 'medium'.
 * @param array        $image_meta    Optional. The image meta data as returned by 'wp_get_attachment_metadata()'.
 *                                    Default null.
 * @return string|false A valid source size value for use in a 'sizes' attribute or false.
 */
function wp_get_attachment_image_sizes($attachment_id, $size = 'medium', $image_meta = \null)
{
}