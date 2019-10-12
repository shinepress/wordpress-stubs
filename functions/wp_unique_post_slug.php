<?php


/**
 * Computes a unique slug for the post, when given the desired slug and some post details.
 *
 * @since 2.8.0
 *
 * @global wpdb       $wpdb WordPress database abstraction object.
 * @global WP_Rewrite $wp_rewrite
 *
 * @param string $slug        The desired slug (post_name).
 * @param int    $post_ID     Post ID.
 * @param string $post_status No uniqueness checks are made if the post is still draft or pending.
 * @param string $post_type   Post type.
 * @param int    $post_parent Post parent ID.
 * @return string Unique slug for the post, based on $post_name (with a -1, -2, etc. suffix)
 */
function wp_unique_post_slug($slug, $post_ID, $post_status, $post_type, $post_parent)
{
}