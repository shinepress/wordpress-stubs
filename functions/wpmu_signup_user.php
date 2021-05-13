<?php


/**
 * Record user signup information for future activation.
 *
 * This function is used when user registration is open but
 * new site registration is not.
 *
 * @since MU
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string $user       The user's requested login name.
 * @param string $user_email The user's email address.
 * @param array  $meta       By default, this is an empty array.
 */
function wpmu_signup_user($user, $user_email, $meta = array())
{
}