<?php


/**
 * Check to see if the post is currently being edited by another user.
 *
 * @since 2.5.0
 *
 * @param int $post_id ID of the post to check for editing.
 * @return int|false ID of the user with lock. False if the post does not exist, post is not locked,
 *                   the user with lock does not exist, or the post is locked by current user.
 */
function wp_check_post_lock($post_id)
{
}