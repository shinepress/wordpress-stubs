<?php


/**
 * Send a notification of a new comment to the post author.
 *
 * @since 4.4.0
 *
 * Uses the {@see 'notify_post_author'} filter to determine whether the post author
 * should be notified when a new comment is added, overriding site setting.
 *
 * @param int $comment_ID Comment ID.
 * @return bool True on success, false on failure.
 */
function wp_new_comment_notify_postauthor($comment_ID)
{
}