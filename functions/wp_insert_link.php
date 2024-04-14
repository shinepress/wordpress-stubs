<?php


/**
 * Inserts/updates links into/in the database.
 *
 * @since 2.0.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param array $linkdata Elements that make up the link to insert.
 * @param bool  $wp_error Optional. Whether to return a WP_Error object on failure. Default false.
 * @return int|WP_Error Value 0 or WP_Error on failure. The link ID on success.
 * @phpstan-return ($wp_error is false ? 0|positive-int : positive-int|\WP_Error)
 */
function wp_insert_link($linkdata, $wp_error = \false)
{
}