<?php


/**
 * Determines whether the query is for an existing single post of any post type
 * (post, attachment, page, custom post types).
 *
 * If the $post_types parameter is specified, this function will additionally
 * check if the query is for one of the Posts Types specified.
 *
 * For more information on this and similar theme functions, check out
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/
 * Conditional Tags} article in the Theme Developer Handbook.
 *
 * @see is_page()
 * @see is_single()
 *
 * @since 1.5.0
 *
 * @global WP_Query $wp_query WordPress Query object.
 *
 * @param string|array $post_types Optional. Post type or array of post types. Default empty.
 * @return bool Whether the query is for an existing single post of any of the given post types.
 */
function is_singular($post_types = '')
{
}