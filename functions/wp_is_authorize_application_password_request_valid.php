<?php


/**
 * Checks if the Authorize Application Password request is valid.
 *
 * @since 5.6.0
 * @since 6.2.0 Allow insecure HTTP connections for the local environment.
 * @since 6.3.2 Validates the success and reject URLs to prevent `javascript` pseudo protocol from being executed.
 *
 * @param array   $request {
 *     The array of request data. All arguments are optional and may be empty.
 *
 *     @type string $app_name    The suggested name of the application.
 *     @type string $app_id      A UUID provided by the application to uniquely identify it.
 *     @type string $success_url The URL the user will be redirected to after approving the application.
 *     @type string $reject_url  The URL the user will be redirected to after rejecting the application.
 * }
 * @param WP_User $user The user authorizing the application.
 * @return true|WP_Error True if the request is valid, a WP_Error object contains errors if not.
 * @phpstan-param array{
 *   app_name?: string,
 *   app_id?: string,
 *   success_url?: string,
 *   reject_url?: string,
 * } $request
 */
function wp_is_authorize_application_password_request_valid($request, $user)
{
}