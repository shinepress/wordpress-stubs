<?php


/**
 * Update the count of sites for the current network.
 *
 * If enabled through the {@see 'enable_live_network_counts'} filter, update the sites count
 * on a network when a site is created or its status is updated.
 *
 * @since 3.7.0
 * @since 4.8.0 The $network_id parameter has been added.
 *
 * @param int|null $network_id ID of the network. Default is the current network.
 * @phpstan-return void
 */
function wp_maybe_update_network_site_counts($network_id = \null)
{
}