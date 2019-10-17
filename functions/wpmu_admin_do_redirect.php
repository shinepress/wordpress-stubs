<?php


/**
 * Redirect a user based on $_GET or $_POST arguments.
 *
 * The function looks for redirect arguments in the following order:
 * 1) $_GET['ref']
 * 2) $_POST['ref']
 * 3) $_SERVER['HTTP_REFERER']
 * 4) $_GET['redirect']
 * 5) $_POST['redirect']
 * 6) $url
 *
 * @since MU
 * @deprecated 3.3.0 Use wp_redirect()
 * @see wp_redirect()
 *
 * @param string $url Optional. Redirect URL. Default empty.
 */
function wpmu_admin_do_redirect($url = '')
{
}