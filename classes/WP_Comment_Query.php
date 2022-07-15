<?php


/**
 * Comment API: WP_Comment_Query class
 *
 * @package WordPress
 * @subpackage Comments
 * @since 4.4.0
 */
/**
 * Core class used for querying comments.
 *
 * @since 3.1.0
 *
 * @see WP_Comment_Query::__construct() for accepted arguments.
 */
class WP_Comment_Query
{
    /**
     * SQL for database query.
     *
     * @since 4.0.1
     * @var string
     */
    public $request;
    /**
     * Metadata query container
     *
     * @since 3.5.0
     * @var WP_Meta_Query A meta query instance.
     */
    public $meta_query = \false;
    /**
     * Metadata query clauses.
     *
     * @since 4.4.0
     * @var array
     */
    protected $meta_query_clauses;
    /**
     * SQL query clauses.
     *
     * @since 4.4.0
     * @var array
     */
    protected $sql_clauses = array('select' => '', 'from' => '', 'where' => array(), 'groupby' => '', 'orderby' => '', 'limits' => '');
    /**
     * SQL WHERE clause.
     *
     * Stored after the {@see 'comments_clauses'} filter is run on the compiled WHERE sub-clauses.
     *
     * @since 4.4.2
     * @var string
     */
    protected $filtered_where_clause;
    /**
     * Date query container
     *
     * @since 3.7.0
     * @var WP_Date_Query A date query instance.
     */
    public $date_query = \false;
    /**
     * Query vars set by the user.
     *
     * @since 3.1.0
     * @var array
     */
    public $query_vars;
    /**
     * Default values for query vars.
     *
     * @since 4.2.0
     * @var array
     */
    public $query_var_defaults;
    /**
     * List of comments located by the query.
     *
     * @since 4.0.0
     * @var int[]|WP_Comment[]
     */
    public $comments;
    /**
     * The amount of found comments for the current query.
     *
     * @since 4.4.0
     * @var int
     */
    public $found_comments = 0;
    /**
     * The number of pages.
     *
     * @since 4.4.0
     * @var int
     */
    public $max_num_pages = 0;
    /**
     * Make private/protected methods readable for backward compatibility.
     *
     * @since 4.0.0
     *
     * @param string $name      Method to call.
     * @param array  $arguments Arguments to pass when calling.
     * @return mixed|false Return value of the callback, false otherwise.
     */
    public function __call($name, $arguments)
    {
    }
    /**
     * Constructor.
     *
     * Sets up the comment query, based on the query vars passed.
     *
     * @since 4.2.0
     * @since 4.4.0 `$parent__in` and `$parent__not_in` were added.
     * @since 4.4.0 Order by `comment__in` was added. `$update_comment_meta_cache`, `$no_found_rows`,
     *              `$hierarchical`, and `$update_comment_post_cache` were added.
     * @since 4.5.0 Introduced the `$author_url` argument.
     * @since 4.6.0 Introduced the `$cache_domain` argument.
     * @since 4.9.0 Introduced the `$paged` argument.
     * @since 5.1.0 Introduced the `$meta_compare_key` argument.
     * @since 5.3.0 Introduced the `$meta_type_key` argument.
     *
     * @param string|array $query {
     *     Optional. Array or query string of comment query parameters. Default empty.
     *
     *     @type string          $author_email              Comment author email address. Default empty.
     *     @type string          $author_url                Comment author URL. Default empty.
     *     @type int[]           $author__in                Array of author IDs to include comments for. Default empty.
     *     @type int[]           $author__not_in            Array of author IDs to exclude comments for. Default empty.
     *     @type int[]           $comment__in               Array of comment IDs to include. Default empty.
     *     @type int[]           $comment__not_in           Array of comment IDs to exclude. Default empty.
     *     @type bool            $count                     Whether to return a comment count (true) or array of
     *                                                      comment objects (false). Default false.
     *     @type array           $date_query                Date query clauses to limit comments by. See WP_Date_Query.
     *                                                      Default null.
     *     @type string          $fields                    Comment fields to return. Accepts 'ids' for comment IDs
     *                                                      only or empty for all fields. Default empty.
     *     @type int             $ID                        Currently unused.
     *     @type array           $include_unapproved        Array of IDs or email addresses of users whose unapproved
     *                                                      comments will be returned by the query regardless of
     *                                                      `$status`. Default empty.
     *     @type int             $karma                     Karma score to retrieve matching comments for.
     *                                                      Default empty.
     *     @type string|string[] $meta_key                  Meta key or keys to filter by.
     *     @type string|string[] $meta_value                Meta value or values to filter by.
     *     @type string          $meta_compare              MySQL operator used for comparing the meta value.
     *                                                      See WP_Meta_Query::__construct for accepted values and default value.
     *     @type string          $meta_compare_key          MySQL operator used for comparing the meta key.
     *                                                      See WP_Meta_Query::__construct for accepted values and default value.
     *     @type string          $meta_type                 MySQL data type that the meta_value column will be CAST to for comparisons.
     *                                                      See WP_Meta_Query::__construct for accepted values and default value.
     *     @type string          $meta_type_key             MySQL data type that the meta_key column will be CAST to for comparisons.
     *                                                      See WP_Meta_Query::__construct for accepted values and default value.
     *     @type array           $meta_query                An associative array of WP_Meta_Query arguments.
     *                                                      See WP_Meta_Query::__construct for accepted values.
     *     @type int             $number                    Maximum number of comments to retrieve.
     *                                                      Default empty (no limit).
     *     @type int             $paged                     When used with `$number`, defines the page of results to return.
     *                                                      When used with `$offset`, `$offset` takes precedence. Default 1.
     *     @type int             $offset                    Number of comments to offset the query. Used to build
     *                                                      LIMIT clause. Default 0.
     *     @type bool            $no_found_rows             Whether to disable the `SQL_CALC_FOUND_ROWS` query.
     *                                                      Default: true.
     *     @type string|array    $orderby                   Comment status or array of statuses. To use 'meta_value'
     *                                                      or 'meta_value_num', `$meta_key` must also be defined.
     *                                                      To sort by a specific `$meta_query` clause, use that
     *                                                      clause's array key. Accepts:
     *                                                      - 'comment_agent'
     *                                                      - 'comment_approved'
     *                                                      - 'comment_author'
     *                                                      - 'comment_author_email'
     *                                                      - 'comment_author_IP'
     *                                                      - 'comment_author_url'
     *                                                      - 'comment_content'
     *                                                      - 'comment_date'
     *                                                      - 'comment_date_gmt'
     *                                                      - 'comment_ID'
     *                                                      - 'comment_karma'
     *                                                      - 'comment_parent'
     *                                                      - 'comment_post_ID'
     *                                                      - 'comment_type'
     *                                                      - 'user_id'
     *                                                      - 'comment__in'
     *                                                      - 'meta_value'
     *                                                      - 'meta_value_num'
     *                                                      - The value of `$meta_key`
     *                                                      - The array keys of `$meta_query`
     *                                                      - false, an empty array, or 'none' to disable `ORDER BY` clause.
     *                                                      Default: 'comment_date_gmt'.
     *     @type string          $order                     How to order retrieved comments. Accepts 'ASC', 'DESC'.
     *                                                      Default: 'DESC'.
     *     @type int             $parent                    Parent ID of comment to retrieve children of.
     *                                                      Default empty.
     *     @type int[]           $parent__in                Array of parent IDs of comments to retrieve children for.
     *                                                      Default empty.
     *     @type int[]           $parent__not_in            Array of parent IDs of comments *not* to retrieve
     *                                                      children for. Default empty.
     *     @type int[]           $post_author__in           Array of author IDs to retrieve comments for.
     *                                                      Default empty.
     *     @type int[]           $post_author__not_in       Array of author IDs *not* to retrieve comments for.
     *                                                      Default empty.
     *     @type int             $post_ID                   Currently unused.
     *     @type int             $post_id                   Limit results to those affiliated with a given post ID.
     *                                                      Default 0.
     *     @type int[]           $post__in                  Array of post IDs to include affiliated comments for.
     *                                                      Default empty.
     *     @type int[]           $post__not_in              Array of post IDs to exclude affiliated comments for.
     *                                                      Default empty.
     *     @type int             $post_author               Post author ID to limit results by. Default empty.
     *     @type string|string[] $post_status               Post status or array of post statuses to retrieve
     *                                                      affiliated comments for. Pass 'any' to match any value.
     *                                                      Default empty.
     *     @type string|string[] $post_type                 Post type or array of post types to retrieve affiliated
     *                                                      comments for. Pass 'any' to match any value. Default empty.
     *     @type string          $post_name                 Post name to retrieve affiliated comments for.
     *                                                      Default empty.
     *     @type int             $post_parent               Post parent ID to retrieve affiliated comments for.
     *                                                      Default empty.
     *     @type string          $search                    Search term(s) to retrieve matching comments for.
     *                                                      Default empty.
     *     @type string|array    $status                    Comment statuses to limit results by. Accepts an array
     *                                                      or space/comma-separated list of 'hold' (`comment_status=0`),
     *                                                      'approve' (`comment_status=1`), 'all', or a custom
     *                                                      comment status. Default 'all'.
     *     @type string|string[] $type                      Include comments of a given type, or array of types.
     *                                                      Accepts 'comment', 'pings' (includes 'pingback' and
     *                                                      'trackback'), or any custom type string. Default empty.
     *     @type string[]        $type__in                  Include comments from a given array of comment types.
     *                                                      Default empty.
     *     @type string[]        $type__not_in              Exclude comments from a given array of comment types.
     *                                                      Default empty.
     *     @type int             $user_id                   Include comments for a specific user ID. Default empty.
     *     @type bool|string     $hierarchical              Whether to include comment descendants in the results.
     *                                                      - 'threaded' returns a tree, with each comment's children
     *                                                        stored in a `children` property on the `WP_Comment` object.
     *                                                      - 'flat' returns a flat array of found comments plus
     *                                                        their children.
     *                                                      - Boolean `false` leaves out descendants.
     *                                                      The parameter is ignored (forced to `false`) when
     *                                                      `$fields` is 'ids' or 'counts'. Accepts 'threaded',
     *                                                      'flat', or false. Default: false.
     *     @type string          $cache_domain              Unique cache key to be produced when this query is stored in
     *                                                      an object cache. Default is 'core'.
     *     @type bool            $update_comment_meta_cache Whether to prime the metadata cache for found comments.
     *                                                      Default true.
     *     @type bool            $update_comment_post_cache Whether to prime the cache for comment posts.
     *                                                      Default false.
     * }
     * @phpstan-param array{
     *   author_email?: string,
     *   author_url?: string,
     *   author__in?: int[],
     *   author__not_in?: int[],
     *   comment__in?: int[],
     *   comment__not_in?: int[],
     *   count?: bool,
     *   date_query?: array,
     *   fields?: string,
     *   ID?: int,
     *   include_unapproved?: array,
     *   karma?: int,
     *   meta_key?: string|string[],
     *   meta_value?: string|string[],
     *   meta_compare?: string,
     *   meta_compare_key?: string,
     *   meta_type?: string,
     *   meta_type_key?: string,
     *   meta_query?: array,
     *   number?: int,
     *   paged?: int,
     *   offset?: int,
     *   no_found_rows?: bool,
     *   orderby?: string|array,
     *   order?: string,
     *   parent?: int,
     *   parent__in?: int[],
     *   parent__not_in?: int[],
     *   post_author__in?: int[],
     *   post_author__not_in?: int[],
     *   post_ID?: int,
     *   post_id?: int,
     *   post__in?: int[],
     *   post__not_in?: int[],
     *   post_author?: int,
     *   post_status?: string|string[],
     *   post_type?: string|string[],
     *   post_name?: string,
     *   post_parent?: int,
     *   search?: string,
     *   status?: string|array,
     *   type?: string|string[],
     *   type__in?: string[],
     *   type__not_in?: string[],
     *   user_id?: int,
     *   hierarchical?: bool|string,
     *   cache_domain?: string,
     *   update_comment_meta_cache?: bool,
     *   update_comment_post_cache?: bool,
     * } $query
     */
    public function __construct($query = '')
    {
    }
    /**
     * Parse arguments passed to the comment query with default query parameters.
     *
     * @since 4.2.0 Extracted from WP_Comment_Query::query().
     *
     * @param string|array $query WP_Comment_Query arguments. See WP_Comment_Query::__construct()
     */
    public function parse_query($query = '')
    {
    }
    /**
     * Sets up the WordPress query for retrieving comments.
     *
     * @since 3.1.0
     * @since 4.1.0 Introduced 'comment__in', 'comment__not_in', 'post_author__in',
     *              'post_author__not_in', 'author__in', 'author__not_in', 'post__in',
     *              'post__not_in', 'include_unapproved', 'type__in', and 'type__not_in'
     *              arguments to $query_vars.
     * @since 4.2.0 Moved parsing to WP_Comment_Query::parse_query().
     *
     * @param string|array $query Array or URL query string of parameters.
     * @return array|int List of comments, or number of comments when 'count' is passed as a query var.
     */
    public function query($query)
    {
    }
    /**
     * Get a list of comments matching the query vars.
     *
     * @since 4.2.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @return int|int[]|WP_Comment[] List of comments or number of found comments if `$count` argument is true.
     */
    public function get_comments()
    {
    }
    /**
     * Used internally to get a list of comment IDs matching the query vars.
     *
     * @since 4.4.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @return int|array A single count of comment IDs if a count query. An array of comment IDs if a full query.
     */
    protected function get_comment_ids()
    {
    }
    /**
     * Populates found_comments and max_num_pages properties for the current
     * query if the limit clause was used.
     *
     * @since 4.6.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     */
    private function set_found_comments()
    {
    }
    /**
     * Fetch descendants for located comments.
     *
     * Instead of calling `get_children()` separately on each child comment, we do a single set of queries to fetch
     * the descendant trees for all matched top-level comments.
     *
     * @since 4.4.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param WP_Comment[] $comments Array of top-level comments whose descendants should be filled in.
     * @return array
     */
    protected function fill_descendants($comments)
    {
    }
    /**
     * Used internally to generate an SQL string for searching across multiple columns.
     *
     * @since 3.1.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param string   $search  Search string.
     * @param string[] $columns Array of columns to search.
     * @return string Search SQL.
     */
    protected function get_search_sql($search, $columns)
    {
    }
    /**
     * Parse and sanitize 'orderby' keys passed to the comment query.
     *
     * @since 4.2.0
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
     * Parse an 'order' query variable and cast it to ASC or DESC as necessary.
     *
     * @since 4.2.0
     *
     * @param string $order The 'order' query variable.
     * @return string The sanitized 'order' query variable.
     */
    protected function parse_order($order)
    {
    }
}