<?php


/**
 * Retrieve the terms in a given taxonomy or list of taxonomies.
 *
 * You can fully inject any customizations to the query before it is sent, as
 * well as control the output with a filter.
 *
 * The {@see 'get_terms'} filter will be called when the cache has the term and will
 * pass the found term along with the array of $taxonomies and array of $args.
 * This filter is also called before the array of terms is passed and will pass
 * the array of terms, along with the $taxonomies and $args.
 *
 * The {@see 'list_terms_exclusions'} filter passes the compiled exclusions along with
 * the $args.
 *
 * The {@see 'get_terms_orderby'} filter passes the `ORDER BY` clause for the query
 * along with the $args array.
 *
 * Prior to 4.5.0, the first parameter of `get_terms()` was a taxonomy or list of taxonomies:
 *
 *     $terms = get_terms( 'post_tag', array(
 *         'hide_empty' => false,
 *     ) );
 *
 * Since 4.5.0, taxonomies should be passed via the 'taxonomy' argument in the `$args` array:
 *
 *     $terms = get_terms( array(
 *         'taxonomy' => 'post_tag',
 *         'hide_empty' => false,
 *     ) );
 *
 * @since 2.3.0
 * @since 4.2.0 Introduced 'name' and 'childless' parameters.
 * @since 4.4.0 Introduced the ability to pass 'term_id' as an alias of 'id' for the `orderby` parameter.
 *              Introduced the 'meta_query' and 'update_term_meta_cache' parameters. Converted to return
 *              a list of WP_Term objects.
 * @since 4.5.0 Changed the function signature so that the `$args` array can be provided as the first parameter.
 *              Introduced 'meta_key' and 'meta_value' parameters. Introduced the ability to order results by metadata.
 * @since 4.8.0 Introduced 'suppress_filter' parameter.
 *
 * @internal The `$deprecated` parameter is parsed for backward compatibility only.
 *
 * @param array|string $args       Optional. Array or string of arguments. See WP_Term_Query::__construct()
 *                                 for information on accepted arguments. Default empty.
 * @param array|string $deprecated Argument array, when using the legacy function parameter format. If present,
 *                                 this parameter will be interpreted as `$args`, and the first function parameter
 *                                 will be parsed as a taxonomy or array of taxonomies.
 * @return WP_Term[]|int|WP_Error Array of WP_Term instances, a count thereof,
 *                                or WP_Error if any of the taxonomies do not exist.
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
function get_terms($args = array(), $deprecated = '')
{
}