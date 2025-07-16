<?php


/**
 * Deletes child font faces when a font family is deleted.
 *
 * @access private
 * @since 6.5.0
 *
 * @param int     $post_id Post ID.
 * @param WP_Post $post    Post object.
 * @phpstan-return void
 */
function _wp_after_delete_font_family($post_id, $post)
{
}