<?php


/**
 * Trashes or deletes a comment.
 *
 * The comment is moved to Trash instead of permanently deleted unless Trash is
 * disabled, item is already in the Trash, or $force_delete is true.
 *
 * The post comment count will be updated if the comment was approved and has a
 * post ID available.
 *
 * @since 2.0.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int|WP_Comment $comment_id   Comment ID or WP_Comment object.
 * @param bool           $force_delete Whether to bypass Trash and force deletion. Default false.
 * @return bool True on success, false on failure.
 */
function wp_delete_comment($comment_id, $force_delete = \false)
{
}