<?php


/**
 * Saves revisions for a post after all changes have been made.
 *
 * @since 6.4.0
 *
 * @param int     $post_id The post id that was inserted.
 * @param WP_Post $post    The post object that was inserted.
 * @param bool    $update  Whether this insert is updating an existing post.
 * @phpstan-return void
 */
function wp_save_post_revision_on_insert($post_id, $post, $update)
{
}