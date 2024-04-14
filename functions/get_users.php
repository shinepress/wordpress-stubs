<?php


/**
 * Retrieve list of users matching criteria.
 *
 * @since 3.1.0
 *
 * @see WP_User_Query
 *
 * @param array $args Optional. Arguments to retrieve users. See WP_User_Query::prepare_query()
 *                    for more information on accepted arguments.
 * @return array List of users.
 * @phpstan-param array{
 *   blog_id?: int,
 *   role?: string|array,
 *   role__in?: string[],
 *   role__not_in?: string[],
 *   meta_key?: string,
 *   meta_value?: string,
 *   meta_compare?: string,
 *   include?: int[],
 *   exclude?: int[],
 *   search?: string,
 *   search_columns?: string[],
 *   orderby?: string|array,
 *   order?: string,
 *   offset?: int,
 *   number?: int,
 *   paged?: int,
 *   count_total?: bool,
 *   fields?: string|array,
 *   who?: string,
 *   has_published_posts?: bool|array,
 *   nicename?: string,
 *   nicename__in?: string[],
 *   nicename__not_in?: string[],
 *   login?: string,
 *   login__in?: string[],
 *   login__not_in?: string[],
 * } $args See WP_User_Query::prepare_query()
 */
function get_users($args = array())
{
}