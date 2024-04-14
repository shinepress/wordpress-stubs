<?php


/**
 * Retrieves the terms for a post.
 *
 * @since 2.8.0
 *
 * @param int             $post_id  Optional. The Post ID. Does not default to the ID of the
 *                                  global $post. Default 0.
 * @param string|string[] $taxonomy Optional. The taxonomy slug or array of slugs for which
 *                                  to retrieve terms. Default 'post_tag'.
 * @param array           $args     {
 *     Optional. Term query parameters. See WP_Term_Query::__construct() for supported arguments.
 *
 *     @type string $fields Term fields to retrieve. Default 'all'.
 * }
 * @return array|WP_Error Array of WP_Term objects on success or empty array if no terms were found.
 *                        WP_Error object if `$taxonomy` doesn't exist.
 * @phpstan-param array{
 *   fields?: string,
 *   taxonomy?: string|array,
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
 *   name?: string|array,
 *   slug?: string|array,
 *   term_taxonomy_id?: int|int[],
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
 * } $args
 */
function wp_get_post_terms($post_id = 0, $taxonomy = 'post_tag', $args = array())
{
}