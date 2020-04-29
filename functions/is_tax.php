<?php


/**
 * Determines whether the query is for an existing custom taxonomy archive page.
 *
 * If the $taxonomy parameter is specified, this function will additionally
 * check if the query is for that specific $taxonomy.
 *
 * If the $term parameter is specified in addition to the $taxonomy parameter,
 * this function will additionally check if the query is for one of the terms
 * specified.
 * 
 * For more information on this and similar theme functions, check out
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/ 
 * Conditional Tags} article in the Theme Developer Handbook.
 *
 * @since 2.5.0
 *
 * @global WP_Query $wp_query Global WP_Query instance.
 *
 * @param string|array     $taxonomy Optional. Taxonomy slug or slugs.
 * @param int|string|array $term     Optional. Term ID, name, slug or array of Term IDs, names, and slugs.
 * @return bool True for custom taxonomy archive pages, false for built-in taxonomies (category and tag archives).
 */
function is_tax($taxonomy = '', $term = '')
{
}