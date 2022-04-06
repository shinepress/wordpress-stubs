<?php


/**
 * Validates whether this comment is allowed to be made.
 *
 * @since 2.0.0
 * @since 4.7.0 The `$avoid_die` parameter was added, allowing the function to
 *              return a WP_Error object instead of dying.
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param array $commentdata Contains information on the comment.
 * @param bool  $avoid_die   When true, a disallowed comment will result in the function
 *                           returning a WP_Error object, rather than executing wp_die().
 *                           Default false.
 * @return int|string|WP_Error Allowed comments return the approval status (0|1|'spam').
 *                             If `$avoid_die` is true, disallowed comments return a WP_Error.
 */
function wp_allow_comment($commentdata, $avoid_die = \false)
{
}