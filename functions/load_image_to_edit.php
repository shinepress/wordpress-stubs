<?php


/**
 * Load an image resource for editing.
 *
 * @since 2.9.0
 *
 * @param int          $attachment_id Attachment ID.
 * @param string       $mime_type     Image mime type.
 * @param string|int[] $size          Optional. Image size. Accepts any registered image size name, or an array
 *                                    of width and height values in pixels (in that order). Default 'full'.
 * @return resource|GdImage|false The resulting image resource or GdImage instance on success,
 *                                false on failure.
 */
function load_image_to_edit($attachment_id, $mime_type, $size = 'full')
{
}