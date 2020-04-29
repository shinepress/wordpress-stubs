<?php


/**
 * Filter the API response to include only a white-listed set of response object fields.
 *
 * @since 4.8.0
 *
 * @param WP_REST_Response $response Current response being served.
 * @param WP_REST_Server   $server   ResponseHandler instance (usually WP_REST_Server).
 * @param WP_REST_Request  $request  The request that was used to make current response.
 *
 * @return WP_REST_Response Response to be served, trimmed down to contain a subset of fields.
 */
function rest_filter_response_fields($response, $server, $request)
{
}