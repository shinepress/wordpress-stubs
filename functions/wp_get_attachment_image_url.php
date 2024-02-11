<?php


/**
 * Gets the URL of an image attachment.
 *
 * @since 4.4.0
 *
 * @param int          $attachment_id Image attachment ID.
 * @param string|int[] $size          Optional. Image size. Accepts any registered image size name, or an array of
 *                                    width and height values in pixels (in that order). Default 'thumbnail'.
 * @param bool         $icon          Optional. Whether the image should be treated as an icon. Default false.
 * @return string|false Attachment URL or false if no image is available. If `$size` does not match
 *                      any registered image size, the original image URL will be returned.
 */
function wp_get_attachment_image_url($attachment_id, $size = 'thumbnail', $icon = \false)
{
}