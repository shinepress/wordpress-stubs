<?php


/**
 * Retrieve a single cookie by name from the raw response.
 *
 * @since 4.4.0
 *
 * @param array|WP_Error $response HTTP response.
 * @param string         $name     The name of the cookie to retrieve.
 * @return WP_Http_Cookie|string The `WP_Http_Cookie` object. Empty string if the cookie isn't present in the response.
 */
function wp_remote_retrieve_cookie($response, $name)
{
}