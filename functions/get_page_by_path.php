<?php


/**
 * Retrieves a page given its path.
 *
 * @since 2.1.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string       $page_path Page path.
 * @param string       $output    Optional. The required return type. One of OBJECT, ARRAY_A, or ARRAY_N, which
 *                                correspond to a WP_Post object, an associative array, or a numeric array,
 *                                respectively. Default OBJECT.
 * @param string|array $post_type Optional. Post type or array of post types. Default 'page'.
 * @return WP_Post|array|null WP_Post (or array) on success, or null on failure.
 * @phpstan-return ($output is 'ARRAY_A' ? array<string, mixed>|null : ($output is 'ARRAY_N' ? array<int, mixed>|null : \WP_Post|null))
 */
function get_page_by_path($page_path, $output = \OBJECT, $post_type = 'page')
{
}