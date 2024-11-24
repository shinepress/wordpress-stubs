<?php


/**
 * Loads plugin and theme text domains just-in-time.
 *
 * When a textdomain is encountered for the first time, we try to load
 * the translation file from `wp-content/languages`, removing the need
 * to call load_plugin_textdomain() or load_theme_textdomain().
 *
 * @since 4.6.0
 * @access private
 *
 * @global MO[]                   $l10n_unloaded          An array of all text domains that have been unloaded again.
 * @global WP_Textdomain_Registry $wp_textdomain_registry WordPress Textdomain Registry.
 *
 * @param string $domain Text domain. Unique identifier for retrieving translated strings.
 * @return bool True when the textdomain is successfully loaded, false otherwise.
 */
function _load_textdomain_just_in_time($domain)
{
}