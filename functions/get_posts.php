<?php


/**
 * Retrieve list of latest posts or posts matching criteria.
 *
 * The defaults are as follows:
 *
 * @since 1.2.0
 *
 * @see WP_Query::parse_query()
 *
 * @param array $args {
 *     Optional. Arguments to retrieve posts. See WP_Query::parse_query() for all
 *     available arguments.
 *
 *     @type int        $numberposts      Total number of posts to retrieve. Is an alias of $posts_per_page
 *                                        in WP_Query. Accepts -1 for all. Default 5.
 *     @type int|string $category         Category ID or comma-separated list of IDs (this or any children).
 *                                        Is an alias of $cat in WP_Query. Default 0.
 *     @type array      $include          An array of post IDs to retrieve, sticky posts will be included.
 *                                        Is an alias of $post__in in WP_Query. Default empty array.
 *     @type array      $exclude          An array of post IDs not to retrieve. Default empty array.
 *     @type bool       $suppress_filters Whether to suppress filters. Default true.
 * }
 * @return array List of posts.
 * @phpstan-param array{
 *   numberposts?: int,
 *   category?: int|string,
 *   include?: array,
 *   exclude?: array,
 *   suppress_filters?: bool,
 *   attachment_id?: int,
 *   author?: int|string,
 *   author_name?: string,
 *   author__in?: array,
 *   author__not_in?: array,
 *   cache_results?: bool,
 *   cat?: int|string,
 *   category__and?: array,
 *   category__in?: array,
 *   category__not_in?: array,
 *   category_name?: string,
 *   comment_count?: array|int,
 *   comment_status?: string,
 *   comments_per_page?: int,
 *   date_query?: array,
 *   day?: int,
 *   exact?: bool,
 *   fields?: string|array,
 *   hour?: int,
 *   ignore_sticky_posts?: int|bool,
 *   m?: int,
 *   meta_compare?: string,
 *   meta_key?: string,
 *   meta_query?: array,
 *   meta_value?: string,
 *   meta_value_num?: int,
 *   menu_order?: int,
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
 *   post__in?: array,
 *   post_mime_type?: string,
 *   post__not_in?: array,
 *   post_parent?: int,
 *   post_parent__in?: array,
 *   post_parent__not_in?: array,
 *   post_type?: string|array,
 *   post_status?: string|array,
 *   posts_per_page?: int,
 *   posts_per_archive_page?: int,
 *   post_name__in?: array,
 *   s?: string,
 *   second?: int,
 *   sentence?: bool,
 *   suppress_filters?: bool,
 *   tag?: string,
 *   tag__and?: array,
 *   tag__in?: array,
 *   tag__not_in?: array,
 *   tag_id?: int,
 *   tag_slug__and?: array,
 *   tag_slug__in?: array,
 *   tax_query?: array,
 *   title?: string,
 *   update_post_meta_cache?: bool,
 *   update_post_term_cache?: bool,
 *   lazy_load_term_meta?: bool,
 *   w?: int,
 *   year?: int,
 * } $args
 */
function get_posts($args = \null)
{
}