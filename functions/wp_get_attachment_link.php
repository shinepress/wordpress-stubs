<?php


/**
 * Retrieve an attachment page link using an image or icon, if possible.
 *
 * @since 2.5.0
 * @since 4.4.0 The `$id` parameter can now accept either a post ID or `WP_Post` object.
 *
 * @param int|WP_Post  $id        Optional. Post ID or post object.
 * @param string|array $size      Optional. Image size. Accepts any valid image size, or an array
 *                                of width and height values in pixels (in that order).
 *                                Default 'thumbnail'.
 * @param bool         $permalink Optional, Whether to add permalink to image. Default false.
 * @param bool         $icon      Optional. Whether the attachment is an icon. Default false.
 * @param string|false $text      Optional. Link text to use. Activated by passing a string, false otherwise.
 *                                Default false.
 * @param array|string $attr      Optional. Array or string of attributes. Default empty.
 * @return string HTML content.
 */
function wp_get_attachment_link($id = 0, $size = 'thumbnail', $permalink = \false, $icon = \false, $text = \false, $attr = '')
{
}