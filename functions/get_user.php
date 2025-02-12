<?php


/**
 * Retrieves user info by user ID.
 *
 * @since 6.7.0
 *
 * @param int $user_id User ID.
 *
 * @return WP_User|false WP_User object on success, false on failure.
 * @phpstan-return ($user_id is int<min, 0> ? false : \WP_User|false)
 */
function get_user($user_id)
{
}