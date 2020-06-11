<?php


/**
 * Check whether a usermeta key has to do with the current blog.
 *
 * @since MU
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string $key
 * @param int    $user_id Optional. Defaults to current user.
 * @param int    $blog_id Optional. Defaults to current blog.
 * @return bool
 */
function is_user_option_local($key, $user_id = 0, $blog_id = 0)
{
}