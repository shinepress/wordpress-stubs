<?php


/**
 * Retrieve list of users matching criteria.
 *
 * @since 3.1.0
 *
 * @see WP_User_Query
 *
 * @param array $args Optional. Arguments to retrieve users. See WP_User_Query::prepare_query().
 *                    for more information on accepted arguments.
 * @return array List of users.
 * @phpstan-param array{
 *   blog_id?: int,
 *   role?: string|array,
 *   role__in?: array,
 *   role__not_in?: array,
 *   meta_key?: string,
 *   meta_value?: string,
 *   meta_compare?: string,
 *   include?: array,
 *   exclude?: array,
 *   search?: string,
 *   search_columns?: array,
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
 *   nicename__in?: array,
 *   nicename__not_in?: array,
 *   login?: string,
 *   login__in?: array,
 *   login__not_in?: array,
 * } $args See WP_User_Query::prepare_query()
 */
function get_users($args = array())
{
}