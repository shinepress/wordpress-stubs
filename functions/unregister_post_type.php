<?php


/**
 * Unregisters a post type.
 *
 * Can not be used to unregister built-in post types.
 *
 * @since 4.5.0
 *
 * @global array $wp_post_types List of post types.
 *
 * @param string $post_type Post type to unregister.
 * @return bool|WP_Error True on success, WP_Error on failure or if the post type doesn't exist.
 */
function unregister_post_type($post_type)
{
}