<?php


/**
 * Get the UTC time of the most recently modified post from WP_Query.
 *
 * If viewing a comment feed, the time of the most recently modified
 * comment will be returned.
 *
 * @global WP_Query $wp_query WordPress Query object.
 *
 * @since 5.2.0
 *
 * @param string $format Date format string to return the time in.
 * @return string|false The time in requested format, or false on failure.
 */
function get_feed_build_date($format)
{
}