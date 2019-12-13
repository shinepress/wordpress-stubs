<?php


/**
 * Create and log a user request to perform a specific action.
 *
 * Requests are stored inside a post type named `user_request` since they can apply to both
 * users on the site, or guests without a user account.
 *
 * @since 4.9.6
 *
 * @param string $email_address User email address. This can be the address of a registered or non-registered user.
 * @param string $action_name   Name of the action that is being confirmed. Required.
 * @param array  $request_data  Misc data you want to send with the verification request and pass to the actions once the request is confirmed.
 * @return int|WP_Error Returns the request ID if successful, or a WP_Error object on failure.
 */
function wp_create_user_request($email_address = '', $action_name = '', $request_data = array())
{
}