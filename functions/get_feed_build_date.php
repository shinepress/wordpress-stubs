<?php


/*
 * Get the timestamp of the most recently modified post from WP_Query.
 *
 * If viewing a comment feed, the timestamp of the most recently modified
 * comment will be returned.
 *
 * @global WP_Query  $wp_query The global WP_Query object.
 *
 * @since 5.2.0
 *
 * @param string $format Format of the timestamp to return, passed to mysql2date.
 *
 * @return string The timestamp.
 */
function get_feed_build_date($format)
{
}