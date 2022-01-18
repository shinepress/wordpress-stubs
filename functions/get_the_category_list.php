<?php


/**
 * Retrieves category list for a post in either HTML list or custom format.
 *
 * Generally used for quick, delimited (e.g. comma-separated) lists of categories,
 * as part of a post entry meta.
 *
 * For a more powerful, list-based function, see wp_list_categories().
 *
 * @since 1.5.1
 *
 * @see wp_list_categories()
 *
 * @global WP_Rewrite $wp_rewrite WordPress rewrite component.
 *
 * @param string $separator Optional. Separator between the categories. By default, the links are placed
 *                          in an unordered list. An empty string will result in the default behavior.
 * @param string $parents   Optional. How to display the parents.
 * @param int    $post_id   Optional. Post ID to retrieve categories.
 * @return string Category list for a post.
 */
function get_the_category_list($separator = '', $parents = '', $post_id = \false)
{
}