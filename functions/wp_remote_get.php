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
 *                     See WP_Http::request() for information on accepted arguments.
 * @return array|WP_Error The response or WP_Error on failure.
 * @phpstan-param array{
 *   method?: string,
 *   timeout?: float,
 *   redirection?: int,
 *   httpversion?: string,
 *   user-agent?: string,
 *   reject_unsafe_urls?: bool,
 *   blocking?: bool,
 *   headers?: string|array,
 *   cookies?: array,
 *   body?: string|array,
 *   compress?: bool,
 *   decompress?: bool,
 *   sslverify?: bool,
 *   sslcertificates?: string,
 *   stream?: bool,
 *   filename?: string,
 *   limit_response_size?: int,
 * } $args See WP_Http::request()
 * @phpstan-return array{headers: \WpOrg\Requests\Utility\CaseInsensitiveDictionary, body: string, response: array{code: int,message: string}, cookies: array<int, \WP_Http_Cookie>, filename: string|null, http_response: \WP_HTTP_Requests_Response}|\WP_Error
 */
function wp_remote_get($url, $args = array())
{
}