<?php


/**
 * Pings back the links found in a post.
 *
 * @since 0.71
 * @since 4.7.0 `$post` can be a WP_Post object.
 * @since 6.8.0 Returns an array of pingback statuses indexed by link.
 *
 * @param string      $content Post content to check for links. If empty will retrieve from post.
 * @param int|WP_Post $post    Post ID or object.
 * @return array<string, bool> An array of pingback statuses indexed by link.
 */
function pingback($content, $post)
{
}