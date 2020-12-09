<?php


/**
 * Retrieves the full permalink for the current post or post ID.
 *
 * This function is an alias for get_permalink().
 *
 * @since 3.9.0
 *
 * @see get_permalink()
 *
 * @param int|WP_Post $post      Optional. Post ID or post object. Default is the global `$post`.
 * @param bool        $leavename Optional. Whether to keep post name or page name. Default false.
 * @return string|false The permalink URL or false if post does not exist.
 */
function get_the_permalink($post = 0, $leavename = \false)
{
}