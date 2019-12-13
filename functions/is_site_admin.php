<?php


/**
 * Determine if user is a site admin.
 *
 * Plugins should use is_multisite() instead of checking if this function exists
 * to determine if multisite is enabled.
 *
 * This function must reside in a file included only if is_multisite() due to
 * legacy function_exists() checks to determine if multisite is enabled.
 *
 * @since MU
 * @deprecated 3.0.0 Use is_super_admin()
 * @see is_super_admin()
 *
 * @param string $user_login Optional. Username for the user to check. Default empty.
 */
function is_site_admin($user_login = '')
{
}