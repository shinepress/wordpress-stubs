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
 * @since 6.3.0 Passing `update_term_meta_cache` argument value false by default resulting in get_terms() to not
 *              prime the term meta cache.
 *
 * @param int|int[]       $object_ids The ID(s) of the object(s) to retrieve.
 * @param string|string[] $taxonomies The taxonomy names to retrieve terms from.
 * @param array|string    $args       See WP_Term_Query::__construct() for supported arguments.
 * @return WP_Term[]|int[]|string[]|string|WP_Error Array of terms, a count thereof as a numeric string,
 *                                                  or WP_Error if any of the taxonomies do not exist.
 *                                                  See WP_Term_Query::get_terms() for more information.
 * @phpstan-param array{
 *   taxonomy?: string|string[],
 *   object_ids?: int|int[],
 *   orderby?: string,
 *   order?: string,
 *   hide_empty?: bool|int,
 *   include?: int[]|string,
 *   exclude?: int[]|string,
 *   exclude_tree?: int[]|string,
 *   number?: int|string,
 *   offset?: int,
 *   fields?: string,
 *   count?: bool,
 *   name?: string|string[],
 *   slug?: string|string[],
 *   term_taxonomy_id?: int|int[],
 *   hierarchical?: bool,
 *   search?: string,
 *   name__like?: string,
 *   description__like?: string,
 *   pad_counts?: bool,
 *   get?: string,
 *   child_of?: int,
 *   parent?: int,
 *   childless?: bool,
 *   cache_domain?: string,
 *   cache_results?: bool,
 *   update_term_meta_cache?: bool,
 *   meta_key?: string|string[],
 *   meta_value?: string|string[],
 *   meta_compare?: string,
 *   meta_compare_key?: string,
 *   meta_type?: string,
 *   meta_type_key?: string,
 *   meta_query?: array,
 * } $args See WP_Term_Query::__construct()
 * @phpstan-return ($object_ids is empty ? array{} : ($taxonomies is empty ? array{} : (($args is array{fields: 'names'|'slugs'} ? list<string> : ($args is array{fields: 'id=>name'|'id=>slug'} ? array<int, string> : ($args is array{fields: 'id=>parent'} ? array<int, int> : ($args is array{fields: 'ids'|'tt_ids'} ? list<int> : ($args is array{fields: 'count'} ? numeric-string : array<int, \WP_Term>)))))|\WP_Error)))
 */
function wp_get_object_terms($object_ids, $taxonomies, $args = array())
{
}