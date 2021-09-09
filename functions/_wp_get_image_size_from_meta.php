<?php


/**
 * Get the image size as array from its meta data.
 *
 * Used for responsive images.
 *
 * @since 4.4.0
 * @access private
 *
 * @param string $size_name  Image size. Accepts any valid image size name ('thumbnail', 'medium', etc.).
 * @param array  $image_meta The image meta data.
 * @return array|bool The image meta data as returned by `wp_get_attachment_metadata()`.
 */
function _wp_get_image_size_from_meta($size_name, $image_meta)
{
}