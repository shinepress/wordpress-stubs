<?php


/**
 * Deactivate a single plugin or multiple plugins.
 *
 * The deactivation hook is disabled by the plugin upgrader by using the $silent
 * parameter.
 *
 * @since 2.5.0
 *
 * @param string|array $plugins Single plugin or list of plugins to deactivate.
 * @param bool $silent Prevent calling deactivation hooks. Default is false.
 * @param mixed $network_wide Whether to deactivate the plugin for all sites in the network.
 *  A value of null (the default) will deactivate plugins for both the site and the network.
 */
function deactivate_plugins($plugins, $silent = \false, $network_wide = \null)
{
}