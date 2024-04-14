<?php


/**
 * Validate a user request by comparing the key with the request's key.
 *
 * @since 4.9.6
 *
 * @param string $request_id ID of the request being confirmed.
 * @param string $key        Provided key to validate.
 * @return bool|WP_Error WP_Error on failure, true on success.
 */
function wp_validate_user_request_key($request_id, $key)
{
}