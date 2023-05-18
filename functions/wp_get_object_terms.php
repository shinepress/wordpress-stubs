<?php


/**
 * Retrieves the terms associated with the given object(s), in the supplied taxonomies.
 *
 * @since 2.3.0
 * @since 4.2.0 Added support for 'taxonomy', 'parent', and 'term_taxonomy_id' values of `$orderby`.
 *              Introduced `$parent` argument.
 * @since 4.4.0 Introduced `$meta_query` and `$update_term_meta_cache` arguments. When `$fields` is 'all' or
 *              'all_with_object_id', an array of `WP_Term` objects will be returned.
 * @since 4.7.0 Refactored to use WP_Term_Query, and to support any WP_Term_Query arguments.
 *
 * @param int|int[]       $object_ids The ID(s) of the object(s) to retrieve.
 * @param string|string[] $taxonomies The taxonomy names to retrieve terms from.
 * @param array|string    $args       See WP_Term_Query::__construct() for supported arguments.
 * @return WP_Term[]|WP_Error Array of terms or empty array if no terms found.
 *                            WP_Error if any of the taxonomies don't exist.
 * @phpstan-param array{
 *   taxonomy?: string|array,
 *   object_ids?: int|array,
 *   orderby?: string,
 *   order?: string,
 *   hide_empty?: bool|int,
 *   include?: array|string,
 *   exclude?: array|string,
 *   exclude_tree?: array|string,
 *   number?: int|string,
 *   offset?: int,
 *   fields?: string,
 *   count?: bool,
 *   name?: string|array,
 *   slug?: string|array,
 *   term_taxonomy_id?: int|array,
 *   hierarchical?: bool,
 *   search?: string,
 *   name__like?: string,
 *   description__like?: string,
 *   pad_counts?: bool,
 *   get?: string,
 *   child_of?: int,
 *   parent?: int|string,
 *   childless?: bool,
 *   cache_domain?: string,
 *   update_term_meta_cache?: bool,
 *   meta_query?: array,
 *   meta_key?: string,
 *   meta_value?: string,
 *   meta_type?: string,
 *   meta_compare?: string,
 * } $args See WP_Term_Query::__construct()
 */
function wp_get_object_terms($object_ids, $taxonomies, $args = array())
{
}