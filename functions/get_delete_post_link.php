<?php


/**
 * Retrieves the delete posts link for post.
 *
 * Can be used within the WordPress loop or outside of it, with any post type.
 *
 * @since 2.9.0
 *
 * @param int|WP_Post $id           Optional. Post ID or post object. Default is the global `$post`.
 * @param string      $deprecated   Not used.
 * @param bool        $force_delete Optional. Whether to bypass trash and force deletion. Default false.
 * @return string|void The delete post link URL for the given post.
 */
function get_delete_post_link($id = 0, $deprecated = '', $force_delete = \false)
{
}