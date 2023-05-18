<?php


/**
 * Retrieves the full permalink for the current post or post ID.
 *
 * @since 1.0.0
 *
 * @param int|WP_Post $post      Optional. Post ID or post object. Default is the global `$post`.
 * @param bool        $leavename Optional. Whether to keep post name or page name. Default false.
 * @return string|false The permalink URL. False if the post does not exist.
 * @phpstan-return ($post is \WP_Post ? string : string|false)
 */
function get_permalink($post = 0, $leavename = \false)
{
}