<?php


/**
 * Deletes an associated signup entry when a user is deleted from the database.
 *
 * @since 5.5.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int      $id       ID of the user to delete.
 * @param int|null $reassign ID of the user to reassign posts and links to.
 * @param WP_User  $user     User object.
 */
function wp_delete_signup_on_user_delete($id, $reassign, $user)
{
}