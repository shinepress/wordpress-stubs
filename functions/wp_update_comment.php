<?php


/**
 * Updates an existing comment in the database.
 *
 * Filters the comment and makes sure certain fields are valid before updating.
 *
 * @since 2.0.0
 * @since 4.9.0 Add updating comment meta during comment update.
 * @since 5.5.0 The `$wp_error` parameter was added.
 * @since 5.5.0 The return values for an invalid comment or post ID
 *              were changed to false instead of 0.
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param array $commentarr Contains information on the comment.
 * @param bool  $wp_error   Optional. Whether to return a WP_Error on failure. Default false.
 * @return int|false|WP_Error The value 1 if the comment was updated, 0 if not updated.
 *                            False or a WP_Error object on failure.
 * @phpstan-return ($wp_error is false ? 0|1|false : 0|1|\WP_Error)
 */
function wp_update_comment($commentarr, $wp_error = \false)
{
}