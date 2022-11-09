<?php


/**
 * Determines whether a post status is considered "viewable".
 *
 * For built-in post statuses such as publish and private, the 'public' value will be evaluated.
 * For all others, the 'publicly_queryable' value will be used.
 *
 * @since 5.7.0
 * @since 5.9.0 Added `is_post_status_viewable` hook to filter the result.
 *
 * @param string|stdClass $post_status Post status name or object.
 * @return bool Whether the post status should be considered viewable.
 */
function is_post_status_viewable($post_status)
{
}