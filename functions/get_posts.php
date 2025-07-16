<?php


/**
 * Retrieves an array of the latest posts, or posts matching the given criteria.
 *
 * For more information on the accepted arguments, see the
 * {@link https://developer.wordpress.org/reference/classes/wp_query/
 * WP_Query} documentation in the Developer Handbook.
 *
 * The `$ignore_sticky_posts` and `$no_found_rows` arguments are ignored by
 * this function and both are set to `true`.
 *
 * The defaults are as follows:
 *
 * @since 1.2.0
 *
 * @see WP_Query
 * @see WP_Query::parse_query()
 *
 * @param array $args {
 *     Optional. Arguments to retrieve posts. See WP_Query::parse_query() for all available arguments.
 *
 *     @type int        $numberposts      Total number of posts to retrieve. Is an alias of `$posts_per_page`
 *                                        in WP_Query. Accepts -1 for all. Default 5.
 *     @type int|string $category         Category ID or comma-separated list of IDs (this or any children).
 *                                        Is an alias of `$cat` in WP_Query. Default 0.
 *     @type int[]      $include          An array of post IDs to retrieve, sticky posts will be included.
 *                                        Is an alias of `$post__in` in WP_Query. Default empty array.
 *     @type int[]      $exclude          An array of post IDs not to retrieve. Default empty array.
 *     @type bool       $suppress_filters Whether to suppress filters. Default true.
 * }
 * @return WP_Post[]|int[] Array of post objects or post IDs.
 * @phpstan-param array{
 *   numberposts?: int,
 *   category?: int|string,
 *   include?: int[],
 *   exclude?: int[],
 *   suppress_filters?: bool,
 *   attachment_id?: int,
 *   author?: int|string,
 *   author_name?: string,
 *   author__in?: int[],
 *   author__not_in?: int[],
 *   cache_results?: bool,
 *   cat?: int|string,
 *   category__and?: int[],
 *   category__in?: int[],
 *   category__not_in?: int[],
 *   category_name?: string,
 *   comment_count?: array|int,
 *   comment_status?: string,
 *   comments_per_page?: int,
 *   date_query?: array,
 *   day?: int,
 *   exact?: bool,
 *   fields?: string,
 *   hour?: int,
 *   ignore_sticky_posts?: int|bool,
 *   m?: int,
 *   meta_key?: string|string[],
 *   meta_value?: string|string[],
 *   meta_compare?: string,
 *   meta_compare_key?: string,
 *   meta_type?: string,
 *   meta_type_key?: string,
 *   meta_query?: array,
 *   menu_order?: int,
 *   minute?: int,
 *   monthnum?: int,
 *   name?: string,
 *   nopaging?: bool,
 *   no_found_rows?: bool,
 *   offset?: int,
 *   order?: string,
 *   orderby?: string|array,
 *   p?: int,
 *   page?: int,
 *   paged?: int,
 *   page_id?: int,
 *   pagename?: string,
 *   perm?: string,
 *   ping_status?: string,
 *   post__in?: int[],
 *   post__not_in?: int[],
 *   post_mime_type?: string,
 *   post_name__in?: string[],
 *   post_parent?: int,
 *   post_parent__in?: int[],
 *   post_parent__not_in?: int[],
 *   post_type?: string|string[],
 *   post_status?: string|string[],
 *   posts_per_page?: int,
 *   posts_per_archive_page?: int,
 *   s?: string,
 *   search_columns?: string[],
 *   second?: int,
 *   sentence?: bool,
 *   suppress_filters?: bool,
 *   tag?: string,
 *   tag__and?: int[],
 *   tag__in?: int[],
 *   tag__not_in?: int[],
 *   tag_id?: int,
 *   tag_slug__and?: string[],
 *   tag_slug__in?: string[],
 *   tax_query?: array,
 *   title?: string,
 *   update_post_meta_cache?: bool,
 *   update_post_term_cache?: bool,
 *   update_menu_item_cache?: bool,
 *   lazy_load_term_meta?: bool,
 *   w?: int,
 *   year?: int,
 * } $args
 * @phpstan-return ($args is array{fields: 'id=>parent'|'ids'}&array ? array<int, int> : array<int, \WP_Post>)
 */
function get_posts($args = \null)
{
}