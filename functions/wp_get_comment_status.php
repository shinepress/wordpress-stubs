<?php


/**
 * The status of a comment by ID.
 *
 * @since 1.0.0
 *
 * @param int|WP_Comment $comment_id Comment ID or WP_Comment object
 * @return string|false Status might be 'trash', 'approved', 'unapproved', 'spam'. False on failure.
 */
function wp_get_comment_status($comment_id)
{
}