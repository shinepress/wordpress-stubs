<?php


/**
 * Check whether the plugin is inactive.
 *
 * Reverse of is_plugin_active(). Used as a callback.
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