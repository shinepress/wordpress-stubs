<?php


/**
 * Updates an existing comment in the database.
 *
 * Filters the comment and makes sure certain fields are valid before updating.
 *
 * @since 2.0.0
 * @since 4.9.0 Add updating comment meta during comment update.
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param array $commentarr Contains information on the comment.
 * @return int The value 1 if the comment was updated, 0 if not updated.
 * @phpstan-return ($wp_error is false ? 0|1|false : 0|1|\WP_Error)
 */
function wp_update_comment($commentarr)
{
}