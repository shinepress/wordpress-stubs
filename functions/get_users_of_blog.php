<?php


/**
 * Get users for the site.
 *
 * For setups that use the multisite feature. Can be used outside of the
 * multisite feature.
 *
 * @since 2.2.0
 * @deprecated 3.1.0 Use get_users()
 * @see get_users()
 *
 * @global wpdb $wpdb    WordPress database abstraction object.
 *
 * @param int $id Site ID.
 * @return array List of users that are part of that site ID
 */
function get_users_of_blog($id = '')
{
}