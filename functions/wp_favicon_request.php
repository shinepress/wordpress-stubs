<?php


/**
 * Ensures all of WordPress is not loaded when handling a favicon.ico request.
 *
 * Instead, send the headers for a zero-length favicon and bail.
 *
 * @since 3.0.0
 * @deprecated 5.4.0 Deprecated in favor of do_favicon().
 */
function wp_favicon_request()
{
}