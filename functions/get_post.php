<?php


/**
 * Retrieves post data given a post ID or post object.
 *
 * See sanitize_post() for optional $filter values. Also, the parameter
 * `$post`, must be given as a variable, since it is passed by reference.
 *
 * @since 1.5.1
 *
 * @global WP_Post $post
 *
 * @param int|WP_Post|null $post   Optional. Post ID or post object. Defaults to global $post.
 * @param string           $output Optional. The required return type. One of OBJECT, ARRAY_A, or ARRAY_N, which correspond to
 *                                 a WP_Post object, an associative array, or a numeric array, respectively. Default OBJECT.
 * @param string           $filter Optional. Type of filter to apply. Accepts 'raw', 'edit', 'db',
 *                                 or 'display'. Default 'raw'.
 * @return WP_Post|array|null Type corresponding to $output on success or null on failure.
 *                            When $output is OBJECT, a `WP_Post` instance is returned.
 * @phpstan-return ($output is 'ARRAY_A' ? array<string, mixed>|null : ($output is 'ARRAY_N' ? array<int, mixed>|null : \WP_Post|null))
 */
function get_post($post = \null, $output = \OBJECT, $filter = 'raw')
{
}