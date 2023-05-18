<?php


/**
 * Populate global variables with information about the currently logged in user.
 *
 * @since 0.71
 * @deprecated 4.5.0 Use wp_get_current_user()
 * @see wp_get_current_user()
 *
 * @return bool|WP_User False on XMLRPC Request and invalid auth cookie, WP_User instance otherwise.
 */
function get_currentuserinfo()
{
}