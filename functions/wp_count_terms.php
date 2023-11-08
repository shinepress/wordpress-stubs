<?php


/**
 * Counts how many terms are in taxonomy.
 *
 * Default $args is 'hide_empty' which can be 'hide_empty=true' or array('hide_empty' => true).
 *
 * @since 2.3.0
 * @since 5.6.0 Changed the function signature so that the `$args` array can be provided as the first parameter.
 *
 * @internal The `$deprecated` parameter is parsed for backward compatibility only.
 *
 * @param array|string $args       Optional. Array or string of arguments. See WP_Term_Query::__construct()
 *                                 for information on accepted arguments. Default empty array.
 * @param array|string $deprecated Optional. Argument array, when using the legacy function parameter format.
 *                                 If present, this parameter will be interpreted as `$args`, and the first
 *                                 function parameter will be parsed as a taxonomy or array of taxonomies.
 *                                 Default empty.
 * @return string|WP_Error Numeric string containing the number of terms in that
 *                         taxonomy or WP_Error if the taxonomy does not exist.
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
 */
function wp_count_terms($args = array(), $deprecated = '')
{
}