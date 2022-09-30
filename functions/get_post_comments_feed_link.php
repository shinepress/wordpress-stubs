<?php


/**
 * Retrieves the permalink for the post comments feed.
 *
 * @since 2.2.0
 *
 * @param int    $post_id Optional. Post ID. Default is the ID of the global `$post`.
 * @param string $feed    Optional. Feed type. Possible values include 'rss2', 'atom'.
 *                        Default is the value of get_default_feed().
 * @return string The permalink for the comments feed for the given post.
 */
function get_post_comments_feed_link($post_id = 0, $feed = '')
{
}