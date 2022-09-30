<?php


/**
 * Determine if global tables should be upgraded.
 *
 * This function performs a series of checks to ensure the environment allows
 * for the safe upgrading of global WordPress database tables. It is necessary
 * because global tables will commonly grow to millions of rows on large
 * installations, and the ability to control their upgrade routines can be
 * critical to the operation of large networks.
 *
 * In a future iteration, this function may use `wp_is_large_network()` to more-
 * intelligently prevent global table upgrades. Until then, we make sure
 * WordPress is on the main site of the main network, to avoid running queries
 * more than once in multi-site or multi-network environments.
 *
 * @since 4.3.0
 *
 * @return bool Whether to run the upgrade routines on global tables.
 */
function wp_should_upgrade_global_tables()
{
}