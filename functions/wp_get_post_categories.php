<?php


/**
 * Retrieve the list of categories for a post.
 *
 * Compatibility layer for themes and plugins. Also an easy layer of abstraction
 * away from the complexity of the taxonomy layer.
 *
 * @since 2.1.0
 *
 * @see wp_get_object_terms()
 *
 * @param int   $post_id Optional. The Post ID. Does not default to the ID of the
 *                       global $post. Default 0.
 * @param array $args    Optional. Category query parameters. Default empty array.
 *                       See WP_Term_Query::__construct() for supported arguments.
 * @return array|WP_Error List of categories. If the `$fields` argument passed via `$args` is 'all' or
 *                        'all_with_object_id', an array of WP_Term objects will be returned. If `$fields`
 *                        is 'ids', an array of category ids. If `$fields` is 'names', an array of category names.
 *                        WP_Error object if 'category' taxonomy doesn't exist.
 */
function wp_get_post_categories($post_id = 0, $args = array())
{
}