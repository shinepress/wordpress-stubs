<?php


/**
 * Send a confirmation request email to confirm an action.
 *
 * If the request is not already pending, it will be updated.
 *
 * @since 4.9.6
 *
 * @param string $request_id ID of the request created via wp_create_user_request().
 * @return true|WP_Error True on success, `WP_Error` on failure.
 */
function wp_send_user_request($request_id)
{
}