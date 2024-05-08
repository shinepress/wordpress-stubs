<?php


/**
 * Hooks into the REST API output to print XML instead of JSON.
 *
 * This is only done for the oEmbed API endpoint,
 * which supports both formats.
 *
 * @access private
 * @since 4.4.0
 *
 * @param bool             $served  Whether the request has already been served.
 * @param WP_HTTP_Response $result  Result to send to the client. Usually a `WP_REST_Response`.
 * @param WP_REST_Request  $request Request used to generate the response.
 * @param WP_REST_Server   $server  Server instance.
 * @return true
 */
function _oembed_rest_pre_serve_request($served, $result, $request, $server)
{
}