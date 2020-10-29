<?php


/**
 * Performs an HTTP request using the GET method and returns its response.
 *
 * @since 2.7.0
 *
 * @see wp_remote_request() For more information on the response array format.
 * @see WP_Http::request() For default arguments information.
 *
 * @param string $url  URL to retrieve.
 * @param array  $args Optional. Request arguments. Default empty array.
 * @return array|WP_Error The response or WP_Error on failure.
 */
function wp_remote_get($url, $args = array())
{
}