<?php


/**
 * Loads the translated strings for a plugin residing in the mu-plugins directory.
 *
 * @since 3.0.0
 * @since 4.6.0 The function now tries to load the .mo file from the languages directory first.
 *
 * @global WP_Textdomain_Registry $wp_textdomain_registry WordPress Textdomain Registry.
 *
 * @param string $domain             Text domain. Unique identifier for retrieving translated strings.
 * @param string $mu_plugin_rel_path Optional. Relative to `WPMU_PLUGIN_DIR` directory in which the .mo
 *                                   file resides. Default empty string.
 * @return bool True when textdomain is successfully loaded, false otherwise.
 */
function load_muplugin_textdomain($domain, $mu_plugin_rel_path = '')
{
}