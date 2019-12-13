<?php


/**
 * Notifies the moderator of the site about a new comment that is awaiting approval.
 *
 * @since 1.0.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * Uses the {@see 'notify_moderator'} filter to determine whether the site moderator
 * should be notified, overriding the site setting.
 *
 * @param int $comment_id Comment ID.
 * @return true Always returns true.
 */
function wp_notify_moderator($comment_id)
{
}