<?php


/**
 * Don't load all of WordPress when handling a favicon.ico request.
 *
 * Instead, send the headers for a zero-length favicon and bail.
 *
 * @since 3.0.0
 */
function wp_favicon_request()
{
}