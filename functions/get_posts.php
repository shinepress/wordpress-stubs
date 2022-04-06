<?php


/**
 * Retrieves an array of the latest posts, or posts matching the given criteria.
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
 * @return WP_Post[]|int[] Array of post objects or post IDs.
 * @phpstan-param array{
 *   numberposts?: int,
 *   category?: int|string,
 *   include?: array,
 *   exclude?: array,
 *   suppress_filters?: bool,
 * } $args
 */
function get_posts($args = \null)
{
}