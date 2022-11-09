<?php


/**
 * Validates a user request by comparing the key with the request's key.
 *
 * @since 4.9.6
 *
 * @param string $request_id ID of the request being confirmed.
 * @param string $key        Provided key to validate.
 * @return true|WP_Error True on success, WP_Error on failure.
 */
function wp_validate_user_request_key($request_id, $key)
{
}