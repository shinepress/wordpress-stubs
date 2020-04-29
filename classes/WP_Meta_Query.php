<?php


/**
 * Meta API: WP_Meta_Query class
 *
 * @package WordPress
 * @subpackage Meta
 * @since 4.4.0
 */
/**
 * Core class used to implement meta queries for the Meta API.
 *
 * Used for generating SQL clauses that filter a primary query according to metadata keys and values.
 *
 * WP_Meta_Query is a helper that allows primary query classes, such as WP_Query and WP_User_Query,
 *
 * to filter their results by object metadata, by generating `JOIN` and `WHERE` subclauses to be attached
 * to the primary SQL query string.
 *
 * @since 3.2.0
 */
class WP_Meta_Query
{
    /**
     * Array of metadata queries.
     *
     * See WP_Meta_Query::__construct() for information on meta query arguments.
     *
     * @since 3.2.0
     * @var array
     */
    public $queries = array();
    /**
     * The relation between the queries. Can be one of 'AND' or 'OR'.
     *
     * @since 3.2.0
     * @var string
     */
    public $relation;
    /**
     * Database table to query for the metadata.
     *
     * @since 4.1.0
     * @var string
     */
    public $meta_table;
    /**
     * Column in meta_table that represents the ID of the object the metadata belongs to.
     *
     * @since 4.1.0
     * @var string
     */
    public $meta_id_column;
    /**
     * Database table that where the metadata's objects are stored (eg $wpdb->users).
     *
     * @since 4.1.0
     * @var string
     */
    public $primary_table;
    /**
     * Column in primary_table that represents the ID of the object.
     *
     * @since 4.1.0
     * @var string
     */
    public $primary_id_column;
    /**
     * A flat list of table aliases used in JOIN clauses.
     *
     * @since 4.1.0
     * @var array
     */
    protected $table_aliases = array();
    /**
     * A flat list of clauses, keyed by clause 'name'.
     *
     * @since 4.2.0
     * @var array
     */
    protected $clauses = array();
    /**
     * Whether the query contains any OR relations.
     *
     * @since 4.3.0
     * @var bool
     */
    protected $has_or_relation = \false;
    /**
     * Constructor.
     *
     * @since 3.2.0
     * @since 4.2.0 Introduced support for naming query clauses by associative array keys.
     * @since 5.1.0 Introduced $compare_key clause parameter, which enables LIKE key matches.
     * @since 5.3.0 Increased the number of operators available to $compare_key. Introduced $type_key,
     *              which enables the $key to be cast to a new data type for comparisons.
     *
     * @param array $meta_query {
     *     Array of meta query clauses. When first-order clauses or sub-clauses use strings as
     *     their array keys, they may be referenced in the 'orderby' parameter of the parent query.
     *
     *     @type string $relation Optional. The MySQL keyword used to join
     *                            the clauses of the query. Accepts 'AND', or 'OR'. Default 'AND'.
     *     @type array {
     *         Optional. An array of first-order clause parameters, or another fully-formed meta query.
     *
     *         @type string $key         Meta key to filter by.
     *         @type string $compare_key MySQL operator used for comparing the $key. Accepts '=', '!='
     *                                   'LIKE', 'NOT LIKE', 'IN', 'NOT IN', 'REGEXP', 'NOT REGEXP', 'RLIKE',
     *                                   'EXISTS' (alias of '=') or 'NOT EXISTS' (alias of '!=').
     *                                   Default is 'IN' when `$key` is an array, '=' otherwise.
     *         @type string $type_key    MySQL data type that the meta_key column will be CAST to for
     *                                   comparisons. Accepts 'BINARY' for case-sensitive regular expression
     *                                   comparisons. Default is ''.
     *         @type string $value       Meta value to filter by.
     *         @type string $compare     MySQL operator used for comparing the $value. Accepts '=',
     *                                   '!=', '>', '>=', '<', '<=', 'LIKE', 'NOT LIKE',
     *                                   'IN', 'NOT IN', 'BETWEEN', 'NOT BETWEEN', 'REGEXP',
     *                                   'NOT REGEXP', 'RLIKE', 'EXISTS' or 'NOT EXISTS'.
     *                                   Default is 'IN' when `$value` is an array, '=' otherwise.
     *         @type string $type        MySQL data type that the meta_value column will be CAST to for
     *                                   comparisons. Accepts 'NUMERIC', 'BINARY', 'CHAR', 'DATE',
     *                                   'DATETIME', 'DECIMAL', 'SIGNED', 'TIME', or 'UNSIGNED'.
     *                                   Default is 'CHAR'.
     *     }
     * }
     */
    public function __construct($meta_query = \false)
    {
    }
    /**
     * Ensure the 'meta_query' argument passed to the class constructor is well-formed.
     *
     * Eliminates empty items and ensures that a 'relation' is set.
     *
     * @since 4.1.0
     *
     * @param array $queries Array of query clauses.
     * @return array Sanitized array of query clauses.
     */
    public function sanitize_query($queries)
    {
    }
    /**
     * Determine whether a query clause is first-order.
     *
     * A first-order meta query clause is one that has either a 'key' or
     * a 'value' array key.
     *
     * @since 4.1.0
     *
     * @param array $query Meta query arguments.
     * @return bool Whether the query clause is a first-order clause.
     */
    protected function is_first_order_clause($query)
    {
    }
    /**
     * Constructs a meta query based on 'meta_*' query vars
     *
     * @since 3.2.0
     *
     * @param array $qv The query variables
     */
    public function parse_query_vars($qv)
    {
    }
    /**
     * Return the appropriate alias for the given meta type if applicable.
     *
     * @since 3.7.0
     *
     * @param string $type MySQL type to cast meta_value.
     * @return string MySQL type.
     */
    public function get_cast_for_type($type = '')
    {
    }
    /**
     * Generates SQL clauses to be appended to a main query.
     *
     * @since 3.2.0
     *
     * @param string $type              Type of meta, eg 'user', 'post'.
     * @param string $primary_table     Database table where the object being filtered is stored (eg wp_users).
     * @param string $primary_id_column ID column for the filtered object in $primary_table.
     * @param object $context           Optional. The main query object.
     * @return array|false {
     *     Array containing JOIN and WHERE SQL clauses to append to the main query.
     *
     *     @type string $join  SQL fragment to append to the main JOIN clause.
     *     @type string $where SQL fragment to append to the main WHERE clause.
     * }
     */
    public function get_sql($type, $primary_table, $primary_id_column, $context = \null)
    {
    }
    /**
     * Generate SQL clauses to be appended to a main query.
     *
     * Called by the public WP_Meta_Query::get_sql(), this method is abstracted
     * out to maintain parity with the other Query classes.
     *
     * @since 4.1.0
     *
     * @return array {
     *     Array containing JOIN and WHERE SQL clauses to append to the main query.
     *
     *     @type string $join  SQL fragment to append to the main JOIN clause.
     *     @type string $where SQL fragment to append to the main WHERE clause.
     * }
     */
    protected function get_sql_clauses()
    {
    }
    /**
     * Generate SQL clauses for a single query array.
     *
     * If nested subqueries are found, this method recurses the tree to
     * produce the properly nested SQL.
     *
     * @since 4.1.0
     *
     * @param array $query Query to parse (passed by reference).
     * @param int   $depth Optional. Number of tree levels deep we currently are.
     *                     Used to calculate indentation. Default 0.
     * @return array {
     *     Array containing JOIN and WHERE SQL clauses to append to a single query array.
     *
     *     @type string $join  SQL fragment to append to the main JOIN clause.
     *     @type string $where SQL fragment to append to the main WHERE clause.
     * }
     */
    protected function get_sql_for_query(&$query, $depth = 0)
    {
    }
    /**
     * Generate SQL JOIN and WHERE clauses for a first-order query clause.
     *
     * "First-order" means that it's an array with a 'key' or 'value'.
     *
     * @since 4.1.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param array  $clause       Query clause (passed by reference).
     * @param array  $parent_query Parent query array.
     * @param string $clause_key   Optional. The array key used to name the clause in the original `$meta_query`
     *                             parameters. If not provided, a key will be generated automatically.
     * @return array {
     *     Array containing JOIN and WHERE SQL clauses to append to a first-order query.
     *
     *     @type string $join  SQL fragment to append to the main JOIN clause.
     *     @type string $where SQL fragment to append to the main WHERE clause.
     * }
     */
    public function get_sql_for_clause(&$clause, $parent_query, $clause_key = '')
    {
    }
    /**
     * Get a flattened list of sanitized meta clauses.
     *
     * This array should be used for clause lookup, as when the table alias and CAST type must be determined for
     * a value of 'orderby' corresponding to a meta clause.
     *
     * @since 4.2.0
     *
     * @return array Meta clauses.
     */
    public function get_clauses()
    {
    }
    /**
     * Identify an existing table alias that is compatible with the current
     * query clause.
     *
     * We avoid unnecessary table joins by allowing each clause to look for
     * an existing table alias that is compatible with the query that it
     * needs to perform.
     *
     * An existing alias is compatible if (a) it is a sibling of `$clause`
     * (ie, it's under the scope of the same relation), and (b) the combination
     * of operator and relation between the clauses allows for a shared table join.
     * In the case of WP_Meta_Query, this only applies to 'IN' clauses that are
     * connected by the relation 'OR'.
     *
     * @since 4.1.0
     *
     * @param  array       $clause       Query clause.
     * @param  array       $parent_query Parent query of $clause.
     * @return string|bool Table alias if found, otherwise false.
     */
    protected function find_compatible_table_alias($clause, $parent_query)
    {
    }
    /**
     * Checks whether the current query has any OR relations.
     *
     * In some cases, the presence of an OR relation somewhere in the query will require
     * the use of a `DISTINCT` or `GROUP BY` keyword in the `SELECT` clause. The current
     * method can be used in these cases to determine whether such a clause is necessary.
     *
     * @since 4.3.0
     *
     * @return bool True if the query contains any `OR` relations, otherwise false.
     */
    public function has_or_relation()
    {
    }
}