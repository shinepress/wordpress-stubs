<?php


/**
 * Retrieves the locale of a user.
 *
 * If the user has a locale set to a non-empty string then it will be
 * returned. Otherwise it returns the locale of get_locale().
 *
 * @since 4.7.0
 *
 * @param int|WP_User $user User's ID or a WP_User object. Defaults to current user.
 * @return string The locale of the user.
 */
function get_user_locale($user = 0)
{
}