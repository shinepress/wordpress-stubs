<?php


/**
 * Retrieves the list of categories for a post.
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
 *                        is 'ids', an array of category IDs. If `$fields` is 'names', an array of category names.
 *                        WP_Error object if 'category' taxonomy doesn't exist.
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
 * @phpstan-return ($post_id is 0 ? array{} : (($args is array{fields: 'names'|'slugs'} ? list<string> : ($args is array{fields: 'id=>name'|'id=>slug'} ? array<int, string> : ($args is array{fields: 'id=>parent'} ? array<int, int> : ($args is array{fields: 'all'|'all_with_object_id'} ? array<int, \WP_Term> : ($args is array{fields: 'count'} ? numeric-string : list<int>)))))|\WP_Error))
 */
function wp_get_post_categories($post_id = 0, $args = array())
{
}