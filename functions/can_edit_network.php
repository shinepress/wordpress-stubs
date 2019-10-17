<?php


/**
 * Whether or not we can edit this network from this page.
 *
 * By default editing of network is restricted to the Network Admin for that `$site_id`
 * this allows for this to be overridden.
 *
 * @since 3.1.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int $site_id The network/site ID to check.
 * @return bool True if network can be edited, otherwise false.
 */
function can_edit_network($site_id)
{
}