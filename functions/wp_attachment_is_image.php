<?php


/**
 * Checks if the attachment is an image.
 *
 * @since 2.1.0
 * @since 4.2.0 Modified into wrapper for wp_attachment_is() and
 *              allowed WP_Post object to be passed.
 *
 * @param int|WP_Post $post Optional. Attachment ID or object. Default is global $post.
 * @return bool Whether the attachment is an image.
 */
function wp_attachment_is_image($post = \null)
{
}