<?php


/**
 * Authenticates the user using an application password.
 *
 * @since 5.6.0
 *
 * @param WP_User|WP_Error|null $input_user WP_User or WP_Error object if a previous
 *                                          callback failed authentication.
 * @param string                $username   Username for authentication.
 * @param string                $password   Password for authentication.
 * @return WP_User|WP_Error|null WP_User on success, WP_Error on failure, null if
 *                               null is passed in and this isn't an API request.
 */
function wp_authenticate_application_password($input_user, $username, $password)
{
}