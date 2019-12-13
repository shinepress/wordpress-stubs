<?php


/**
 * Checks whether comment flooding is occurring.
 *
 * Won't run, if current user can manage options, so to not block
 * administrators.
 *
 * @since 4.7.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param bool   $is_flood  Is a comment flooding occurring?
 * @param string $ip        Comment IP.
 * @param string $email     Comment author email address.
 * @param string $date      MySQL time string.
 * @param bool   $avoid_die When true, a disallowed comment will result in the function
 *                          returning a WP_Error object, rather than executing wp_die().
 *                          Default false.
 * @return bool Whether comment flooding is occurring.
 */
function wp_check_comment_flood($is_flood, $ip, $email, $date, $avoid_die = \false)
{
}