<?php


/**
 * Redirects to another page.
 *
 * Note: wp_redirect() does not exit automatically, and should almost always be
 * followed by a call to `exit;`:
 *
 *     wp_redirect( $url );
 *     exit;
 *
 * Exiting can also be selectively manipulated by using wp_redirect() as a conditional
 * in conjunction with the {@see 'wp_redirect'} and {@see 'wp_redirect_location'} hooks:
 *
 *     if ( wp_redirect( $url ) ) {
 *         exit;
 *     }
 *
 * @since 1.5.1
 *
 * @global bool $is_IIS
 *
 * @param string $location The path to redirect to.
 * @param int    $status   Status code to use.
 * @return bool False if $location is not provided, true otherwise.
 */
function wp_redirect($location, $status = 302)
{
}