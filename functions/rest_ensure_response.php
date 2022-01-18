<?php


/**
 * Ensures a REST response is a response object (for consistency).
 *
 * This implements WP_HTTP_Response, allowing usage of `set_status`/`header`/etc
 * without needing to double-check the object. Will also allow WP_Error to indicate error
 * responses, so users should immediately check for this value.
 *
 * @since 4.4.0
 *
 * @param WP_HTTP_Response|WP_Error|mixed $response Response to check.
 * @return WP_REST_Response|mixed If response generated an error, WP_Error, if response
 *                                is already an instance, WP_HTTP_Response, otherwise
 *                                returns a new WP_REST_Response instance.
 */
function rest_ensure_response($response)
{
}