<?php


/**
 * Check to see if the post is currently being edited by another user.
 *
 * @since 2.5.0
 *
 * @param int $post_id ID of the post to check for editing
 * @return integer False: not locked or locked by current user. Int: user ID of user with lock.
 */
function wp_check_post_lock($post_id)
{
}