<?php


/**
 * Check if the current post has any of given category.
 *
 * @since 3.1.0
 *
 * @param string|int|array $category Optional. The category name/term_id/slug or array of them to check for.
 * @param int|object       $post     Optional. Post to check instead of the current post.
 * @return bool True if the current post has any of the given categories (or any category, if no category specified).
 */
function has_category($category = '', $post = \null)
{
}