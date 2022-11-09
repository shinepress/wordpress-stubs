<?php


/**
 * Determines an image's width and height dimensions based on the source file.
 *
 * @since 5.5.0
 *
 * @param string $image_src     The image source file.
 * @param array  $image_meta    The image meta data as returned by 'wp_get_attachment_metadata()'.
 * @param int    $attachment_id Optional. The image attachment ID. Default 0.
 * @return array|false Array with first element being the width and second element being the height,
 *                     or false if dimensions cannot be determined.
 */
function wp_image_src_get_dimensions($image_src, $image_meta, $attachment_id = 0)
{
}