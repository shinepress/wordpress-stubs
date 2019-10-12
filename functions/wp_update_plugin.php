<?php


/**
 * This was once used to kick-off the Plugin Updater.
 *
 * Deprecated in favor of instantating a Plugin_Upgrader instance directly,
 * and calling the 'upgrade' method.
 * Unused since 2.8.0.
 *
 * @since 2.5.0
 * @deprecated 3.7.0 Use Plugin_Upgrader
 * @see Plugin_Upgrader
 */
function wp_update_plugin($plugin, $feedback = '')
{
}