<?php


/**
 * Authenticates the user using the WordPress auth cookie.
 *
 * @since 2.8.0
 *
 * @global string $auth_secure_cookie
 *
 * @param WP_User|WP_Error|null $user     WP_User or WP_Error object from a previous callback. Default null.
 * @param string                $username Username. If not empty, cancels the cookie authentication.
 * @param string                $password Password. If not empty, cancels the cookie authentication.
 * @return WP_User|WP_Error WP_User on success, WP_Error on failure.
 */
function wp_authenticate_cookie($user, $username, $password)
{
}