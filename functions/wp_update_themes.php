<?php


/**
 * Check theme versions against the latest versions hosted on WordPress.org.
 *
 * A list of all themes installed in sent to WP. Checks against the
 * WordPress server at api.wordpress.org. Will only check if WordPress isn't
 * installing.
 *
 * @since 2.7.0
 * @global string $wp_version The WordPress version string.
 *
 * @param array $extra_stats Extra statistics to report to the WordPress.org API.
 * @phpstan-return void
 */
function wp_update_themes($extra_stats = array())
{
}