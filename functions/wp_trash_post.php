<?php


/**
 * Move a post or page to the Trash
 *
 * If trash is disabled, the post or page is permanently deleted.
 *
 * @since 2.9.0
 *
 * @see wp_delete_post()
 *
 * @param int $post_id Optional. Post ID. Default is ID of the global $post
 *                     if EMPTY_TRASH_DAYS equals true.
 * @return false|array|WP_Post|null Post data array, otherwise false.
 */
function wp_trash_post($post_id = 0)
{
}