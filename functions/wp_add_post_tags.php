<?php


/**
 * Adds tags to a post.
 *
 * @see wp_set_post_tags()
 *
 * @since 2.3.0
 *
 * @param int          $post_id Optional. The Post ID. Does not default to the ID of the global $post.
 * @param string|array $tags    Optional. An array of tags to set for the post, or a string of tags
 *                              separated by commas. Default empty.
 * @return array|false|WP_Error Array of affected term IDs. WP_Error or false on failure.
 */
function wp_add_post_tags($post_id = 0, $tags = '')
{
}