<?php


/**
 * Loads a plugin's translated strings.
 *
 * If the path is not given then it will be the root of the plugin directory.
 *
 * The .mo file should be named based on the text domain with a dash, and then the locale exactly.
 *
 * @since 1.5.0
 * @since 4.6.0 The function now tries to load the .mo file from the languages directory first.
 * @since 6.7.0 Translations are no longer immediately loaded, but handed off to the just-in-time loading mechanism.
 *
 * @param string       $domain          Unique identifier for retrieving translated strings
 * @param string|false $deprecated      Optional. Deprecated. Use the $plugin_rel_path parameter instead.
 *                                      Default false.
 * @param string|false $plugin_rel_path Optional. Relative path to WP_PLUGIN_DIR where the .mo file resides.
 *                                      Default false.
 * @return bool True when textdomain is successfully loaded, false otherwise.
 */
function load_plugin_textdomain($domain, $deprecated = \false, $plugin_rel_path = \false)
{
}