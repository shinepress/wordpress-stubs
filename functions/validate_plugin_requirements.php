<?php


/**
 * Validates the plugin requirements for WordPress version and PHP version.
 *
 * Uses the information from `Requires at least` and `Requires PHP` headers
 * defined in the plugin's main PHP file.
 *
 * @since 5.2.0
 * @since 5.3.0 Added support for reading the headers from the plugin's
 *              main PHP file, with `readme.txt` as a fallback.
 * @since 5.8.0 Removed support for using `readme.txt` as a fallback.
 *
 * @param string $plugin Path to the plugin file relative to the plugins directory.
 * @return true|WP_Error True if requirements are met, WP_Error on failure.
 */
function validate_plugin_requirements($plugin)
{
}