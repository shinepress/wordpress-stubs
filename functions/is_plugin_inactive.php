<?php


/**
 * Determines whether the plugin is inactive.
 *
 * Reverse of is_plugin_active(). Used as a callback.
 * 
 * For more information on this and similar theme functions, check out
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/ 
 * Conditional Tags} article in the Theme Developer Handbook.
 * 
 * @since 3.1.0
 * @see is_plugin_active()
 *
 * @param string $plugin Path to the main plugin file from plugins directory.
 * @return bool True if inactive. False if active.
 */
function is_plugin_inactive($plugin)
{
}