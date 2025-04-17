<?php


/**
 * Renders an admin notice when a plugin was deactivated during an update.
 *
 * Displays an admin notice in case a plugin has been deactivated during an
 * upgrade due to incompatibility with the current version of WordPress.
 *
 * @since 5.8.0
 * @access private
 *
 * @global string $pagenow    The filename of the current screen.
 * @global string $wp_version The WordPress version string.
 * @phpstan-return void
 */
function deactivated_plugins_notice()
{
}