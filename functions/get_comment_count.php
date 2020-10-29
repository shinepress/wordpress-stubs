<?php


/**
 * The amount of comments in a post or total comments.
 *
 * A lot like wp_count_comments(), in that they both return comment stats (albeit with different types).
 * The wp_count_comments() actually caches, but this function does not.
 *
 * @since 2.0.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int $post_id Optional. Comment amount in post if > 0, else total comments blog wide.
 * @return array The amount of spam, approved, awaiting moderation, and total comments.
 */
function get_comment_count($post_id = 0)
{
}