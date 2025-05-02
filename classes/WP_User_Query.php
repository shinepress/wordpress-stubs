<?php


/**
 * Core class used for querying users.
 *
 * @since 3.1.0
 *
 * @see WP_User_Query::prepare_query() for information on accepted arguments.
 */
#[\AllowDynamicProperties]
class WP_User_Query
{
    /**
     * Query vars, after parsing
     *
     * @since 3.5.0
     * @var array
     */
    public $query_vars = array();
    /**
     * Metadata query container.
     *
     * @since 4.2.0
     * @var WP_Meta_Query
     */
    public $meta_query = \false;
    /**
     * The SQL query used to fetch matching users.
     *
     * @since 4.4.0
     * @var string
     */
    public $request;
    public $query_fields;
    public $query_from;
    public $query_where;
    public $query_orderby;
    public $query_limit;
    /**
     * Constructor.
     *
     * @since 3.1.0
     *
     * @param null|string|array $query Optional. The query variables.
     *                                 See WP_User_Query::prepare_query() for information on accepted arguments.
     * @phpstan-param array{
     *   blog_id?: int,
     *   role?: string|string[],
     *   role__in?: string[],
     *   role__not_in?: string[],
     *   meta_key?: string|string[],
     *   meta_value?: string|string[],
     *   meta_compare?: string,
     *   meta_compare_key?: string,
     *   meta_type?: string,
     *   meta_type_key?: string,
     *   meta_query?: array,
     *   capability?: string|string[],
     *   capability__in?: string[],
     *   capability__not_in?: string[],
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
     *   fields?: string|string[],
     *   who?: string,
     *   has_published_posts?: bool|string[],
     *   nicename?: string,
     *   nicename__in?: string[],
     *   nicename__not_in?: string[],
     *   login?: string,
     *   login__in?: string[],
     *   login__not_in?: string[],
     *   cache_results?: bool,
     * } $query See WP_User_Query::prepare_query()
     */
    public function __construct($query = \null)
    {
    }
    /**
     * Fills in missing query variables with default values.
     *
     * @since 4.4.0
     *
     * @param string|array $args Query vars, as passed to `WP_User_Query`.
     * @return array Complete query variables with undefined ones filled in with defaults.
     */
    public static function fill_query_vars($args)
    {
    }
    /**
     * Prepares the query variables.
     *
     * @since 3.1.0
     * @since 4.1.0 Added the ability to order by the `include` value.
     * @since 4.2.0 Added 'meta_value_num' support for `$orderby` parameter. Added multi-dimensional array syntax
     *              for `$orderby` parameter.
     * @since 4.3.0 Added 'has_published_posts' parameter.
     * @since 4.4.0 Added 'paged', 'role__in', and 'role__not_in' parameters. The 'role' parameter was updated to
     *              permit an array or comma-separated list of values. The 'number' parameter was updated to support
     *              querying for all users with using -1.
     * @since 4.7.0 Added 'nicename', 'nicename__in', 'nicename__not_in', 'login', 'login__in',
     *              and 'login__not_in' parameters.
     * @since 5.1.0 Introduced the 'meta_compare_key' parameter.
     * @since 5.3.0 Introduced the 'meta_type_key' parameter.
     * @since 5.9.0 Added 'capability', 'capability__in', and 'capability__not_in' parameters.
     *              Deprecated the 'who' parameter.
     * @since 6.3.0 Added 'cache_results' parameter.
     *
     * @global wpdb     $wpdb     WordPress database abstraction object.
     * @global WP_Roles $wp_roles WordPress role management object.
     *
     * @param string|array $query {
     *     Optional. Array or string of query parameters.
     *
     *     @type int             $blog_id             The site ID. Default is the current site.
     *     @type string|string[] $role                An array or a comma-separated list of role names that users
     *                                                must match to be included in results. Note that this is
     *                                                an inclusive list: users must match *each* role. Default empty.
     *     @type string[]        $role__in            An array of role names. Matched users must have at least one
     *                                                of these roles. Default empty array.
     *     @type string[]        $role__not_in        An array of role names to exclude. Users matching one or more
     *                                                of these roles will not be included in results. Default empty array.
     *     @type string|string[] $meta_key            Meta key or keys to filter by.
     *     @type string|string[] $meta_value          Meta value or values to filter by.
     *     @type string          $meta_compare        MySQL operator used for comparing the meta value.
     *                                                See WP_Meta_Query::__construct() for accepted values and default value.
     *     @type string          $meta_compare_key    MySQL operator used for comparing the meta key.
     *                                                See WP_Meta_Query::__construct() for accepted values and default value.
     *     @type string          $meta_type           MySQL data type that the meta_value column will be CAST to for comparisons.
     *                                                See WP_Meta_Query::__construct() for accepted values and default value.
     *     @type string          $meta_type_key       MySQL data type that the meta_key column will be CAST to for comparisons.
     *                                                See WP_Meta_Query::__construct() for accepted values and default value.
     *     @type array           $meta_query          An associative array of WP_Meta_Query arguments.
     *                                                See WP_Meta_Query::__construct() for accepted values.
     *     @type string|string[] $capability          An array or a comma-separated list of capability names that users
     *                                                must match to be included in results. Note that this is
     *                                                an inclusive list: users must match *each* capability.
     *                                                Does NOT work for capabilities not in the database or filtered
     *                                                via {@see 'map_meta_cap'}. Default empty.
     *     @type string[]        $capability__in      An array of capability names. Matched users must have at least one
     *                                                of these capabilities.
     *                                                Does NOT work for capabilities not in the database or filtered
     *                                                via {@see 'map_meta_cap'}. Default empty array.
     *     @type string[]        $capability__not_in  An array of capability names to exclude. Users matching one or more
     *                                                of these capabilities will not be included in results.
     *                                                Does NOT work for capabilities not in the database or filtered
     *                                                via {@see 'map_meta_cap'}. Default empty array.
     *     @type int[]           $include             An array of user IDs to include. Default empty array.
     *     @type int[]           $exclude             An array of user IDs to exclude. Default empty array.
     *     @type string          $search              Search keyword. Searches for possible string matches on columns.
     *                                                When `$search_columns` is left empty, it tries to determine which
     *                                                column to search in based on search string. Default empty.
     *     @type string[]        $search_columns      Array of column names to be searched. Accepts 'ID', 'user_login',
     *                                                'user_email', 'user_url', 'user_nicename', 'display_name'.
     *                                                Default empty array.
     *     @type string|array    $orderby             Field(s) to sort the retrieved users by. May be a single value,
     *                                                an array of values, or a multi-dimensional array with fields as
     *                                                keys and orders ('ASC' or 'DESC') as values. Accepted values are:
     *                                                - 'ID'
     *                                                - 'display_name' (or 'name')
     *                                                - 'include'
     *                                                - 'user_login' (or 'login')
     *                                                - 'login__in'
     *                                                - 'user_nicename' (or 'nicename')
     *                                                - 'nicename__in'
     *                                                - 'user_email' (or 'email')
     *                                                - 'user_url' (or 'url')
     *                                                - 'user_registered' (or 'registered')
     *                                                - 'post_count'
     *                                                - 'meta_value'
     *                                                - 'meta_value_num'
     *                                                - The value of `$meta_key`
     *                                                - An array key of `$meta_query`
     *                                                To use 'meta_value' or 'meta_value_num', `$meta_key`
     *                                                must be also be defined. Default 'user_login'.
     *     @type string          $order               Designates ascending or descending order of users. Order values
     *                                                passed as part of an `$orderby` array take precedence over this
     *                                                parameter. Accepts 'ASC', 'DESC'. Default 'ASC'.
     *     @type int             $offset              Number of users to offset in retrieved results. Can be used in
     *                                                conjunction with pagination. Default 0.
     *     @type int             $number              Number of users to limit the query for. Can be used in
     *                                                conjunction with pagination. Value -1 (all) is supported, but
     *                                                should be used with caution on larger sites.
     *                                                Default -1 (all users).
     *     @type int             $paged               When used with number, defines the page of results to return.
     *                                                Default 1.
     *     @type bool            $count_total         Whether to count the total number of users found. If pagination
     *                                                is not needed, setting this to false can improve performance.
     *                                                Default true.
     *     @type string|string[] $fields              Which fields to return. Single or all fields (string), or array
     *                                                of fields. Accepts:
     *                                                - 'ID'
     *                                                - 'display_name'
     *                                                - 'user_login'
     *                                                - 'user_nicename'
     *                                                - 'user_email'
     *                                                - 'user_url'
     *                                                - 'user_registered'
     *                                                - 'user_pass'
     *                                                - 'user_activation_key'
     *                                                - 'user_status'
     *                                                - 'spam' (only available on multisite installs)
     *                                                - 'deleted' (only available on multisite installs)
     *                                                - 'all' for all fields and loads user meta.
     *                                                - 'all_with_meta' Deprecated. Use 'all'.
     *                                                Default 'all'.
     *     @type string          $who                 Deprecated, use `$capability` instead.
     *                                                Type of users to query. Accepts 'authors'.
     *                                                Default empty (all users).
     *     @type bool|string[]   $has_published_posts Pass an array of post types to filter results to users who have
     *                                                published posts in those post types. `true` is an alias for all
     *                                                public post types.
     *     @type string          $nicename            The user nicename. Default empty.
     *     @type string[]        $nicename__in        An array of nicenames to include. Users matching one of these
     *                                                nicenames will be included in results. Default empty array.
     *     @type string[]        $nicename__not_in    An array of nicenames to exclude. Users matching one of these
     *                                                nicenames will not be included in results. Default empty array.
     *     @type string          $login               The user login. Default empty.
     *     @type string[]        $login__in           An array of logins to include. Users matching one of these
     *                                                logins will be included in results. Default empty array.
     *     @type string[]        $login__not_in       An array of logins to exclude. Users matching one of these
     *                                                logins will not be included in results. Default empty array.
     *     @type bool            $cache_results       Whether to cache user information. Default true.
     * }
     * @phpstan-param array{
     *   blog_id?: int,
     *   role?: string|string[],
     *   role__in?: string[],
     *   role__not_in?: string[],
     *   meta_key?: string|string[],
     *   meta_value?: string|string[],
     *   meta_compare?: string,
     *   meta_compare_key?: string,
     *   meta_type?: string,
     *   meta_type_key?: string,
     *   meta_query?: array,
     *   capability?: string|string[],
     *   capability__in?: string[],
     *   capability__not_in?: string[],
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
     *   fields?: string|string[],
     *   who?: string,
     *   has_published_posts?: bool|string[],
     *   nicename?: string,
     *   nicename__in?: string[],
     *   nicename__not_in?: string[],
     *   login?: string,
     *   login__in?: string[],
     *   login__not_in?: string[],
     *   cache_results?: bool,
     * } $query
     */
    public function prepare_query($query = array())
    {
    }
    /**
     * Executes the query, with the current variables.
     *
     * @since 3.1.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     * @phpstan-return void
     */
    public function query()
    {
    }
    /**
     * Retrieves query variable.
     *
     * @since 3.5.0
     *
     * @param string $query_var Query variable key.
     * @return mixed
     */
    public function get($query_var)
    {
    }
    /**
     * Sets query variable.
     *
     * @since 3.5.0
     *
     * @param string $query_var Query variable key.
     * @param mixed  $value     Query variable value.
     */
    public function set($query_var, $value)
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
     * @param bool     $wild    Whether to allow wildcard searches. Default is false for Network Admin, true for single site.
     *                          Single site allows leading and trailing wildcards, Network Admin only trailing.
     * @return string
     */
    protected function get_search_sql($search, $columns, $wild = \false)
    {
    }
    /**
     * Returns the list of users.
     *
     * @since 3.1.0
     *
     * @return array Array of results.
     */
    public function get_results()
    {
    }
    /**
     * Returns the total number of users for the current query.
     *
     * @since 3.1.0
     *
     * @return int Number of total users.
     */
    public function get_total()
    {
    }
    /**
     * Parses and sanitizes 'orderby' keys passed to the user query.
     *
     * @since 4.2.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param string $orderby Alias for the field to order by.
     * @return string Value to used in the ORDER clause, if `$orderby` is valid.
     */
    protected function parse_orderby($orderby)
    {
    }
    /**
     * Generate cache key.
     *
     * @since 6.3.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param array  $args Query arguments.
     * @param string $sql  SQL statement.
     * @return string Cache key.
     */
    protected function generate_cache_key(array $args, $sql)
    {
    }
    /**
     * Parses an 'order' query variable and casts it to ASC or DESC as necessary.
     *
     * @since 4.2.0
     *
     * @param string $order The 'order' query variable.
     * @return string The sanitized 'order' query variable.
     */
    protected function parse_order($order)
    {
    }
    /**
     * Makes private properties readable for backward compatibility.
     *
     * @since 4.0.0
     * @since 6.4.0 Getting a dynamic property is deprecated.
     *
     * @param string $name Property to get.
     * @return mixed Property.
     */
    public function __get($name)
    {
    }
    /**
     * Makes private properties settable for backward compatibility.
     *
     * @since 4.0.0
     * @since 6.4.0 Setting a dynamic property is deprecated.
     *
     * @param string $name  Property to check if set.
     * @param mixed  $value Property value.
     * @phpstan-return void
     */
    public function __set($name, $value)
    {
    }
    /**
     * Makes private properties checkable for backward compatibility.
     *
     * @since 4.0.0
     * @since 6.4.0 Checking a dynamic property is deprecated.
     *
     * @param string $name Property to check if set.
     * @return bool Whether the property is set.
     */
    public function __isset($name)
    {
    }
    /**
     * Makes private properties un-settable for backward compatibility.
     *
     * @since 4.0.0
     * @since 6.4.0 Unsetting a dynamic property is deprecated.
     *
     * @param string $name Property to unset.
     * @phpstan-return void
     */
    public function __unset($name)
    {
    }
    /**
     * Makes private/protected methods readable for backward compatibility.
     *
     * @since 4.0.0
     *
     * @param string $name      Method to call.
     * @param array  $arguments Arguments to pass when calling.
     * @return mixed Return value of the callback, false otherwise.
     */
    public function __call($name, $arguments)
    {
    }
}