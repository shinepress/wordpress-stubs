<?php


/**
 * This was once used to kick-off the Theme Updater.
 *
 * Deprecated in favor of instantiating a Theme_Upgrader instance directly,
 * and calling the 'upgrade' method.
 * Unused since 2.8.0.
 *
 * @since 2.7.0
 * @deprecated 3.7.0 Use Theme_Upgrader
 * @see Theme_Upgrader
 */
function wp_update_theme($theme, $feedback = '')
{
}