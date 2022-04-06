<?php


/**
 * Retrieve user meta field for a user.
 *
 * @since 3.0.0
 *
 * @link https://developer.wordpress.org/reference/functions/get_user_meta/
 *
 * @param int    $user_id User ID.
 * @param string $key     Optional. The meta key to retrieve. By default,
 *                        returns data for all keys.
 * @param bool   $single  Optional. Whether to return a single value.
 *                        This parameter has no effect if $key is not specified.
 *                        Default false.
 * @return mixed An array if $single is false. The value of meta data field
 *               if $single is true. False for an invalid $user_id.
 */
function get_user_meta($user_id, $key = '', $single = \false)
{
}