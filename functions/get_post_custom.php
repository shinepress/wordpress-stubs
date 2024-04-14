<?php


/**
 * Retrieve post meta fields, based on post ID.
 *
 * The post meta fields are retrieved from the cache where possible,
 * so the function is optimized to be called more than once.
 *
 * @since 1.2.0
 *
 * @param int $post_id Optional. Post ID. Default is the ID of the global `$post`.
 * @return array Post meta for the given post.
 */
function get_post_custom($post_id = 0)
{
}