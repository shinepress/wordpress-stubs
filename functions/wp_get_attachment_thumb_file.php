<?php


/**
 * Retrieves thumbnail for an attachment.
 * Note that this works only for the (very) old image metadata style where 'thumb' was set,
 * and the 'sizes' array did not exist. This function returns false for the newer image metadata style
 * despite that 'thumbnail' is present in the 'sizes' array.
 *
 * @since 2.1.0
 * @deprecated 6.1.0
 *
 * @param int $post_id Optional. Attachment ID. Default is the ID of the global `$post`.
 * @return string|false Thumbnail file path on success, false on failure.
 */
function wp_get_attachment_thumb_file($post_id = 0)
{
}