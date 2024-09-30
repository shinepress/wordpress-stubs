<?php


/**
 * Retrieves the tags for a post.
 *
 * There is only one default for this function, called 'fields' and by default
 * is set to 'all'. There are other defaults that can be overridden in
 * wp_get_object_terms().
 *
 * @since 2.3.0
 *
 * @param int   $post_id Optional. The Post ID. Does not default to the ID of the
 *                       global $post. Default 0.
 * @param array $args    Optional. Tag query parameters. Default empty array.
 *                       See WP_Term_Query::__construct() for supported arguments.
 * @return array|WP_Error Array of WP_Term objects on success or empty array if no tags were found.
 *                        WP_Error object if 'post_tag' taxonomy doesn't exist.
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
 * @phpstan-return ($post_id is 0 ? array{} : (($args is array{fields: 'names'|'slugs'} ? list<string> : ($args is array{fields: 'id=>name'|'id=>slug'} ? array<int, string> : ($args is array{fields: 'id=>parent'} ? array<int, int> : ($args is array{fields: 'ids'|'tt_ids'} ? list<int> : ($args is array{fields: 'count'} ? numeric-string : array<int, \WP_Term>)))))|\WP_Error))
 */
function wp_get_post_tags($post_id = 0, $args = array())
{
}