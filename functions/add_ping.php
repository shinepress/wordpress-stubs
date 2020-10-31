<?php


//
// Comment, trackback, and pingback functions.
//
/**
 * Add a URL to those already pinged.
 *
 * @since 1.5.0
 * @since 4.7.0 `$post_id` can be a WP_Post object.
 * @since 4.7.0 `$uri` can be an array of URIs.
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int|WP_Post  $post_id Post object or ID.
 * @param string|array $uri     Ping URI or array of URIs.
 * @return int|false How many rows were updated.
 */
function add_ping($post_id, $uri)
{
}