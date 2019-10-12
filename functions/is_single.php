<?php


/**
 * Determines whether the query is for an existing single post.
 *
 * Works for any post type, except attachments and pages
 *
 * If the $post parameter is specified, this function will additionally
 * check if the query is for one of the Posts specified.
 *
 * For more information on this and similar theme functions, check out
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/
 * Conditional Tags} article in the Theme Developer Handbook.
 *
 * @see is_page()
 * @see is_singular()
 *
 * @since 1.5.0
 *
 * @global WP_Query $wp_query Global WP_Query instance.
 *
 * @param int|string|array $post Optional. Post ID, title, slug, or array of such. Default empty.
 * @return bool Whether the query is for an existing single post.
 */
function is_single($post = '')
{
}