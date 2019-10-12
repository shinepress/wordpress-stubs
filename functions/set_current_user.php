<?php


/**
 * Changes the current user by ID or name.
 *
 * Set $id to null and specify a name if you do not know a user's ID.
 *
 * @since 2.0.1
 * @deprecated 3.0.0 Use wp_set_current_user()
 * @see wp_set_current_user()
 *
 * @param int|null $id User ID.
 * @param string $name Optional. The user's username
 * @return WP_User returns wp_set_current_user()
 */
function set_current_user($id, $name = '')
{
}