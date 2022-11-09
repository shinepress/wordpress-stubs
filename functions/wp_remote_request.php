<?php


/**
 * Performs an HTTP request and returns its response.
 *
 * There are other API functions available which abstract away the HTTP method:
 *
 *  - Default 'GET'  for wp_remote_get()
 *  - Default 'POST' for wp_remote_post()
 *  - Default 'HEAD' for wp_remote_head()
 *
 * @since 2.7.0
 *
 * @see WP_Http::request() For information on default arguments.
 *
 * @param string $url  URL to retrieve.
 * @param array  $args Optional. Request arguments. Default empty array.
 * @return array|WP_Error {
 *     The response array or a WP_Error on failure.
 *
 *     @type string[]                       $headers       Array of response headers keyed by their name.
 *     @type string                         $body          Response body.
 *     @type array                          $response      {
 *         Data about the HTTP response.
 *
 *         @type int|false    $code    HTTP response code.
 *         @type string|false $message HTTP response message.
 *     }
 *     @type WP_HTTP_Cookie[]               $cookies       Array of response cookies.
 *     @type WP_HTTP_Requests_Response|null $http_response Raw HTTP response object.
 * }
 * @phpstan-return \WP_Error|array{
 *   headers: string[],
 *   body: string,
 *   response: array{
 *     code: int|false,
 *     message: string|false,
 *   },
 *   cookies: WP_HTTP_Cookie[],
 *   http_response: WP_HTTP_Requests_Response|null,
 * }
 * @phpstan-return array{headers: \Requests_Utility_CaseInsensitiveDictionary, body: string, response: array{code: int,message: string}, cookies: array<int, \WP_HTTP_Cookie>, filename: string|null, http_response: \WP_HTTP_Requests_Response}|\WP_Error
 */
function wp_remote_request($url, $args = array())
{
}