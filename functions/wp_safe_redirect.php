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
 * @since 2.3.0
 *
 * @param string $location The path to redirect to.
 * @param int    $status   Status code to use.
 */
function wp_safe_redirect($location, $status = 302)
{
}