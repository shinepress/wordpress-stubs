<?php


/**
 * Adds a user to a blog.
 *
 * Use the {@see 'add_user_to_blog'} action to fire an event when users are added to a blog.
 *
 * @since MU 1.0
 *
 * @param int    $blog_id ID of the blog you're adding the user to.
 * @param int    $user_id ID of the user you're adding.
 * @param string $role    The role you want the user to have
 * @return true|WP_Error
 */
function add_user_to_blog($blog_id, $user_id, $role)
{
}