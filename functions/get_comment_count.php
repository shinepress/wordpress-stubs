<?php


/**
 * Retrieves the total comment counts for the whole site or a single post.
 *
 * Unlike wp_count_comments(), this function always returns the live comment counts without caching.
 *
 * @since 2.0.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int $post_id Optional. Restrict the comment counts to the given post. Default 0, which indicates that
 *                     comment counts for the whole site will be retrieved.
 * @return array() {
 *     The number of comments keyed by their status.
 *
 *     @type int|string $approved            The number of approved comments.
 *     @type int|string $awaiting_moderation The number of comments awaiting moderation (a.k.a. pending).
 *     @type int|string $spam                The number of spam comments.
 *     @type int|string $trash               The number of trashed comments.
 *     @type int|string $post-trashed        The number of comments for posts that are in the trash.
 *     @type int        $total_comments      The total number of non-trashed comments, including spam.
 *     @type int        $all                 The total number of pending or approved comments.
 * }
 * @phpstan-return array{
 *   approved: int|string,
 *   awaiting_moderation: int|string,
 *   spam: int|string,
 *   trash: int|string,
 *   post-trashed: int|string,
 *   total_comments: int,
 *   all: int,
 * }
 */
function get_comment_count($post_id = 0)
{
}