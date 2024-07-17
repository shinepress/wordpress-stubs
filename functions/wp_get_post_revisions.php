<?php


/**
 * Returns all revisions of specified post.
 *
 * @since 2.6.0
 *
 * @see get_children()
 *
 * @param int|WP_Post $post Optional. Post ID or WP_Post object. Default is global `$post`.
 * @param array|null  $args Optional. Arguments for retrieving post revisions. Default null.
 * @return WP_Post[]|int[] Array of revision objects or IDs, or an empty array if none.
 */
function wp_get_post_revisions($post = 0, $args = \null)
{
}