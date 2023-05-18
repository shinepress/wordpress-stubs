<?php


/**
 * Parses a cookie into its components.
 *
 * @since 2.7.0
 *
 * @param string $cookie Authentication cookie.
 * @param string $scheme Optional. The cookie scheme to use: 'auth', 'secure_auth', or 'logged_in'.
 * @return string[]|false {
 *     Authentication cookie components. None of the components should be assumed
 *     to be valid as they come directly from a client-provided cookie value. If
 *     the cookie value is malformed, false is returned.
 *
 *     @type string $username   User's username.
 *     @type string $expiration The time the cookie expires as a UNIX timestamp.
 *     @type string $token      User's session token used.
 *     @type string $hmac       The security hash for the cookie.
 *     @type string $scheme     The cookie scheme to use.
 * }
 * @phpstan-return false|array{
 *   username: string,
 *   expiration: string,
 *   token: string,
 *   hmac: string,
 *   scheme: string,
 * }
 */
function wp_parse_auth_cookie($cookie = '', $scheme = '')
{
}