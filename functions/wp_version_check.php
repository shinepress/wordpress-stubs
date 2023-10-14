<?php


/**
 * A simple set of functions to check the WordPress.org Version Update service.
 *
 * @package WordPress
 * @since 2.3.0
 */
/**
 * Checks WordPress version against the newest version.
 *
 * The WordPress version, PHP version, and locale is sent.
 *
 * Checks against the WordPress server at api.wordpress.org. Will only check
 * if WordPress isn't installing.
 *
 * @since 2.3.0
 *
 * @global string $wp_version       Used to check against the newest WordPress version.
 * @global wpdb   $wpdb             WordPress database abstraction object.
 * @global string $wp_local_package Locale code of the package.
 *
 * @param array $extra_stats Extra statistics to report to the WordPress.org API.
 * @param bool  $force_check Whether to bypass the transient cache and force a fresh update check.
 *                           Defaults to false, true if $extra_stats is set.
 */
function wp_version_check($extra_stats = array(), $force_check = \false)
{
}