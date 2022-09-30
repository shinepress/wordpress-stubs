<?php


/**
 * Verifies an attachment is of a given type.
 *
 * @since 4.2.0
 *
 * @param string      $type Attachment type. Accepts 'image', 'audio', or 'video'.
 * @param int|WP_Post $post Optional. Attachment ID or object. Default is global $post.
 * @return bool True if one of the accepted types, false otherwise.
 */
function wp_attachment_is($type, $post = \null)
{
}