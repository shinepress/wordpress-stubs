<?php


/**
 * Retrieves the raw response from a safe HTTP request.
 *
 * This function is ideal when the HTTP request is being made to an arbitrary
 * URL. The URL, and every URL it redirects to, are validated with wp_http_validate_url()
 * to avoid Server Side Request Forgery attacks (SSRF).
 *
 * @since 3.6.0
 *
 * @see wp_remote_request() For more information on the response array format.
 * @see WP_Http::request() For default arguments information.
 * @see wp_http_validate_url() For more information about how the URL is validated.
 *
 * @link https://owasp.org/www-community/attacks/Server_Side_Request_Forgery
 *
 * @param string $url  URL to retrieve.
 * @param array  $args Optional. Request arguments. Default empty array.
 *                     See WP_Http::request() for information on accepted arguments.
 * @return array|WP_Error The response or WP_Error on failure.
 *                        See WP_Http::request() for information on return value.
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
 * @phpstan-return array{headers: \WpOrg\Requests\Utility\CaseInsensitiveDictionary, body: string, response: array{code: int, message: string}, cookies: array<int, \WP_Http_Cookie>, filename: string|null, http_response: \WP_HTTP_Requests_Response}|\WP_Error
 */
function wp_safe_remote_request($url, $args = array())
{
}