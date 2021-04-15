<?php


/**
 * Mark the post as currently being edited by the current user
 *
 * @since 2.5.0
 *
 * @param int $post_id ID of the post to being edited
 * @return bool|array Returns false if the post doesn't exist of there is no current user, or
 * 	an array of the lock time and the user ID.
 */
function wp_set_post_lock($post_id)
{
}