<?php


/**
 * Check whether a blogname is already taken.
 *
 * Used during the new site registration process to ensure
 * that each blogname is unique.
 *
 * @since MU
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string $domain  The domain to be checked.
 * @param string $path    The path to be checked.
 * @param int    $site_id Optional. Relevant only on multi-network installs.
 * @return int
 */
function domain_exists($domain, $path, $site_id = 1)
{
}