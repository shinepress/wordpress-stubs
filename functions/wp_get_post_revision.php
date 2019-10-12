<?php


/**
 * Gets a post revision.
 *
 * @since 2.6.0
 *
 * @param int|WP_Post $post   The post ID or object.
 * @param string      $output Optional. The required return type. One of OBJECT, ARRAY_A, or ARRAY_N, which correspond to
 *                            a WP_Post object, an associative array, or a numeric array, respectively. Default OBJECT.
 * @param string      $filter Optional sanitation filter. See sanitize_post().
 * @return WP_Post|array|null WP_Post (or array) on success, or null on failure.
 */
function wp_get_post_revision(&$post, $output = \OBJECT, $filter = 'raw')
{
}