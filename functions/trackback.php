<?php


/**
 * Sends a Trackback.
 *
 * Updates database when sending trackback to prevent duplicates.
 *
 * @since 0.71
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string $trackback_url URL to send trackbacks.
 * @param string $title         Title of post.
 * @param string $excerpt       Excerpt of post.
 * @param int    $post_id       Post ID.
 * @return int|false|void Database query from update.
 */
function trackback($trackback_url, $title, $excerpt, $post_id)
{
}