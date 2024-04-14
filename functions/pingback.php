<?php


/**
 * Pings back the links found in a post.
 *
 * @since 0.71
 * @since 4.7.0 $post_id can be a WP_Post object.
 *
 * @param string $content Post content to check for links. If empty will retrieve from post.
 * @param int|WP_Post $post_id Post Object or ID.
 * @phpstan-return void
 */
function pingback($content, $post_id)
{
}