<?php


/**
 * Set categories for a post.
 *
 * If the post categories parameter is not set, then the default category is
 * going used.
 *
 * @since 2.1.0
 *
 * @param int       $post_ID         Optional. The Post ID. Does not default to the ID
 *                                   of the global $post. Default 0.
 * @param array|int $post_categories Optional. List of categories or ID of category.
 *                                   Default empty array.
 * @param bool      $append         If true, don't delete existing categories, just add on.
 *                                  If false, replace the categories with the new categories.
 * @return array|false|WP_Error Array of term taxonomy IDs of affected categories. WP_Error or false on failure.
 */
function wp_set_post_categories($post_ID = 0, $post_categories = array(), $append = \false)
{
}