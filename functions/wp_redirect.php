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
 * in conjunction with the {@see 'wp_redirect'} and {@see 'wp_redirect_location'} filters:
 *
 *     if ( wp_redirect( $url ) ) {
 *         exit;
 *     }
 *
 * @since 1.5.1
 * @since 5.1.0 The `$x_redirect_by` parameter was added.
 *
 * @global bool $is_IIS
 *
 * @param string $location      The path or URL to redirect to.
 * @param int    $status        Optional. HTTP response status code to use. Default '302' (Moved Temporarily).
 * @param string $x_redirect_by Optional. The application doing the redirect. Default 'WordPress'.
 * @return bool False if the redirect was cancelled, true otherwise.
 */
function wp_redirect($location, $status = 302, $x_redirect_by = 'WordPress')
{
}