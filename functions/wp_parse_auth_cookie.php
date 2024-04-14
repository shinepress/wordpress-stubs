<?php


/**
 * Parses a cookie into its components.
 *
 * @since 2.7.0
 *
 * @param string $cookie Authentication cookie.
 * @param string $scheme Optional. The cookie scheme to use: 'auth', 'secure_auth', or 'logged_in'.
 * @return string[]|false Authentication cookie components.
 * @phpstan-param 'auth'|'secure_auth'|'logged_in' $scheme
 */
function wp_parse_auth_cookie($cookie = '', $scheme = '')
{
}