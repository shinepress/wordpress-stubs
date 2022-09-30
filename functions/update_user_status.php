<?php


/**
 * Update the status of a user in the database.
 *
 * Previously used in core to mark a user as spam or "ham" (not spam) in Multisite.
 *
 * @since 3.0.0
 * @deprecated 5.3.0 Use wp_update_user()
 * @see wp_update_user()
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int    $id         The user ID.
 * @param string $pref       The column in the wp_users table to update the user's status
 *                           in (presumably user_status, spam, or deleted).
 * @param int    $value      The new status for the user.
 * @param null   $deprecated Deprecated as of 3.0.2 and should not be used.
 * @return int   The initially passed $value.
 */
function update_user_status($id, $pref, $value, $deprecated = \null)
{
}