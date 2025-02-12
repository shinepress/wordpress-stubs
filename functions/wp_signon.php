<?php


/**
 * Authenticates and logs a user in with 'remember' capability.
 *
 * The credentials is an array that has 'user_login', 'user_password', and
 * 'remember' indices. If the credentials is not given, then the log in form
 * will be assumed and used if set.
 *
 * The various authentication cookies will be set by this function and will be
 * set for a longer period depending on if the 'remember' credential is set to
 * true.
 *
 * Note: wp_signon() doesn't handle setting the current user. This means that if the
 * function is called before the {@see 'init'} hook is fired, is_user_logged_in() will
 * evaluate as false until that point. If is_user_logged_in() is needed in conjunction
 * with wp_signon(), wp_set_current_user() should be called explicitly.
 *
 * @since 2.5.0
 *
 * @global string $auth_secure_cookie
 * @global wpdb   $wpdb               WordPress database abstraction object.
 *
 * @param array       $credentials {
 *     Optional. User info in order to sign on.
 *
 *     @type string $user_login    Username.
 *     @type string $user_password User password.
 *     @type bool   $remember      Whether to 'remember' the user. Increases the time
 *                                 that the cookie will be kept. Default false.
 * }
 * @param string|bool $secure_cookie Optional. Whether to use secure cookie.
 * @return WP_User|WP_Error WP_User on success, WP_Error on failure.
 * @phpstan-param array{
 *   user_login?: string,
 *   user_password?: string,
 *   remember?: bool,
 * } $credentials
 */
function wp_signon($credentials = array(), $secure_cookie = '')
{
}