<?php


/**
 * Whether the current request is for an administrative interface page.
 *
 * Does not check if the user is an administrator; current_user_can()
 * for checking roles and capabilities.
 *
 * @since 1.5.1
 *
 * @global WP_Screen $current_screen
 *
 * @return bool True if inside WordPress administration interface, false otherwise.
 */
function is_admin()
{
}