<?php


/**
 * Activates multiple plugins.
 *
 * When WP_Error is returned, it does not mean that one of the plugins had
 * errors. It means that one or more of the plugin file paths were invalid.
 *
 * The execution will be halted as soon as one of the plugins has an error.
 *
 * @since 2.6.0
 *
 * @param string|string[] $plugins      Single plugin or list of plugins to activate.
 * @param string          $redirect     Redirect to page after successful activation.
 * @param bool            $network_wide Whether to enable the plugin for all sites in the network.
 *                                      Default false.
 * @param bool            $silent       Prevent calling activation hooks. Default false.
 * @return bool|WP_Error True when finished or WP_Error if there were errors during a plugin activation.
 */
function activate_plugins($plugins, $redirect = '', $network_wide = \false, $silent = \false)
{
}