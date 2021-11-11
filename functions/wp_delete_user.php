<?php


/**
 * Remove user and optionally reassign posts and links to another user.
 *
 * If the $reassign parameter is not assigned to a User ID, then all posts will
 * be deleted of that user. The action {@see 'delete_user'} that is passed the User ID
 * being deleted will be run after the posts are either reassigned or deleted.
 * The user meta will also be deleted that are for that User ID.
 *
 * @since 2.0.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int $id User ID.
 * @param int $reassign Optional. Reassign posts and links to new User ID.
 * @return bool True when finished.
 */
function wp_delete_user($id, $reassign = \null)
{
}