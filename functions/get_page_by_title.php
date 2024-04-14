<?php


/**
 * Retrieves a page given its title.
 *
 * If more than one post uses the same title, the post with the smallest ID will be returned.
 * Be careful: in case of more than one post having the same title, it will check the oldest
 * publication date, not the smallest ID.
 *
 * Because this function uses the MySQL '=' comparison, $page_title will usually be matched
 * as case-insensitive with default collation.
 *
 * @since 2.1.0
 * @since 3.0.0 The `$post_type` parameter was added.
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string       $page_title Page title.
 * @param string       $output     Optional. The required return type. One of OBJECT, ARRAY_A, or ARRAY_N, which
 *                                 correspond to a WP_Post object, an associative array, or a numeric array,
 *                                 respectively. Default OBJECT.
 * @param string|array $post_type  Optional. Post type or array of post types. Default 'page'.
 * @return WP_Post|array|null WP_Post (or array) on success, or null on failure.
 */
function get_page_by_title($page_title, $output = \OBJECT, $post_type = 'page')
{
}