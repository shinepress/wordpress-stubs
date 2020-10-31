<?php


/**
 * Mark the post as currently being edited by the current user
 *
 * @since 2.5.0
 *
 * @param int $post_id ID of the post being edited.
 * @return array|false Array of the lock time and user ID. False if the post does not exist, or
 *                     there is no current user.
 */
function wp_set_post_lock($post_id)
{
}