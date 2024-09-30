<?php


/**
 * Displays a tag cloud.
 *
 * Outputs a list of tags in what is called a 'tag cloud', where the size of each tag
 * is determined by how many times that particular tag has been assigned to posts.
 *
 * @since 2.3.0
 * @since 2.8.0 Added the `taxonomy` argument.
 * @since 4.8.0 Added the `show_count` argument.
 *
 * @param array|string $args {
 *     Optional. Array or string of arguments for displaying a tag cloud. See wp_generate_tag_cloud()
 *     and get_terms() for the full lists of arguments that can be passed in `$args`.
 *
 *     @type int    $number    The number of tags to display. Accepts any positive integer
 *                             or zero to return all. Default 45.
 *     @type string $link      Whether to display term editing links or term permalinks.
 *                             Accepts 'edit' and 'view'. Default 'view'.
 *     @type string $post_type The post type. Used to highlight the proper post type menu
 *                             on the linked edit page. Defaults to the first post type
 *                             associated with the taxonomy.
 *     @type bool   $echo      Whether or not to echo the return value. Default true.
 * }
 * @return void|string|string[] Void if 'echo' argument is true, or on failure. Otherwise, tag cloud
 *                              as a string or an array, depending on 'format' argument.
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
 *   topic_count_text?: array,
 *   topic_count_text_callback?: callable,
 *   topic_count_scale_callback?: callable,
 *   show_count?: bool|int,
 * } $args
 * @phpstan-return ($args is array{format: 'array'} ? array<int, string>|void : ($args is array{echo: false|0} ? string|void : void))
 */
function wp_tag_cloud($args = '')
{
}