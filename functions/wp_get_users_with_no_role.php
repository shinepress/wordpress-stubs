<?php


/**
 * Gets the user IDs of all users with no role on this site.
 *
 * @since 4.4.0
 * @since 4.9.0 The `$site_id` parameter was added to support multisite.
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int|null $site_id Optional. The site ID to get users with no role for. Defaults to the current site.
 * @return string[] Array of user IDs as strings.
 */
function wp_get_users_with_no_role($site_id = \null)
{
}