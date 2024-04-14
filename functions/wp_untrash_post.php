<?php


/**
 * Restores a post from the Trash.
 *
 * @since 2.9.0
 * @since 5.6.0 An untrashed post is now returned to 'draft' status by default, except for
 *              attachments which are returned to their original 'inherit' status.
 *
 * @param int $post_id Optional. Post ID. Default is ID of the global `$post`.
 * @return WP_Post|false|null Post data on success, false or null on failure.
 */
function wp_untrash_post($post_id = 0)
{
}