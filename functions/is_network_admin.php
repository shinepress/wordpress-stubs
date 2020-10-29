<?php


/**
 * Whether the current request is for the network administrative interface.
 *
 * e.g. `/wp-admin/network/`
 *
 * Does not check if the user is an administrator; current_user_can()
 * for checking roles and capabilities.
 *
 * @since 3.1.0
 *
 * @global WP_Screen $current_screen
 *
 * @return bool True if inside WordPress network administration pages.
 */
function is_network_admin()
{
}