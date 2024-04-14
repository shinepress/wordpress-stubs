<?php


/**
 * Returns the latest revision ID and count of revisions for a post.
 *
 * @since 6.1.0
 *
 * @param int|WP_Post $post Optional. Post ID or WP_Post object. Default is global $post.
 * @return array|WP_Error {
 *     Returns associative array with latest revision ID and total count,
 *     or a WP_Error if the post does not exist or revisions are not enabled.
 *
 *     @type int $latest_id The latest revision post ID or 0 if no revisions exist.
 *     @type int $count     The total count of revisions for the given post.
 * }
 * @phpstan-return \WP_Error|array{
 *   latest_id: int,
 *   count: int,
 * }
 */
function wp_get_latest_revision_id_and_total_count($post = 0)
{
}