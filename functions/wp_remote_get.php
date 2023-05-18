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
 * @phpstan-return array{headers: \Requests_Utility_CaseInsensitiveDictionary, body: string, response: array{code: int,message: string}, cookies: array<int, \WP_HTTP_Cookie>, filename: string|null, http_response: \WP_HTTP_Requests_Response}|\WP_Error
 */
function wp_remote_get($url, $args = array())
{
}