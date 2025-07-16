<?php


/**
 * Sets a cookie for a user who just logged in. This function is deprecated.
 *
 * @since 1.5.0
 * @deprecated 2.5.0 Use wp_set_auth_cookie()
 * @see wp_set_auth_cookie()
 *
 * @param string $username The user's username
 * @param string $password Optional. The user's password
 * @param bool $already_md5 Optional. Whether the password has already been through MD5
 * @param string $home Optional. Will be used instead of COOKIEPATH if set
 * @param string $siteurl Optional. Will be used instead of SITECOOKIEPATH if set
 * @param bool $remember Optional. Remember that the user is logged in
 */
function wp_setcookie(
    $username,
    #[\SensitiveParameter]
    $password = '',
    $already_md5 = \false,
    $home = '',
    $siteurl = '',
    $remember = \false
)
{
}