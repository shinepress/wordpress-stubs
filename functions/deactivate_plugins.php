<?php


/**
 * Deactivates a single plugin or multiple plugins.
 *
 * The deactivation hook is disabled by the plugin upgrader by using the $silent
 * parameter.
 *
 * @since 2.5.0
 *
 * @param string|string[] $plugins      Single plugin or list of plugins to deactivate.
 * @param bool            $silent       Prevent calling deactivation hooks. Default false.
 * @param bool|null       $network_wide Whether to deactivate the plugin for all sites in the network.
 *                                      A value of null will deactivate plugins for both the network
 *                                      and the current site. Multisite only. Default null.
 */
function deactivate_plugins($plugins, $silent = \false, $network_wide = \null)
{
}