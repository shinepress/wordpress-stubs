<?php


/**
 * Whether the current request is for a user admin screen.
 *
 * e.g. `/wp-admin/user/`
 *
 * Does not inform on whether the user is an admin! Use capability
 * checks to tell if the user should be accessing a section or not
 * current_user_can().
 *
 * @since 3.1.0
 *
 * @global WP_Screen $current_screen
 *
 * @return bool True if inside WordPress user administration pages.
 */
function is_user_admin()
{
}