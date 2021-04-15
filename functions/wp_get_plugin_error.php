<?php


/**
 * Gets the error that was recorded for a paused plugin.
 *
 * @since 5.2.0
 *
 * @param string $plugin Path to the plugin file relative to the plugins directory.
 * @return array|false Array of error information as returned by `error_get_last()`,
 *                     or false if none was recorded.
 */
function wp_get_plugin_error($plugin)
{
}