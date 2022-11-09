<?php


/**
 * Displays a tag cloud.
 *
 * @since 2.3.0
 * @since 4.8.0 Added the `show_count` argument.
 *
 * @param array|string $args {
 *     Optional. Array or string of arguments for displaying a tag cloud. See wp_generate_tag_cloud()
 *     and get_terms() for the full lists of arguments that can be passed in `$args`.
 *
 *     @type int    $number    The number of tags to display. Accepts any positive integer
 *                             or zero to return all. Default 0 (all tags).
 *     @type string $link      Whether to display term editing links or term permalinks.
 *                             Accepts 'edit' and 'view'. Default 'view'.
 *     @type string $post_type The post type. Used to highlight the proper post type menu
 *                             on the linked edit page. Defaults to the first post type
 *                             associated with the taxonomy.
 *     @type bool   $echo      Whether or not to echo the return value. Default true.
 * }
 * @return void|array Generated tag cloud, only if no failures and 'array' is set for the 'format' argument.
 *                    Otherwise, this function outputs the tag cloud.
 * @phpstan-param array{
 *   number?: int,
 *   link?: string,
 *   post_type?: string,
 *   echo?: bool,
 *   smallest?: int,
 *   largest?: int,
 *   unit?: string,
 *   number?: int,
 *   format?: string,
 *   separator?: string,
 *   orderby?: string,
 *   order?: string,
 *   filter?: int|bool,
 *   topic_count_text?: string,
 *   topic_count_text_callback?: callable,
 *   topic_count_scale_callback?: callable,
 *   show_count?: bool|int,
 * } $args
 */
function wp_tag_cloud($args = '')
{
}