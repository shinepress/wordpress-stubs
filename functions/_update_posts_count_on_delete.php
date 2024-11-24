<?php


/**
 * Handler for updating the current site's posts count when a post is deleted.
 *
 * @since 4.0.0
 * @since 6.2.0 Added the `$post` parameter.
 *
 * @param int     $post_id Post ID.
 * @param WP_Post $post    Post object.
 * @phpstan-return void
 */
function _update_posts_count_on_delete($post_id, $post)
{
}