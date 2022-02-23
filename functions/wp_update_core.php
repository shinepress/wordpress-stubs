<?php


/**
 * This was once used to kick-off the Core Updater.
 *
 * Deprecated in favor of instantating a Core_Upgrader instance directly,
 * and calling the 'upgrade' method.
 *
 * @since 2.7.0
 * @deprecated 3.7.0 Use Core_Upgrader
 * @see Core_Upgrader
 */
function wp_update_core($current, $feedback = '')
{
}