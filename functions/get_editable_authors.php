<?php


/**
 * Gets author users who can edit posts.
 *
 * @deprecated 3.1.0 Use get_users()
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int $user_id User ID.
 * @return array|bool List of editable authors. False if no editable users.
 */
function get_editable_authors($user_id)
{
}