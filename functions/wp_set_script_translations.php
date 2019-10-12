<?php


/**
 * Sets translated strings for a script.
 *
 * Works only if the script has already been added.
 *
 * @see WP_Scripts::set_translations()
 * @global WP_Scripts $wp_scripts The WP_Scripts object for printing scripts.
 *
 * @since 5.0.0
 *
 * @param string $handle Script handle the textdomain will be attached to.
 * @param string $domain The textdomain.
 * @param string $path   Optional. The full file path to the directory containing translation files.
 *
 * @return bool True if the textdomain was successfully localized, false otherwise.
 */
function wp_set_script_translations($handle, $domain, $path = \null)
{
}