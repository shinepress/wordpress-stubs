<?php


/**
 * Retrieve the path or URL of an attachment's attached file.
 *
 * If the attached file is not present on the local filesystem (usually due to replication plugins),
 * then the URL of the file is returned if `allow_url_fopen` is supported.
 *
 * @since 3.4.0
 * @access private
 *
 * @param int          $attachment_id Attachment ID.
 * @param string|int[] $size          Optional. Image size. Accepts any registered image size name, or an array
 *                                    of width and height values in pixels (in that order). Default 'full'.
 * @return string|false File path or URL on success, false on failure.
 */
function _load_image_to_edit_path($attachment_id, $size = 'full')
{
}