<?php


/**
 * Converts an error to a response object.
 *
 * This iterates over all error codes and messages to change it into a flat
 * array. This enables simpler client behaviour, as it is represented as a
 * list in JSON rather than an object/map.
 *
 * @since 5.7.0
 *
 * @param WP_Error $error WP_Error instance.
 *
 * @return WP_REST_Response List of associative arrays with code and message keys.
 */
function rest_convert_error_to_response($error)
{
}