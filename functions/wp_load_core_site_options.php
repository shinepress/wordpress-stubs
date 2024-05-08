<?php


/**
 * Loads and primes caches of certain often requested network options if is_multisite().
 *
 * @since 3.0.0
 * @since 6.3.0 Also prime caches for network options when persistent object cache is enabled.
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int $network_id Optional. Network ID of network for which to prime network options cache. Defaults to current network.
 * @phpstan-return void
 */
function wp_load_core_site_options($network_id = \null)
{
}