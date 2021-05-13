<?php


/**
 * Generates authentication cookie contents.
 *
 * @since 2.5.0
 * @since 4.0.0 The `$token` parameter was added.
 *
 * @param int    $user_id    User ID.
 * @param int    $expiration The time the cookie expires as a UNIX timestamp.
 * @param string $scheme     Optional. The cookie scheme to use: 'auth', 'secure_auth', or 'logged_in'.
 *                           Default 'auth'.
 * @param string $token      User's session token to use for this cookie.
 * @return string Authentication cookie contents. Empty string if user does not exist.
 */
function wp_generate_auth_cookie($user_id, $expiration, $scheme = 'auth', $token = '')
{
}