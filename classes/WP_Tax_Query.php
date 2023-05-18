<?php


/**
 * Taxonomy API: WP_Tax_Query class
 *
 * @package WordPress
 * @subpackage Taxonomy
 * @since 4.4.0
 */
/**
 * Core class used to implement taxonomy queries for the Taxonomy API.
 *
 * Used for generating SQL clauses that filter a primary query according to object
 * taxonomy terms.
 *
 * WP_Tax_Query is a helper that allows primary query classes, such as WP_Query, to filter
 * their results by object metadata, by generating `JOIN` and `WHERE` subclauses to be
 * attached to the primary SQL query string.
 *
 * @since 3.1.0
 */
class WP_Tax_Query
{
    /**
     * Array of taxonomy queries.
     *
     * See WP_Tax_Query::__construct() for information on tax query arguments.
     *
     * @since 3.1.0
     * @var array
     */
    public $queries = array();
    /**
     * The relation between the queries. Can be one of 'AND' or 'OR'.
     *
     * @since 3.1.0
     * @var string
     */
    public $relation;
    /**
     * A flat list of table aliases used in the JOIN clauses.
     *
     * @since 4.1.0
     * @var array
     */
    protected $table_aliases = array();
    /**
     * Terms and taxonomies fetched by this query.
     *
     * We store this data in a flat array because they are referenced in a
     * number of places by WP_Query.
     *
     * @since 4.1.0
     * @var array
     */
    public $queried_terms = array();
    /**
     * Database table that where the metadata's objects are stored (eg $wpdb->users).
     *
     * @since 4.1.0
     * @var string
     */
    public $primary_table;
    /**
     * Column in 'primary_table' that represents the ID of the object.
     *
     * @since 4.1.0
     * @var string
     */
    public $primary_id_column;
    /**
     * Constructor.
     *
     * @since 3.1.0
     * @since 4.1.0 Added support for `$operator` 'NOT EXISTS' and 'EXISTS' values.
     *
     * @param array $tax_query {
     *     Array of taxonomy query clauses.
     *
     *     @type string $relation Optional. The MySQL keyword used to join
     *                            the clauses of the query. Accepts 'AND', or 'OR'. Default 'AND'.
     *     @type array  ...$0 {
     *         An array of first-order clause parameters, or another fully-formed tax query.
     *
     *         @type string           $taxonomy         Taxonomy being queried. Optional when field=term_taxonomy_id.
     *         @type string|int|array $terms            Term or terms to filter by.
     *         @type string           $field            Field to match $terms against. Accepts 'term_id', 'slug',
     *                                                 'name', or 'term_taxonomy_id'. Default: 'term_id'.
     *         @type string           $operator         MySQL operator to be used with $terms in the WHERE clause.
     *                                                  Accepts 'AND', 'IN', 'NOT IN', 'EXISTS', 'NOT EXISTS'.
     *                                                  Default: 'IN'.
     *         @type bool             $include_children Optional. Whether to include child terms.
     *                                                  Requires a $taxonomy. Default: true.
     *     }
     * }
     */
    public function __construct($tax_query)
    {
    }
    /**
     * Ensure the 'tax_query' argument passed to the class constructor is well-formed.
     *
     * Ensures that each query-level clause has a 'relation' key, and that
     * each first-order clause contains all the necessary keys from `$defaults`.
     *
     * @since 4.1.0
     *
     * @param array $queries Array of queries clauses.
     * @return array Sanitized array of query clauses.
     */
    public function sanitize_query($queries)
    {
    }
    /**
     * Sanitize a 'relation' operator.
     *
     * @since 4.1.0
     *
     * @param string $relation Raw relation key from the query argument.
     * @return string Sanitized relation ('AND' or 'OR').
     */
    public function sanitize_relation($relation)
    {
    }
    /**
     * Determine whether a clause is first-order.
     *
     * A "first-order" clause is one that contains any of the first-order
     * clause keys ('terms', 'taxonomy', 'include_children', 'field',
     * 'operator'). An empty clause also counts as a first-order clause,
     * for backward compatibility. Any clause that doesn't meet this is
     * determined, by process of elimination, to be a higher-order query.
     *
     * @since 4.1.0
     *
     * @param array $query Tax query arguments.
     * @return bool Whether the query clause is a first-order clause.
     */
    protected static function is_first_order_clause($query)
    {
    }
    /**
     * Generates SQL clauses to be appended to a main query.
     *
     * @since 3.1.0
     *
     * @param string $primary_table     Database table where the object being filtered is stored (eg wp_users).
     * @param string $primary_id_column ID column for the filtered object in $primary_table.
     * @return array {
     *     Array containing JOIN and WHERE SQL clauses to append to the main query.
     *
     *     @type string $join  SQL fragment to append to the main JOIN clause.
     *     @type string $where SQL fragment to append to the main WHERE clause.
     * }
     * @phpstan-return array{
     *   join: string,
     *   where: string,
     * }
     */
    public function get_sql($primary_table, $primary_id_column)
    {
    }
    /**
     * Generate SQL clauses to be appended to a main query.
     *
     * Called by the public WP_Tax_Query::get_sql(), this method
     * is abstracted out to maintain parity with the other Query classes.
     *
     * @since 4.1.0
     *
     * @return array {
     *     Array containing JOIN and WHERE SQL clauses to append to the main query.
     *
     *     @type string $join  SQL fragment to append to the main JOIN clause.
     *     @type string $where SQL fragment to append to the main WHERE clause.
     * }
     * @phpstan-return array{
     *   join: string,
     *   where: string,
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
     * @phpstan-return array{
     *   join: string,
     *   where: string,
     * }
     */
    protected function get_sql_for_query(&$query, $depth = 0)
    {
    }
    /**
     * Generate SQL JOIN and WHERE clauses for a "first-order" query clause.
     *
     * @since 4.1.0
     *
     * @global wpdb $wpdb The WordPress database abstraction object.
     *
     * @param array $clause       Query clause (passed by reference).
     * @param array $parent_query Parent query array.
     * @return array {
     *     Array containing JOIN and WHERE SQL clauses to append to a first-order query.
     *
     *     @type string $join  SQL fragment to append to the main JOIN clause.
     *     @type string $where SQL fragment to append to the main WHERE clause.
     * }
     * @phpstan-return array{
     *   join: string,
     *   where: string,
     * }
     */
    public function get_sql_for_clause(&$clause, $parent_query)
    {
    }
    /**
     * Identify an existing table alias that is compatible with the current query clause.
     *
     * We avoid unnecessary table joins by allowing each clause to look for
     * an existing table alias that is compatible with the query that it
     * needs to perform.
     *
     * An existing alias is compatible if (a) it is a sibling of `$clause`
     * (ie, it's under the scope of the same relation), and (b) the combination
     * of operator and relation between the clauses allows for a shared table
     * join. In the case of WP_Tax_Query, this only applies to 'IN'
     * clauses that are connected by the relation 'OR'.
     *
     * @since 4.1.0
     *
     * @param array $clause       Query clause.
     * @param array $parent_query Parent query of $clause.
     * @return string|false Table alias if found, otherwise false.
     */
    protected function find_compatible_table_alias($clause, $parent_query)
    {
    }
    /**
     * Transforms a single query, from one field to another.
     *
     * Operates on the `$query` object by reference. In the case of error,
     * `$query` is converted to a WP_Error object.
     *
     * @since 3.2.0
     *
     * @global wpdb $wpdb The WordPress database abstraction object.
     *
     * @param array  $query           The single query. Passed by reference.
     * @param string $resulting_field The resulting field. Accepts 'slug', 'name', 'term_taxonomy_id',
     *                                or 'term_id'. Default 'term_id'.
     */
    public function transform_query(&$query, $resulting_field)
    {
    }
}