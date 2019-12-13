<?php


/**
 * Remove a user from a blog.
 *
 * Use the {@see 'remove_user_from_blog'} action to fire an event when
 * users are removed from a blog.
 *
 * Accepts an optional `$reassign` parameter, if you want to
 * reassign the user's blog posts to another user upon removal.
 *
 * @since MU 1.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int    $user_id  ID of the user you're removing.
 * @param int    $blog_id  ID of the blog you're removing the user from.
 * @param string $reassign Optional. A user to whom to reassign posts.
 * @return true|WP_Error
 */
function remove_user_from_blog($user_id, $blog_id = '', $reassign = '')
{
}