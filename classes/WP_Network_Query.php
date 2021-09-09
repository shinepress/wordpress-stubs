<?php


/**
 * Network API: WP_Network_Query class
 *
 * @package WordPress
 * @subpackage Multisite
 * @since 4.6.0
 */
/**
 * Core class used for querying networks.
 *
 * @since 4.6.0
 *
 * @see WP_Network_Query::__construct() for accepted arguments.
 */
class WP_Network_Query
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
     * List of networks located by the query.
     *
     * @since 4.6.0
     * @var array
     */
    public $networks;
    /**
     * The amount of found networks for the current query.
     *
     * @since 4.6.0
     * @var int
     */
    public $found_networks = 0;
    /**
     * The number of pages.
     *
     * @since 4.6.0
     * @var int
     */
    public $max_num_pages = 0;
    /**
     * Constructor.
     *
     * Sets up the network query, based on the query vars passed.
     *
     * @since 4.6.0
     *
     * @param string|array $query {
     *     Optional. Array or query string of network query parameters. Default empty.
     *
     *     @type array        $network__in          Array of network IDs to include. Default empty.
     *     @type array        $network__not_in      Array of network IDs to exclude. Default empty.
     *     @type bool         $count                Whether to return a network count (true) or array of network objects.
     *                                              Default false.
     *     @type string       $fields               Network fields to return. Accepts 'ids' (returns an array of network IDs)
     *                                              or empty (returns an array of complete network objects). Default empty.
     *     @type int          $number               Maximum number of networks to retrieve. Default empty (no limit).
     *     @type int          $offset               Number of networks to offset the query. Used to build LIMIT clause.
     *                                              Default 0.
     *     @type bool         $no_found_rows        Whether to disable the `SQL_CALC_FOUND_ROWS` query. Default true.
     *     @type string|array $orderby              Network status or array of statuses. Accepts 'id', 'domain', 'path',
     *                                              'domain_length', 'path_length' and 'network__in'. Also accepts false,
     *                                              an empty array, or 'none' to disable `ORDER BY` clause. Default 'id'.
     *     @type string       $order                How to order retrieved networks. Accepts 'ASC', 'DESC'. Default 'ASC'.
     *     @type string       $domain               Limit results to those affiliated with a given domain. Default empty.
     *     @type array        $domain__in           Array of domains to include affiliated networks for. Default empty.
     *     @type array        $domain__not_in       Array of domains to exclude affiliated networks for. Default empty.
     *     @type string       $path                 Limit results to those affiliated with a given path. Default empty.
     *     @type array        $path__in             Array of paths to include affiliated networks for. Default empty.
     *     @type array        $path__not_in         Array of paths to exclude affiliated networks for. Default empty.
     *     @type string       $search               Search term(s) to retrieve matching networks for. Default empty.
     *     @type bool         $update_network_cache Whether to prime the cache for found networks. Default true.
     * }
     */
    public function __construct($query = '')
    {
    }
    /**
     * Parses arguments passed to the network query with default query parameters.
     *
     * @since 4.6.0
     *
     * @param string|array $query WP_Network_Query arguments. See WP_Network_Query::__construct()
     */
    public function parse_query($query = '')
    {
    }
    /**
     * Sets up the WordPress query for retrieving networks.
     *
     * @since 4.6.0
     *
     * @param string|array $query Array or URL query string of parameters.
     * @return array|int List of WP_Network objects, a list of network ids when 'fields' is set to 'ids',
     *                   or the number of networks when 'count' is passed as a query var.
     */
    public function query($query)
    {
    }
    /**
     * Gets a list of networks matching the query vars.
     *
     * @since 4.6.0
     *
     * @return array|int List of WP_Network objects, a list of network ids when 'fields' is set to 'ids',
     *                   or the number of networks when 'count' is passed as a query var.
     */
    public function get_networks()
    {
    }
    /**
     * Used internally to get a list of network IDs matching the query vars.
     *
     * @since 4.6.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @return int|array A single count of network IDs if a count query. An array of network IDs if a full query.
     */
    protected function get_network_ids()
    {
    }
    /**
     * Populates found_networks and max_num_pages properties for the current query
     * if the limit clause was used.
     *
     * @since 4.6.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     */
    private function set_found_networks()
    {
    }
    /**
     * Used internally to generate an SQL string for searching across multiple columns.
     *
     * @since 4.6.0
     *
     * @global wpdb  $wpdb WordPress database abstraction object.
     *
     * @param string   $string  Search string.
     * @param string[] $columns Array of columns to search.
     *
     * @return string Search SQL.
     */
    protected function get_search_sql($string, $columns)
    {
    }
    /**
     * Parses and sanitizes 'orderby' keys passed to the network query.
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