<?php


/**
 * Gets the number of posts written by a list of users.
 *
 * @since 3.0.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int[]           $users       Array of user IDs.
 * @param string|string[] $post_type   Optional. Single post type or array of post types to check. Defaults to 'post'.
 * @param bool            $public_only Optional. Only return counts for public posts.  Defaults to false.
 * @return string[] Amount of posts each user has written, as strings, keyed by user ID.
 */
function count_many_users_posts($users, $post_type = 'post', $public_only = \false)
{
}