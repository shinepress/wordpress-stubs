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
 *
 * @internal The `$deprecated` parameter is parsed for backward compatibility only.
 *
 * @global wpdb  $wpdb WordPress database abstraction object.
 * @global array $wp_filter
 *
 * @param array|string $args {
 *     Optional. Array or string of arguments to get terms.
 *
 *     @type string|array $taxonomy               Taxonomy name, or array of taxonomies, to which results should
 *                                                be limited.
 *     @type string       $orderby                Field(s) to order terms by. Accepts term fields ('name', 'slug',
 *                                                'term_group', 'term_id', 'id', 'description'), 'count' for term
 *                                                taxonomy count, 'include' to match the 'order' of the $include param,
 *                                                'meta_value', 'meta_value_num', the value of `$meta_key`, the array
 *                                                keys of `$meta_query`, or 'none' to omit the ORDER BY clause.
 *                                                Defaults to 'name'.
 *     @type string       $order                  Whether to order terms in ascending or descending order.
 *                                                Accepts 'ASC' (ascending) or 'DESC' (descending).
 *                                                Default 'ASC'.
 *     @type bool|int     $hide_empty             Whether to hide terms not assigned to any posts. Accepts
 *                                                1|true or 0|false. Default 1|true.
 *     @type array|string $include                Array or comma/space-separated string of term ids to include.
 *                                                Default empty array.
 *     @type array|string $exclude                Array or comma/space-separated string of term ids to exclude.
 *                                                If $include is non-empty, $exclude is ignored.
 *                                                Default empty array.
 *     @type array|string $exclude_tree           Array or comma/space-separated string of term ids to exclude
 *                                                along with all of their descendant terms. If $include is
 *                                                non-empty, $exclude_tree is ignored. Default empty array.
 *     @type int|string   $number                 Maximum number of terms to return. Accepts ''|0 (all) or any
 *                                                positive number. Default ''|0 (all).
 *     @type int          $offset                 The number by which to offset the terms query. Default empty.
 *     @type string       $fields                 Term fields to query for. Accepts 'all' (returns an array of complete
 *                                                term objects), 'ids' (returns an array of ids), 'id=>parent' (returns
 *                                                an associative array with ids as keys, parent term IDs as values),
 *                                                'names' (returns an array of term names), 'count' (returns the number
 *                                                of matching terms), 'id=>name' (returns an associative array with ids
 *                                                as keys, term names as values), or 'id=>slug' (returns an associative
 *                                                array with ids as keys, term slugs as values). Default 'all'.
 *     @type string|array $name                   Optional. Name or array of names to return term(s) for. Default empty.
 *     @type string|array $slug                   Optional. Slug or array of slugs to return term(s) for. Default empty.
 *     @type bool         $hierarchical           Whether to include terms that have non-empty descendants (even
 *                                                if $hide_empty is set to true). Default true.
 *     @type string       $search                 Search criteria to match terms. Will be SQL-formatted with
 *                                                wildcards before and after. Default empty.
 *     @type string       $name__like             Retrieve terms with criteria by which a term is LIKE $name__like.
 *                                                Default empty.
 *     @type string       $description__like      Retrieve terms where the description is LIKE $description__like.
 *                                                Default empty.
 *     @type bool         $pad_counts             Whether to pad the quantity of a term's children in the quantity
 *                                                of each term's "count" object variable. Default false.
 *     @type string       $get                    Whether to return terms regardless of ancestry or whether the terms
 *                                                are empty. Accepts 'all' or empty (disabled). Default empty.
 *     @type int          $child_of               Term ID to retrieve child terms of. If multiple taxonomies
 *                                                are passed, $child_of is ignored. Default 0.
 *     @type int|string   $parent                 Parent term ID to retrieve direct-child terms of. Default empty.
 *     @type bool         $childless              True to limit results to terms that have no children. This parameter
 *                                                has no effect on non-hierarchical taxonomies. Default false.
 *     @type string       $cache_domain           Unique cache key to be produced when this query is stored in an
 *                                                object cache. Default is 'core'.
 *     @type bool         $update_term_meta_cache Whether to prime meta caches for matched terms. Default true.
 *     @type array        $meta_query             Meta query clauses to limit retrieved terms by.
 *                                                See `WP_Meta_Query`. Default empty.
 *     @type string       $meta_key               Limit terms to those matching a specific metadata key. Can be used in
 *                                                conjunction with `$meta_value`.
 *     @type string       $meta_value             Limit terms to those matching a specific metadata value. Usually used
 *                                                in conjunction with `$meta_key`.
 * }
 * @param array $deprecated Argument array, when using the legacy function parameter format. If present, this
 *                          parameter will be interpreted as `$args`, and the first function parameter will
 *                          be parsed as a taxonomy or array of taxonomies.
 * @return array|int|WP_Error List of WP_Term instances and their children. Will return WP_Error, if any of $taxonomies
 *                            do not exist.
 * @phpstan-param array{
 *   taxonomy?: string|array,
 *   orderby?: string,
 *   order?: string,
 *   hide_empty?: bool|int,
 *   include?: array|string,
 *   exclude?: array|string,
 *   exclude_tree?: array|string,
 *   number?: int|string,
 *   offset?: int,
 *   fields?: string,
 *   name?: string|array,
 *   slug?: string|array,
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
 * } $args
 */
function get_terms($args = array(), $deprecated = '')
{
}