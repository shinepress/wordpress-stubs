<?php


/**
 * Retrieves a list of sites matching requested arguments.
 *
 * @since 4.6.0
 * @since 4.8.0 Introduced the 'lang_id', 'lang__in', and 'lang__not_in' parameters.
 *
 * @see WP_Site_Query::parse_query()
 *
 * @param string|array $args Optional. Array or string of arguments. See WP_Site_Query::__construct()
 *                           for information on accepted arguments. Default empty array.
 * @return array|int List of WP_Site objects, a list of site IDs when 'fields' is set to 'ids',
 *                   or the number of sites when 'count' is passed as a query var.
 * @phpstan-param array{
 *   site__in?: int[],
 *   site__not_in?: int[],
 *   count?: bool,
 *   date_query?: array,
 *   fields?: string,
 *   ID?: int,
 *   number?: int,
 *   offset?: int,
 *   no_found_rows?: bool,
 *   orderby?: string|array,
 *   order?: string,
 *   network_id?: int,
 *   network__in?: int[],
 *   network__not_in?: int[],
 *   domain?: string,
 *   domain__in?: string[],
 *   domain__not_in?: string[],
 *   path?: string,
 *   path__in?: string[],
 *   path__not_in?: string[],
 *   public?: int,
 *   archived?: int,
 *   mature?: int,
 *   spam?: int,
 *   deleted?: int,
 *   lang_id?: int,
 *   lang__in?: string[],
 *   lang__not_in?: string[],
 *   search?: string,
 *   search_columns?: string[],
 *   update_site_cache?: bool,
 *   update_site_meta_cache?: bool,
 *   meta_query?: array,
 *   meta_key?: string,
 *   meta_value?: string,
 *   meta_type?: string,
 *   meta_compare?: string,
 * } $args See WP_Site_Query::__construct()
 */
function get_sites($args = array())
{
}