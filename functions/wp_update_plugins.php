<?php


/**
 * Check plugin versions against the latest versions hosted on WordPress.org.
 *
 * The WordPress version, PHP version, and Locale is sent along with a list of
 * all plugins installed. Checks against the WordPress server at
 * api.wordpress.org. Will only check if WordPress isn't installing.
 *
 * @since 2.3.0
 * @global string $wp_version The WordPress version string.
 *
 * @param array $extra_stats Extra statistics to report to the WordPress.org API.
 */
function wp_update_plugins($extra_stats = array())
{
}