<?php


/**
 * Displays the Log In/Out link.
 *
 * Displays a link, which allows users to navigate to the Log In page to log in
 * or log out depending on whether they are currently logged in.
 *
 * @since 1.5.0
 *
 * @param string $redirect Optional path to redirect to on login/logout.
 * @param bool   $echo     Default to echo and not return the link.
 * @return void|string Void if `$echo` argument is true, log in/out link if `$echo` is false.
 * @phpstan-return ($display is true ? void : string)
 */
function wp_loginout($redirect = '', $echo = \true)
{
}