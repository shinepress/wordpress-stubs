<?php


/**
 * Was used to filter input from media_upload_form_handler() and to assign a default
 * post_title from the file name if none supplied.
 *
 * @since 2.5.0
 * @deprecated 6.0.0
 *
 * @param array $post       The WP_Post attachment object converted to an array.
 * @param array $attachment An array of attachment metadata.
 * @return array Attachment post object converted to an array.
 */
function image_attachment_fields_to_save($post, $attachment)
{
}