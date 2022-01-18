<?php


/**
 * Site API: WP_Site_Query class
 *
 * @package WordPress
 * @subpackage Sites
 * @since 4.6.0
 */
/**
 * Core class used for querying sites.
 *
 * @since 4.6.0
 *
 * @see WP_Site_Query::__construct() for accepted arguments.
 */
class WP_Site_Query
{
    /**
     * SQL for database query.
     *
     * @since 4.6.0
     * @var string
     */
    public $request;
    /**
     * SQL query clauses.
     *
     * @since 4.6.0
     * @var array
     */
    protected $sql_clauses = array('select' => '', 'from' => '', 'where' => array(), 'groupby' => '', 'orderby' => '', 'limits' => '');
    /**
     * Date query container.
     *
     * @since 4.6.0
     * @var object WP_Date_Query
     */
    public $date_query = \false;
    /**
     * Query vars set by the user.
     *
     * @since 4.6.0
     * @var array
     */
    public $query_vars;
    /**
     * Default values for query vars.
     *
     * @since 4.6.0
     * @var array
     */
    public $query_var_defaults;
    /**
     * List of sites located by the query.
     *
     * @since 4.6.0
     * @var array
     */
    public $sites;
    /**
     * The amount of found sites for the current query.
     *
     * @since 4.6.0
     * @var int
     */
    public $found_sites = 0;
    /**
     * The number of pages.
     *
     * @since 4.6.0
     * @var int
     */
    public $max_num_pages = 0;
    /**
     * Sets up the site query, based on the query vars passed.
     *
     * @since 4.6.0
     * @since 4.8.0 Introduced the 'lang_id', 'lang__in', and 'lang__not_in' parameters.
     *
     * @param string|array $query {
     *     Optional. Array or query string of site query parameters. Default empty.
     *
     *     @type array        $site__in          Array of site IDs to include. Default empty.
     *     @type array        $site__not_in      Array of site IDs to exclude. Default empty.
     *     @type bool         $count             Whether to return a site count (true) or array of site objects.
     *                                           Default false.
     *     @type array        $date_query        Date query clauses to limit sites by. See WP_Date_Query.
     *                                           Default null.
     *     @type string       $fields            Site fields to return. Accepts 'ids' (returns an array of site IDs)
     *                                           or empty (returns an array of complete site objects). Default empty.
     *     @type int          $ID                A site ID to only return that site. Default empty.
     *     @type int          $number            Maximum number of sites to retrieve. Default 100.
     *     @type int          $offset            Number of sites to offset the query. Used to build LIMIT clause.
     *                                           Default 0.
     *     @type bool         $no_found_rows     Whether to disable the `SQL_CALC_FOUND_ROWS` query. Default true.
     *     @type string|array $orderby           Site status or array of statuses. Accepts 'id', 'domain', 'path',
     *                                           'network_id', 'last_updated', 'registered', 'domain_length',
     *                                           'path_length', 'site__in' and 'network__in'. Also accepts false,
     *                                           an empty array, or 'none' to disable `ORDER BY` clause.
     *                                           Default 'id'.
     *     @type string       $order             How to order retrieved sites. Accepts 'ASC', 'DESC'. Default 'ASC'.
     *     @type int          $network_id        Limit results to those affiliated with a given network ID. If 0,
     *                                           include all networks. Default 0.
     *     @type array        $network__in       Array of network IDs to include affiliated sites for. Default empty.
     *     @type array        $network__not_in   Array of network IDs to exclude affiliated sites for. Default empty.
     *     @type string       $domain            Limit results to those affiliated with a given domain. Default empty.
     *     @type array        $domain__in        Array of domains to include affiliated sites for. Default empty.
     *     @type array        $domain__not_in    Array of domains to exclude affiliated sites for. Default empty.
     *     @type string       $path              Limit results to those affiliated with a given path. Default empty.
     *     @type array        $path__in          Array of paths to include affiliated sites for. Default empty.
     *     @type array        $path__not_in      Array of paths to exclude affiliated sites for. Default empty.
     *     @type int          $public            Limit results to public sites. Accepts '1' or '0'. Default empty.
     *     @type int          $archived          Limit results to archived sites. Accepts '1' or '0'. Default empty.
     *     @type int          $mature            Limit results to mature sites. Accepts '1' or '0'. Default empty.
     *     @type int          $spam              Limit results to spam sites. Accepts '1' or '0'. Default empty.
     *     @type int          $deleted           Limit results to deleted sites. Accepts '1' or '0'. Default empty.
     *     @type int          $lang_id           Limit results to a language ID. Default empty.
     *     @type array        $lang__in          Array of language IDs to include affiliated sites for. Default empty.
     *     @type array        $lang__not_in      Array of language IDs to exclude affiliated sites for. Default empty.
     *     @type string       $search            Search term(s) to retrieve matching sites for. Default empty.
     *     @type array        $search_columns    Array of column names to be searched. Accepts 'domain' and 'path'.
     *                                           Default empty array.
     *     @type bool         $update_site_cache Whether to prime the cache for found sites. Default true.
     * }
     */
    public function __construct($query = '')
    {
    }
    /**
     * Parses arguments passed to the site query with default query parameters.
     *
     * @since 4.6.0
     *
     * @see WP_Site_Query::__construct()
     *
     * @param string|array $query Array or string of WP_Site_Query arguments. See WP_Site_Query::__construct().
     */
    public function parse_query($query = '')
    {
    }
    /**
     * Sets up the WordPress query for retrieving sites.
     *
     * @since 4.6.0
     *
     * @param string|array $query Array or URL query string of parameters.
     * @return array|int List of WP_Site objects, a list of site ids when 'fields' is set to 'ids',
     *                   or the number of sites when 'count' is passed as a query var.
     */
    public function query($query)
    {
    }
    /**
     * Retrieves a list of sites matching the query vars.
     *
     * @since 4.6.0
     *
     * @return array|int List of WP_Site objects, a list of site ids when 'fields' is set to 'ids',
     *                   or the number of sites when 'count' is passed as a query var.
     */
    public function get_sites()
    {
    }
    /**
     * Used internally to get a list of site IDs matching the query vars.
     *
     * @since 4.6.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @return int|array A single count of site IDs if a count query. An array of site IDs if a full query.
     */
    protected function get_site_ids()
    {
    }
    /**
     * Populates found_sites and max_num_pages properties for the current query
     * if the limit clause was used.
     *
     * @since 4.6.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     */
    private function set_found_sites()
    {
    }
    /**
     * Used internally to generate an SQL string for searching across multiple columns.
     *
     * @since 4.6.0
     *
     * @global wpdb  $wpdb WordPress database abstraction object.
     *
     * @param string $string  Search string.
     * @param array  $columns Columns to search.
     * @return string Search SQL.
     */
    protected function get_search_sql($string, $columns)
    {
    }
    /**
     * Parses and sanitizes 'orderby' keys passed to the site query.
     *
     * @since 4.6.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param string $orderby Alias for the field to order by.
     * @return string|false Value to used in the ORDER clause. False otherwise.
     */
    protected function parse_orderby($orderby)
    {
    }
    /**
     * Parses an 'order' query variable and cast it to 'ASC' or 'DESC' as necessary.
     *
     * @since 4.6.0
     *
     * @param string $order The 'order' query variable.
     * @return string The sanitized 'order' query variable.
     */
    protected function parse_order($order)
    {
    }
}