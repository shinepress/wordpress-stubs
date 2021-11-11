<?php


/**
 * Class for generating SQL clauses that filter a primary query according to date.
 *
 * WP_Date_Query is a helper that allows primary query classes, such as WP_Query, to filter
 * their results by date columns, by generating `WHERE` subclauses to be attached to the
 * primary SQL query string.
 *
 * Attempting to filter by an invalid date value (eg month=13) will generate SQL that will
 * return no results. In these cases, a _doing_it_wrong() error notice is also thrown.
 * See WP_Date_Query::validate_date_values().
 *
 * @link https://developer.wordpress.org/reference/classes/wp_query/
 *
 * @since 3.7.0
 */
class WP_Date_Query
{
    /**
     * Array of date queries.
     *
     * See WP_Date_Query::__construct() for information on date query arguments.
     *
     * @since 3.7.0
     * @var array
     */
    public $queries = array();
    /**
     * The default relation between top-level queries. Can be either 'AND' or 'OR'.
     *
     * @since 3.7.0
     * @var string
     */
    public $relation = 'AND';
    /**
     * The column to query against. Can be changed via the query arguments.
     *
     * @since 3.7.0
     * @var string
     */
    public $column = 'post_date';
    /**
     * The value comparison operator. Can be changed via the query arguments.
     *
     * @since 3.7.0
     * @var string
     */
    public $compare = '=';
    /**
     * Supported time-related parameter keys.
     *
     * @since 4.1.0
     * @var array
     */
    public $time_keys = array('after', 'before', 'year', 'month', 'monthnum', 'week', 'w', 'dayofyear', 'day', 'dayofweek', 'dayofweek_iso', 'hour', 'minute', 'second');
    /**
     * Constructor.
     *
     * Time-related parameters that normally require integer values ('year', 'month', 'week', 'dayofyear', 'day',
     * 'dayofweek', 'dayofweek_iso', 'hour', 'minute', 'second') accept arrays of integers for some values of
     * 'compare'. When 'compare' is 'IN' or 'NOT IN', arrays are accepted; when 'compare' is 'BETWEEN' or 'NOT
     * BETWEEN', arrays of two valid values are required. See individual argument descriptions for accepted values.
     *
     * @since 3.7.0
     * @since 4.0.0 The $inclusive logic was updated to include all times within the date range.
     * @since 4.1.0 Introduced 'dayofweek_iso' time type parameter.
     *
     * @param array  $date_query {
     *     Array of date query clauses.
     *
     *     @type array ...$0 {
     *         @type string $column   Optional. The column to query against. If undefined, inherits the value of
     *                                the `$default_column` parameter. Accepts 'post_date', 'post_date_gmt',
     *                                'post_modified','post_modified_gmt', 'comment_date', 'comment_date_gmt'.
     *                                Default 'post_date'.
     *         @type string $compare  Optional. The comparison operator. Accepts '=', '!=', '>', '>=', '<', '<=',
     *                                'IN', 'NOT IN', 'BETWEEN', 'NOT BETWEEN'. Default '='.
     *         @type string $relation Optional. The boolean relationship between the date queries. Accepts 'OR' or 'AND'.
     *                                Default 'OR'.
     *         @type array  ...$0 {
     *             Optional. An array of first-order clause parameters, or another fully-formed date query.
     *
     *             @type string|array $before {
     *                 Optional. Date to retrieve posts before. Accepts `strtotime()`-compatible string,
     *                 or array of 'year', 'month', 'day' values.
     *
     *                 @type string $year  The four-digit year. Default empty. Accepts any four-digit year.
     *                 @type string $month Optional when passing array.The month of the year.
     *                                     Default (string:empty)|(array:1). Accepts numbers 1-12.
     *                 @type string $day   Optional when passing array.The day of the month.
     *                                     Default (string:empty)|(array:1). Accepts numbers 1-31.
     *             }
     *             @type string|array $after {
     *                 Optional. Date to retrieve posts after. Accepts `strtotime()`-compatible string,
     *                 or array of 'year', 'month', 'day' values.
     *
     *                 @type string $year  The four-digit year. Accepts any four-digit year. Default empty.
     *                 @type string $month Optional when passing array. The month of the year. Accepts numbers 1-12.
     *                                     Default (string:empty)|(array:12).
     *                 @type string $day   Optional when passing array.The day of the month. Accepts numbers 1-31.
     *                                     Default (string:empty)|(array:last day of month).
     *             }
     *             @type string       $column        Optional. Used to add a clause comparing a column other than the
     *                                               column specified in the top-level `$column` parameter. Accepts
     *                                               'post_date', 'post_date_gmt', 'post_modified', 'post_modified_gmt',
     *                                               'comment_date', 'comment_date_gmt'. Default is the value of
     *                                               top-level `$column`.
     *             @type string       $compare       Optional. The comparison operator. Accepts '=', '!=', '>', '>=',
     *                                               '<', '<=', 'IN', 'NOT IN', 'BETWEEN', 'NOT BETWEEN'. 'IN',
     *                                               'NOT IN', 'BETWEEN', and 'NOT BETWEEN'. Comparisons support
     *                                               arrays in some time-related parameters. Default '='.
     *             @type bool         $inclusive     Optional. Include results from dates specified in 'before' or
     *                                               'after'. Default false.
     *             @type int|int[]    $year          Optional. The four-digit year number. Accepts any four-digit year
     *                                               or an array of years if `$compare` supports it. Default empty.
     *             @type int|int[]    $month         Optional. The two-digit month number. Accepts numbers 1-12 or an
     *                                               array of valid numbers if `$compare` supports it. Default empty.
     *             @type int|int[]    $week          Optional. The week number of the year. Accepts numbers 0-53 or an
     *                                               array of valid numbers if `$compare` supports it. Default empty.
     *             @type int|int[]    $dayofyear     Optional. The day number of the year. Accepts numbers 1-366 or an
     *                                               array of valid numbers if `$compare` supports it.
     *             @type int|int[]    $day           Optional. The day of the month. Accepts numbers 1-31 or an array
     *                                               of valid numbers if `$compare` supports it. Default empty.
     *             @type int|int[]    $dayofweek     Optional. The day number of the week. Accepts numbers 1-7 (1 is
     *                                               Sunday) or an array of valid numbers if `$compare` supports it.
     *                                               Default empty.
     *             @type int|int[]    $dayofweek_iso Optional. The day number of the week (ISO). Accepts numbers 1-7
     *                                               (1 is Monday) or an array of valid numbers if `$compare` supports it.
     *                                               Default empty.
     *             @type int|int[]    $hour          Optional. The hour of the day. Accepts numbers 0-23 or an array
     *                                               of valid numbers if `$compare` supports it. Default empty.
     *             @type int|int[]    $minute        Optional. The minute of the hour. Accepts numbers 0-60 or an array
     *                                               of valid numbers if `$compare` supports it. Default empty.
     *             @type int|int[]    $second        Optional. The second of the minute. Accepts numbers 0-60 or an
     *                                               array of valid numbers if `$compare` supports it. Default empty.
     *         }
     *     }
     * }
     * @param string $default_column Optional. Default column to query against. Default 'post_date'.
     *                               Accepts 'post_date', 'post_date_gmt', 'post_modified', 'post_modified_gmt',
     *                               'comment_date', 'comment_date_gmt'.
     */
    public function __construct($date_query, $default_column = 'post_date')
    {
    }
    /**
     * Recursive-friendly query sanitizer.
     *
     * Ensures that each query-level clause has a 'relation' key, and that
     * each first-order clause contains all the necessary keys from `$defaults`.
     *
     * @since 4.1.0
     *
     * @param array $queries
     * @param array $parent_query
     * @return array Sanitized queries.
     */
    public function sanitize_query($queries, $parent_query = \null)
    {
    }
    /**
     * Determine whether this is a first-order clause.
     *
     * Checks to see if the current clause has any time-related keys.
     * If so, it's first-order.
     *
     * @since 4.1.0
     *
     * @param array $query Query clause.
     * @return bool True if this is a first-order clause.
     */
    protected function is_first_order_clause($query)
    {
    }
    /**
     * Determines and validates what comparison operator to use.
     *
     * @since 3.7.0
     *
     * @param array $query A date query or a date subquery.
     * @return string The comparison operator.
     */
    public function get_compare($query)
    {
    }
    /**
     * Validates the given date_query values and triggers errors if something is not valid.
     *
     * Note that date queries with invalid date ranges are allowed to
     * continue (though of course no items will be found for impossible dates).
     * This method only generates debug notices for these cases.
     *
     * @since 4.1.0
     *
     * @param array $date_query The date_query array.
     * @return bool  True if all values in the query are valid, false if one or more fail.
     */
    public function validate_date_values($date_query = array())
    {
    }
    /**
     * Validates a column name parameter.
     *
     * Column names without a table prefix (like 'post_date') are checked against a list of
     * allowed and known tables, and then, if found, have a table prefix (such as 'wp_posts.')
     * prepended. Prefixed column names (such as 'wp_posts.post_date') bypass this allowed
     * check, and are only sanitized to remove illegal characters.
     *
     * @since 3.7.0
     *
     * @param string $column The user-supplied column name.
     * @return string A validated column name value.
     */
    public function validate_column($column)
    {
    }
    /**
     * Generate WHERE clause to be appended to a main query.
     *
     * @since 3.7.0
     *
     * @return string MySQL WHERE clause.
     */
    public function get_sql()
    {
    }
    /**
     * Generate SQL clauses to be appended to a main query.
     *
     * Called by the public WP_Date_Query::get_sql(), this method is abstracted
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
     * @param array $query Query to parse.
     * @param int   $depth Optional. Number of tree levels deep we currently are.
     *                     Used to calculate indentation. Default 0.
     * @return array {
     *     Array containing JOIN and WHERE SQL clauses to append to a single query array.
     *
     *     @type string $join  SQL fragment to append to the main JOIN clause.
     *     @type string $where SQL fragment to append to the main WHERE clause.
     * }
     */
    protected function get_sql_for_query($query, $depth = 0)
    {
    }
    /**
     * Turns a single date clause into pieces for a WHERE clause.
     *
     * A wrapper for get_sql_for_clause(), included here for backward
     * compatibility while retaining the naming convention across Query classes.
     *
     * @since 3.7.0
     *
     * @param array $query Date query arguments.
     * @return array {
     *     Array containing JOIN and WHERE SQL clauses to append to the main query.
     *
     *     @type string $join  SQL fragment to append to the main JOIN clause.
     *     @type string $where SQL fragment to append to the main WHERE clause.
     * }
     */
    protected function get_sql_for_subquery($query)
    {
    }
    /**
     * Turns a first-order date query into SQL for a WHERE clause.
     *
     * @since 4.1.0
     *
     * @param array $query        Date query clause.
     * @param array $parent_query Parent query of the current date query.
     * @return array {
     *     Array containing JOIN and WHERE SQL clauses to append to the main query.
     *
     *     @type string $join  SQL fragment to append to the main JOIN clause.
     *     @type string $where SQL fragment to append to the main WHERE clause.
     * }
     */
    protected function get_sql_for_clause($query, $parent_query)
    {
    }
    /**
     * Builds and validates a value string based on the comparison operator.
     *
     * @since 3.7.0
     *
     * @param string       $compare The compare operator to use.
     * @param string|array $value   The value.
     * @return string|false|int The value to be used in SQL or false on error.
     */
    public function build_value($compare, $value)
    {
    }
    /**
     * Builds a MySQL format date/time based on some query parameters.
     *
     * You can pass an array of values (year, month, etc.) with missing parameter values being defaulted to
     * either the maximum or minimum values (controlled by the $default_to parameter). Alternatively you can
     * pass a string that will be passed to date_create().
     *
     * @since 3.7.0
     *
     * @param string|array $datetime       An array of parameters or a strotime() string
     * @param bool         $default_to_max Whether to round up incomplete dates. Supported by values
     *                                     of $datetime that are arrays, or string values that are a
     *                                     subset of MySQL date format ('Y', 'Y-m', 'Y-m-d', 'Y-m-d H:i').
     *                                     Default: false.
     * @return string|false A MySQL format date/time or false on failure
     */
    public function build_mysql_datetime($datetime, $default_to_max = \false)
    {
    }
    /**
     * Builds a query string for comparing time values (hour, minute, second).
     *
     * If just hour, minute, or second is set than a normal comparison will be done.
     * However if multiple values are passed, a pseudo-decimal time will be created
     * in order to be able to accurately compare against.
     *
     * @since 3.7.0
     *
     * @param string   $column  The column to query against. Needs to be pre-validated!
     * @param string   $compare The comparison operator. Needs to be pre-validated!
     * @param int|null $hour    Optional. An hour value (0-23).
     * @param int|null $minute  Optional. A minute value (0-59).
     * @param int|null $second  Optional. A second value (0-59).
     * @return string|false A query part or false on failure.
     */
    public function build_time_query($column, $compare, $hour = \null, $minute = \null, $second = \null)
    {
    }
}