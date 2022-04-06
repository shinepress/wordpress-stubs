<?php


/**
 * Validates the plugin requirements for WordPress version and PHP version.
 *
 * Uses the information from `Requires at least` and `Requires PHP` headers
 * defined in the plugin's main PHP file.
 *
 * If the headers are not present in the plugin's main PHP file,
 * `readme.txt` is also checked as a fallback.
 *
 * @since 5.2.0
 * @since 5.3.0 Added support for reading the headers from the plugin's
 *              main PHP file, with `readme.txt` as a fallback.
 *
 * @param string $plugin Path to the plugin file relative to the plugins directory.
 * @return true|WP_Error True if requirements are met, WP_Error on failure.
 */
function validate_plugin_requirements($plugin)
{
}