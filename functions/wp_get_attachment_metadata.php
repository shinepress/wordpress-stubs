<?php


/**
 * Retrieve attachment meta field for attachment ID.
 *
 * @since 2.1.0
 *
 * @param int  $attachment_id Attachment post ID. Defaults to global $post.
 * @param bool $unfiltered    Optional. If true, filters are not run. Default false.
 * @return mixed Attachment meta field. False on failure.
 */
function wp_get_attachment_metadata($attachment_id = 0, $unfiltered = \false)
{
}