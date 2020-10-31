<?php


/**
 * Adds a newly created user to the appropriate blog
 *
 * To add a user in general, use add_user_to_blog(). This function
 * is specifically hooked into the {@see 'wpmu_activate_user'} action.
 *
 * @since MU (3.0.0)
 * @see add_user_to_blog()
 *
 * @param int   $user_id
 * @param mixed $password Ignored.
 * @param array $meta
 */
function add_new_user_to_blog($user_id, $password, $meta)
{
}