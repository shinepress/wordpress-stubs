<?php


/**
 * Moves a post or page to the Trash
 *
 * If Trash is disabled, the post or page is permanently deleted.
 *
 * @since 2.9.0
 *
 * @see wp_delete_post()
 *
 * @param int $post_id Optional. Post ID. Default is the ID of the global `$post`
 *                     if `EMPTY_TRASH_DAYS` equals true.
 * @return WP_Post|false|null Post data on success, false or null on failure.
 */
function wp_trash_post($post_id = 0)
{
}