<?php


/**
 * Retrieve a page given its title.
 *
 * @since 2.1.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string       $page_title Page title
 * @param string       $output     Optional. The required return type. One of OBJECT, ARRAY_A, or ARRAY_N, which correspond to
 *                                 a WP_Post object, an associative array, or a numeric array, respectively. Default OBJECT.
 * @param string|array $post_type  Optional. Post type or array of post types. Default 'page'.
 * @return WP_Post|array|null WP_Post (or array) on success, or null on failure.
 */
function get_page_by_title($page_title, $output = \OBJECT, $post_type = 'page')
{
}