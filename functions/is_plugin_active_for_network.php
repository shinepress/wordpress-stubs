<?php


/**
 * Check whether the plugin is active for the entire network.
 *
 * Only plugins installed in the plugins/ folder can be active.
 *
 * Plugins in the mu-plugins/ folder can't be "activated," so this function will
 * return false for those plugins.
 *
 * @since 3.0.0
 *
 * @param string $plugin Base plugin path from plugins directory.
 * @return bool True, if active for the network, otherwise false.
 */
function is_plugin_active_for_network($plugin)
{
}