<?php


/**
 * Logs the user email, IP, and registration date of a new site.
 *
 * @since MU (3.0.0)
 * @since 5.1.0 Parameters now support input from the {@see 'wp_initialize_site'} action.
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param WP_Site|int $blog_id The new site's object or ID.
 * @param int|array   $user_id User ID, or array of arguments including 'user_id'.
 */
function wpmu_log_new_registrations($blog_id, $user_id)
{
}