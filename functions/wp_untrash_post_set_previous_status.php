<?php


/**
 * Filter callback which sets the status of an untrashed post to its previous status.
 *
 * This can be used as a callback on the `wp_untrash_post_status` filter.
 *
 * @since 5.6.0
 *
 * @param string $new_status      The new status of the post being restored.
 * @param int    $post_id         The ID of the post being restored.
 * @param string $previous_status The status of the post at the point where it was trashed.
 * @return string The new status of the post.
 */
function wp_untrash_post_set_previous_status($new_status, $post_id, $previous_status)
{
}