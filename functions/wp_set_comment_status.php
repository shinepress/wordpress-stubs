<?php


/**
 * Sets the status of a comment.
 *
 * The {@see 'wp_set_comment_status'} action is called after the comment is handled.
 * If the comment status is not in the list, then false is returned.
 *
 * @since 1.0.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int|WP_Comment $comment_id     Comment ID or WP_Comment object.
 * @param string         $comment_status New comment status, either 'hold', 'approve', 'spam', or 'trash'.
 * @param bool           $wp_error       Whether to return a WP_Error object if there is a failure. Default false.
 * @return bool|WP_Error True on success, false or WP_Error on failure.
 */
function wp_set_comment_status($comment_id, $comment_status, $wp_error = \false)
{
}