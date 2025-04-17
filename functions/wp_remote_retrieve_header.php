<?php


/**
 * Retrieves a single header by name from the raw response.
 *
 * @since 2.7.0
 *
 * @param array|WP_Error $response HTTP response.
 * @param string         $header   Header name to retrieve value from.
 * @return array|string The header(s) value(s). Array if multiple headers with the same name are retrieved.
 *                      Empty string if incorrect parameter given, or if the header doesn't exist.
 */
function wp_remote_retrieve_header($response, $header)
{
}