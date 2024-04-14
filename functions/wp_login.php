<?php


/**
 * Checks a users login information and logs them in if it checks out. This function is deprecated.
 *
 * Use the global $error to get the reason why the login failed. If the username
 * is blank, no error will be set, so assume blank username on that case.
 *
 * Plugins extending this function should also provide the global $error and set
 * what the error is, so that those checking the global for why there was a
 * failure can utilize it later.
 *
 * @since 1.2.2
 * @deprecated 2.5.0 Use wp_signon()
 * @see wp_signon()
 *
 * @global string $error Error when false is returned
 *
 * @param string $username   User's username
 * @param string $password   User's password
 * @param string $deprecated Not used
 * @return bool True on successful check, false on login failure.
 */
function wp_login($username, $password, $deprecated = '')
{
}