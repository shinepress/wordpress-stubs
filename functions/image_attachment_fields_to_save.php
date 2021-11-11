<?php


/**
 * Filters input from media_upload_form_handler() and assigns a default
 * post_title from the file name if none supplied.
 *
 * Illustrates the use of the {@see 'attachment_fields_to_save'} filter
 * which can be used to add default values to any field before saving to DB.
 *
 * @since 2.5.0
 *
 * @param array $post       The WP_Post attachment object converted to an array.
 * @param array $attachment An array of attachment metadata.
 * @return array Filtered attachment post object.
 */
function image_attachment_fields_to_save($post, $attachment)
{
}