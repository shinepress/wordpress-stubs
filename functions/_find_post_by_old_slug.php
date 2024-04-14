<?php


/**
 * Find the post ID for redirecting an old slug.
 *
 * @see wp_old_slug_redirect()
 *
 * @since 4.9.3
 * @access private
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string $post_type The current post type based on the query vars.
 * @return int The Post ID.
 */
function _find_post_by_old_slug($post_type)
{
}