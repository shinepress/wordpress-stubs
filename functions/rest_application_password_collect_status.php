<?php


/**
 * Collects the status of authenticating with an application password.
 *
 * @since 5.6.0
 * @since 5.7.0 Added the `$app_password` parameter.
 *
 * @global WP_User|WP_Error|null $wp_rest_application_password_status
 * @global string|null $wp_rest_application_password_uuid
 *
 * @param WP_Error $user_or_error The authenticated user or error instance.
 * @param array    $app_password  The Application Password used to authenticate.
 */
function rest_application_password_collect_status($user_or_error, $app_password = array())
{
}