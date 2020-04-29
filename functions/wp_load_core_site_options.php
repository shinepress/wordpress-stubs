<?php


/**
 * Loads and caches certain often requested site options if is_multisite() and a persistent cache is not being used.
 *
 * @since 3.0.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int $network_id Optional site ID for which to query the options. Defaults to the current site.
 */
function wp_load_core_site_options($network_id = \null)
{
}