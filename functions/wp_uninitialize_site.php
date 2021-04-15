<?php


/**
 * Runs the uninitialization routine for a given site.
 *
 * This process includes dropping the site's database tables and deleting its uploads directory.
 *
 * @since 5.1.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int|WP_Site $site_id Site ID or object.
 * @return bool|WP_Error True on success, or error object on failure.
 */
function wp_uninitialize_site($site_id)
{
}