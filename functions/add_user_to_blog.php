<?php


/**
 * Adds a user to a blog, along with specifying the user's role.
 *
 * Use the {@see 'add_user_to_blog'} action to fire an event when users are added to a blog.
 *
 * @since MU (3.0.0)
 *
 * @param int    $blog_id ID of the blog the user is being added to.
 * @param int    $user_id ID of the user being added.
 * @param string $role    The role you want the user to have.
 * @return true|WP_Error True on success or a WP_Error object if the user doesn't exist
 *                       or could not be added.
 */
function add_user_to_blog($blog_id, $user_id, $role)
{
}