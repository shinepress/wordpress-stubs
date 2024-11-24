<?php


/**
 * Checks whether comment data passes internal checks or has disallowed content.
 *
 * @since 6.7.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param array $comment_data Array of arguments for inserting a comment.
 * @return int|string|WP_Error The approval status on success (0|1|'spam'|'trash'),
 *                            WP_Error otherwise.
 */
function wp_check_comment_data($comment_data)
{
}