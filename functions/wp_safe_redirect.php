<?php


/**
 * Performs a safe (local) redirect, using wp_redirect().
 *
 * Checks whether the $location is using an allowed host, if it has an absolute
 * path. A plugin can therefore set or remove allowed host(s) to or from the
 * list.
 *
 * If the host is not allowed, then the redirect defaults to wp-admin on the siteurl
 * instead. This prevents malicious redirects which redirect to another host,
 * but only used in a few places.
 *
 * Note: wp_safe_redirect() does not exit automatically, and should almost always be
 * followed by a call to `exit;`:
 *
 *     wp_safe_redirect( $url );
 *     exit;
 *
 * Exiting can also be selectively manipulated by using wp_safe_redirect() as a conditional
 * in conjunction with the {@see 'wp_redirect'} and {@see 'wp_redirect_location'} filters:
 *
 *     if ( wp_safe_redirect( $url ) ) {
 *         exit;
 *     }
 *
 * @since 2.3.0
 * @since 5.1.0 The return value from wp_redirect() is now passed on, and the `$x_redirect_by` parameter was added.
 *
 * @param string $location      The path or URL to redirect to.
 * @param int    $status        Optional. HTTP response status code to use. Default '302' (Moved Temporarily).
 * @param string $x_redirect_by Optional. The application doing the redirect. Default 'WordPress'.
 * @return bool False if the redirect was cancelled, true otherwise.
 */
function wp_safe_redirect($location, $status = 302, $x_redirect_by = 'WordPress')
{
}