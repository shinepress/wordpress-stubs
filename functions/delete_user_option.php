<?php


/**
 * Deletes user option with global blog capability.
 *
 * User options are just like user metadata except that they have support for
 * global blog options. If the 'is_global' parameter is false, which it is by default,
 * it will prepend the WordPress table prefix to the option name.
 *
 * @since 3.0.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int    $user_id     User ID
 * @param string $option_name User option name.
 * @param bool   $is_global   Optional. Whether option name is global or blog specific.
 *                            Default false (blog specific).
 * @return bool True on success, false on failure.
 */
function delete_user_option($user_id, $option_name, $is_global = \false)
{
}