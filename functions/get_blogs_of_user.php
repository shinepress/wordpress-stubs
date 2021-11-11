<?php


/**
 * Get the sites a user belongs to.
 *
 * @since 3.0.0
 * @since 4.7.0 Converted to use `get_sites()`.
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int  $user_id User ID
 * @param bool $all     Whether to retrieve all sites, or only sites that are not
 *                      marked as deleted, archived, or spam.
 * @return array A list of the user's sites. An empty array if the user doesn't exist
 *               or belongs to no sites.
 */
function get_blogs_of_user($user_id, $all = \false)
{
}