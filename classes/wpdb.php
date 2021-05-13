<?php


/**
 * WordPress Database Access Abstraction Object
 *
 * It is possible to replace this class with your own
 * by setting the $wpdb global variable in wp-content/db.php
 * file to your class. The wpdb class will still be included,
 * so you can extend it or simply use your own.
 *
 * @link https://codex.wordpress.org/Function_Reference/wpdb_Class
 *
 * @since 0.71
 */
class wpdb
{
    /**
     * Whether to show SQL/DB errors.
     *
     * Default behavior is to show errors if both WP_DEBUG and WP_DEBUG_DISPLAY
     * evaluated to true.
     *
     * @since 0.71
     * @var bool
     */
    var $show_errors = \false;
    /**
     * Whether to suppress errors during the DB bootstrapping.
     *
     * @since 2.5.0
     * @var bool
     */
    var $suppress_errors = \false;
    /**
     * The last error during query.
     *
     * @since 2.5.0
     * @var string
     */
    public $last_error = '';
    /**
     * Amount of queries made
     *
     * @since 1.2.0
     * @var int
     */
    public $num_queries = 0;
    /**
     * Count of rows returned by previous query
     *
     * @since 0.71
     * @var int
     */
    public $num_rows = 0;
    /**
     * Count of affected rows by previous query
     *
     * @since 0.71
     * @var int
     */
    var $rows_affected = 0;
    /**
     * The ID generated for an AUTO_INCREMENT column by the previous query (usually INSERT).
     *
     * @since 0.71
     * @var int
     */
    public $insert_id = 0;
    /**
     * Last query made
     *
     * @since 0.71
     * @var array
     */
    var $last_query;
    /**
     * Results of the last query made
     *
     * @since 0.71
     * @var array|null
     */
    var $last_result;
    /**
     * MySQL result, which is either a resource or boolean.
     *
     * @since 0.71
     * @var mixed
     */
    protected $result;
    /**
     * Cached column info, for sanity checking data before inserting
     *
     * @since 4.2.0
     * @var array
     */
    protected $col_meta = array();
    /**
     * Calculated character sets on tables
     *
     * @since 4.2.0
     * @var array
     */
    protected $table_charset = array();
    /**
     * Whether text fields in the current query need to be sanity checked.
     *
     * @since 4.2.0
     * @var bool
     */
    protected $check_current_query = \true;
    /**
     * Flag to ensure we don't run into recursion problems when checking the collation.
     *
     * @since 4.2.0
     * @see wpdb::check_safe_collation()
     * @var bool
     */
    private $checking_collation = \false;
    /**
     * Saved info on the table column
     *
     * @since 0.71
     * @var array
     */
    protected $col_info;
    /**
     * Saved queries that were executed
     *
     * @since 1.5.0
     * @var array
     */
    var $queries;
    /**
     * The number of times to retry reconnecting before dying.
     *
     * @since 3.9.0
     * @see wpdb::check_connection()
     * @var int
     */
    protected $reconnect_retries = 5;
    /**
     * WordPress table prefix
     *
     * You can set this to have multiple WordPress installations
     * in a single database. The second reason is for possible
     * security precautions.
     *
     * @since 2.5.0
     * @var string
     */
    public $prefix = '';
    /**
     * WordPress base table prefix.
     *
     * @since 3.0.0
     * @var string
     */
    public $base_prefix;
    /**
     * Whether the database queries are ready to start executing.
     *
     * @since 2.3.2
     * @var bool
     */
    var $ready = \false;
    /**
     * Blog ID.
     *
     * @since 3.0.0
     * @var int
     */
    public $blogid = 0;
    /**
     * Site ID.
     *
     * @since 3.0.0
     * @var int
     */
    public $siteid = 0;
    /**
     * List of WordPress per-blog tables
     *
     * @since 2.5.0
     * @see wpdb::tables()
     * @var array
     */
    var $tables = array('posts', 'comments', 'links', 'options', 'postmeta', 'terms', 'term_taxonomy', 'term_relationships', 'termmeta', 'commentmeta');
    /**
     * List of deprecated WordPress tables
     *
     * categories, post2cat, and link2cat were deprecated in 2.3.0, db version 5539
     *
     * @since 2.9.0
     * @see wpdb::tables()
     * @var array
     */
    var $old_tables = array('categories', 'post2cat', 'link2cat');
    /**
     * List of WordPress global tables
     *
     * @since 3.0.0
     * @see wpdb::tables()
     * @var array
     */
    var $global_tables = array('users', 'usermeta');
    /**
     * List of Multisite global tables
     *
     * @since 3.0.0
     * @see wpdb::tables()
     * @var array
     */
    var $ms_global_tables = array('blogs', 'signups', 'site', 'sitemeta', 'sitecategories', 'registration_log', 'blog_versions');
    /**
     * WordPress Comments table
     *
     * @since 1.5.0
     * @var string
     */
    public $comments;
    /**
     * WordPress Comment Metadata table
     *
     * @since 2.9.0
     * @var string
     */
    public $commentmeta;
    /**
     * WordPress Links table
     *
     * @since 1.5.0
     * @var string
     */
    public $links;
    /**
     * WordPress Options table
     *
     * @since 1.5.0
     * @var string
     */
    public $options;
    /**
     * WordPress Post Metadata table
     *
     * @since 1.5.0
     * @var string
     */
    public $postmeta;
    /**
     * WordPress Posts table
     *
     * @since 1.5.0
     * @var string
     */
    public $posts;
    /**
     * WordPress Terms table
     *
     * @since 2.3.0
     * @var string
     */
    public $terms;
    /**
     * WordPress Term Relationships table
     *
     * @since 2.3.0
     * @var string
     */
    public $term_relationships;
    /**
     * WordPress Term Taxonomy table
     *
     * @since 2.3.0
     * @var string
     */
    public $term_taxonomy;
    /**
     * WordPress Term Meta table.
     *
     * @since 4.4.0
     * @var string
     */
    public $termmeta;
    //
    // Global and Multisite tables
    //
    /**
     * WordPress User Metadata table
     *
     * @since 2.3.0
     * @var string
     */
    public $usermeta;
    /**
     * WordPress Users table
     *
     * @since 1.5.0
     * @var string
     */
    public $users;
    /**
     * Multisite Blogs table
     *
     * @since 3.0.0
     * @var string
     */
    public $blogs;
    /**
     * Multisite Blog Versions table
     *
     * @since 3.0.0
     * @var string
     */
    public $blog_versions;
    /**
     * Multisite Registration Log table
     *
     * @since 3.0.0
     * @var string
     */
    public $registration_log;
    /**
     * Multisite Signups table
     *
     * @since 3.0.0
     * @var string
     */
    public $signups;
    /**
     * Multisite Sites table
     *
     * @since 3.0.0
     * @var string
     */
    public $site;
    /**
     * Multisite Sitewide Terms table
     *
     * @since 3.0.0
     * @var string
     */
    public $sitecategories;
    /**
     * Multisite Site Metadata table
     *
     * @since 3.0.0
     * @var string
     */
    public $sitemeta;
    /**
     * Format specifiers for DB columns. Columns not listed here default to %s. Initialized during WP load.
     *
     * Keys are column names, values are format types: 'ID' => '%d'
     *
     * @since 2.8.0
     * @see wpdb::prepare()
     * @see wpdb::insert()
     * @see wpdb::update()
     * @see wpdb::delete()
     * @see wp_set_wpdb_vars()
     * @var array
     */
    public $field_types = array();
    /**
     * Database table columns charset
     *
     * @since 2.2.0
     * @var string
     */
    public $charset;
    /**
     * Database table columns collate
     *
     * @since 2.2.0
     * @var string
     */
    public $collate;
    /**
     * Database Username
     *
     * @since 2.9.0
     * @var string
     */
    protected $dbuser;
    /**
     * Database Password
     *
     * @since 3.1.0
     * @var string
     */
    protected $dbpassword;
    /**
     * Database Name
     *
     * @since 3.1.0
     * @var string
     */
    protected $dbname;
    /**
     * Database Host
     *
     * @since 3.1.0
     * @var string
     */
    protected $dbhost;
    /**
     * Database Handle
     *
     * @since 0.71
     * @var string
     */
    protected $dbh;
    /**
     * A textual description of the last query/get_row/get_var call
     *
     * @since 3.0.0
     * @var string
     */
    public $func_call;
    /**
     * Whether MySQL is used as the database engine.
     *
     * Set in WPDB::db_connect() to true, by default. This is used when checking
     * against the required MySQL version for WordPress. Normally, a replacement
     * database drop-in (db.php) will skip these checks, but setting this to true
     * will force the checks to occur.
     *
     * @since 3.3.0
     * @var bool
     */
    public $is_mysql = \null;
    /**
     * A list of incompatible SQL modes.
     *
     * @since 3.9.0
     * @var array
     */
    protected $incompatible_modes = array('NO_ZERO_DATE', 'ONLY_FULL_GROUP_BY', 'STRICT_TRANS_TABLES', 'STRICT_ALL_TABLES', 'TRADITIONAL');
    /**
     * Whether to use mysqli over mysql.
     *
     * @since 3.9.0
     * @var bool
     */
    private $use_mysqli = \false;
    /**
     * Whether we've managed to successfully connect at some point
     *
     * @since 3.9.0
     * @var bool
     */
    private $has_connected = \false;
    /**
     * Connects to the database server and selects a database
     *
     * PHP5 style constructor for compatibility with PHP5. Does
     * the actual setting up of the class properties and connection
     * to the database.
     *
     * @link https://core.trac.wordpress.org/ticket/3354
     * @since 2.0.8
     *
     * @global string $wp_version
     *
     * @param string $dbuser     MySQL database user
     * @param string $dbpassword MySQL database password
     * @param string $dbname     MySQL database name
     * @param string $dbhost     MySQL database host
     */
    public function __construct($dbuser, $dbpassword, $dbname, $dbhost)
    {
    }
    /**
     * PHP5 style destructor and will run when database object is destroyed.
     *
     * @see wpdb::__construct()
     * @since 2.0.8
     * @return true
     */
    public function __destruct()
    {
    }
    /**
     * Makes private properties readable for backward compatibility.
     *
     * @since 3.5.0
     *
     * @param string $name The private member to get, and optionally process
     * @return mixed The private member
     */
    public function __get($name)
    {
    }
    /**
     * Makes private properties settable for backward compatibility.
     *
     * @since 3.5.0
     *
     * @param string $name  The private member to set
     * @param mixed  $value The value to set
     */
    public function __set($name, $value)
    {
    }
    /**
     * Makes private properties check-able for backward compatibility.
     *
     * @since 3.5.0
     *
     * @param string $name  The private member to check
     *
     * @return bool If the member is set or not
     */
    public function __isset($name)
    {
    }
    /**
     * Makes private properties un-settable for backward compatibility.
     *
     * @since 3.5.0
     *
     * @param string $name  The private member to unset
     */
    public function __unset($name)
    {
    }
    /**
     * Set $this->charset and $this->collate
     *
     * @since 3.1.0
     */
    public function init_charset()
    {
    }
    /**
     * Determines the best charset and collation to use given a charset and collation.
     *
     * For example, when able, utf8mb4 should be used instead of utf8.
     *
     * @since 4.6.0
     *
     * @param string $charset The character set to check.
     * @param string $collate The collation to check.
     * @return array The most appropriate character set and collation to use.
     */
    public function determine_charset($charset, $collate)
    {
    }
    /**
     * Sets the connection's character set.
     *
     * @since 3.1.0
     *
     * @param resource $dbh     The resource given by mysql_connect
     * @param string   $charset Optional. The character set. Default null.
     * @param string   $collate Optional. The collation. Default null.
     */
    public function set_charset($dbh, $charset = \null, $collate = \null)
    {
    }
    /**
     * Change the current SQL mode, and ensure its WordPress compatibility.
     *
     * If no modes are passed, it will ensure the current MySQL server
     * modes are compatible.
     *
     * @since 3.9.0
     *
     * @param array $modes Optional. A list of SQL modes to set.
     */
    public function set_sql_mode($modes = array())
    {
    }
    /**
     * Sets the table prefix for the WordPress tables.
     *
     * @since 2.5.0
     *
     * @param string $prefix          Alphanumeric name for the new prefix.
     * @param bool   $set_table_names Optional. Whether the table names, e.g. wpdb::$posts, should be updated or not.
     * @return string|WP_Error Old prefix or WP_Error on error
     */
    public function set_prefix($prefix, $set_table_names = \true)
    {
    }
    /**
     * Sets blog id.
     *
     * @since 3.0.0
     *
     * @param int $blog_id
     * @param int $network_id Optional.
     * @return int previous blog id
     */
    public function set_blog_id($blog_id, $network_id = 0)
    {
    }
    /**
     * Gets blog prefix.
     *
     * @since 3.0.0
     * @param int $blog_id Optional.
     * @return string Blog prefix.
     */
    public function get_blog_prefix($blog_id = \null)
    {
    }
    /**
     * Returns an array of WordPress tables.
     *
     * Also allows for the CUSTOM_USER_TABLE and CUSTOM_USER_META_TABLE to
     * override the WordPress users and usermeta tables that would otherwise
     * be determined by the prefix.
     *
     * The scope argument can take one of the following:
     *
     * 'all' - returns 'all' and 'global' tables. No old tables are returned.
     * 'blog' - returns the blog-level tables for the queried blog.
     * 'global' - returns the global tables for the installation, returning multisite tables only if running multisite.
     * 'ms_global' - returns the multisite global tables, regardless if current installation is multisite.
     * 'old' - returns tables which are deprecated.
     *
     * @since 3.0.0
     * @uses wpdb::$tables
     * @uses wpdb::$old_tables
     * @uses wpdb::$global_tables
     * @uses wpdb::$ms_global_tables
     *
     * @param string $scope   Optional. Can be all, global, ms_global, blog, or old tables. Defaults to all.
     * @param bool   $prefix  Optional. Whether to include table prefixes. Default true. If blog
     *                        prefix is requested, then the custom users and usermeta tables will be mapped.
     * @param int    $blog_id Optional. The blog_id to prefix. Defaults to wpdb::$blogid. Used only when prefix is requested.
     * @return array Table names. When a prefix is requested, the key is the unprefixed table name.
     */
    public function tables($scope = 'all', $prefix = \true, $blog_id = 0)
    {
    }
    /**
     * Selects a database using the current database connection.
     *
     * The database name will be changed based on the current database
     * connection. On failure, the execution will bail and display an DB error.
     *
     * @since 0.71
     *
     * @param string        $db  MySQL database name
     * @param resource|null $dbh Optional link identifier.
     */
    public function select($db, $dbh = \null)
    {
    }
    /**
     * Do not use, deprecated.
     *
     * Use esc_sql() or wpdb::prepare() instead.
     *
     * @since 2.8.0
     * @deprecated 3.6.0 Use wpdb::prepare()
     * @see wpdb::prepare
     * @see esc_sql()
     *
     * @param string $string
     * @return string
     */
    function _weak_escape($string)
    {
    }
    /**
     * Real escape, using mysqli_real_escape_string() or mysql_real_escape_string()
     *
     * @see mysqli_real_escape_string()
     * @see mysql_real_escape_string()
     * @since 2.8.0
     *
     * @param  string $string to escape
     * @return string escaped
     */
    function _real_escape($string)
    {
    }
    /**
     * Escape data. Works on arrays.
     *
     * @uses wpdb::_real_escape()
     * @since  2.8.0
     *
     * @param  string|array $data
     * @return string|array escaped
     */
    public function _escape($data)
    {
    }
    /**
     * Do not use, deprecated.
     *
     * Use esc_sql() or wpdb::prepare() instead.
     *
     * @since 0.71
     * @deprecated 3.6.0 Use wpdb::prepare()
     * @see wpdb::prepare()
     * @see esc_sql()
     *
     * @param mixed $data
     * @return mixed
     */
    public function escape($data)
    {
    }
    /**
     * Escapes content by reference for insertion into the database, for security
     *
     * @uses wpdb::_real_escape()
     *
     * @since 2.3.0
     *
     * @param string $string to escape
     */
    public function escape_by_ref(&$string)
    {
    }
    /**
     * Prepares a SQL query for safe execution. Uses sprintf()-like syntax.
     *
     * The following placeholders can be used in the query string:
     *   %d (integer)
     *   %f (float)
     *   %s (string)
     *
     * All placeholders MUST be left unquoted in the query string. A corresponding argument MUST be passed for each placeholder.
     *
     * For compatibility with old behavior, numbered or formatted string placeholders (eg, %1$s, %5s) will not have quotes
     * added by this function, so should be passed with appropriate quotes around them for your usage.
     *
     * Literal percentage signs (%) in the query string must be written as %%. Percentage wildcards (for example,
     * to use in LIKE syntax) must be passed via a substitution argument containing the complete LIKE string, these
     * cannot be inserted directly in the query string. Also see {@see esc_like()}.
     *
     * Arguments may be passed as individual arguments to the method, or as a single array containing all arguments. A combination
     * of the two is not supported.
     *
     * Examples:
     *     $wpdb->prepare( "SELECT * FROM `table` WHERE `column` = %s AND `field` = %d OR `other_field` LIKE %s", array( 'foo', 1337, '%bar' ) );
     *     $wpdb->prepare( "SELECT DATE_FORMAT(`field`, '%%c') FROM `table` WHERE `column` = %s", 'foo' );
     *
     * @link https://secure.php.net/sprintf Description of syntax.
     * @since 2.3.0
     *
     * @param string      $query    Query statement with sprintf()-like placeholders
     * @param array|mixed $args     The array of variables to substitute into the query's placeholders if being called with an array of arguments,
     *                              or the first variable to substitute into the query's placeholders if being called with individual arguments.
     * @param mixed       $args,... further variables to substitute into the query's placeholders if being called wih individual arguments.
     * @return string|void Sanitized query string, if there is a query to prepare.
     */
    public function prepare($query, $args)
    {
    }
    /**
     * First half of escaping for LIKE special characters % and _ before preparing for MySQL.
     *
     * Use this only before wpdb::prepare() or esc_sql().  Reversing the order is very bad for security.
     *
     * Example Prepared Statement:
     *
     *     $wild = '%';
     *     $find = 'only 43% of planets';
     *     $like = $wild . $wpdb->esc_like( $find ) . $wild;
     *     $sql  = $wpdb->prepare( "SELECT * FROM $wpdb->posts WHERE post_content LIKE %s", $like );
     *
     * Example Escape Chain:
     *
     *     $sql  = esc_sql( $wpdb->esc_like( $input ) );
     *
     * @since 4.0.0
     *
     * @param string $text The raw text to be escaped. The input typed by the user should have no
     *                     extra or deleted slashes.
     * @return string Text in the form of a LIKE phrase. The output is not SQL safe. Call $wpdb::prepare()
     *                or real_escape next.
     */
    public function esc_like($text)
    {
    }
    /**
     * Print SQL/DB error.
     *
     * @since 0.71
     * @global array $EZSQL_ERROR Stores error information of query and error string
     *
     * @param string $str The error to display
     * @return false|void False if the showing of errors is disabled.
     */
    public function print_error($str = '')
    {
    }
    /**
     * Enables showing of database errors.
     *
     * This function should be used only to enable showing of errors.
     * wpdb::hide_errors() should be used instead for hiding of errors. However,
     * this function can be used to enable and disable showing of database
     * errors.
     *
     * @since 0.71
     * @see wpdb::hide_errors()
     *
     * @param bool $show Whether to show or hide errors
     * @return bool Old value for showing errors.
     */
    public function show_errors($show = \true)
    {
    }
    /**
     * Disables showing of database errors.
     *
     * By default database errors are not shown.
     *
     * @since 0.71
     * @see wpdb::show_errors()
     *
     * @return bool Whether showing of errors was active
     */
    public function hide_errors()
    {
    }
    /**
     * Whether to suppress database errors.
     *
     * By default database errors are suppressed, with a simple
     * call to this function they can be enabled.
     *
     * @since 2.5.0
     * @see wpdb::hide_errors()
     * @param bool $suppress Optional. New value. Defaults to true.
     * @return bool Old value
     */
    public function suppress_errors($suppress = \true)
    {
    }
    /**
     * Kill cached query results.
     *
     * @since 0.71
     */
    public function flush()
    {
    }
    /**
     * Connect to and select database.
     *
     * If $allow_bail is false, the lack of database connection will need
     * to be handled manually.
     *
     * @since 3.0.0
     * @since 3.9.0 $allow_bail parameter added.
     *
     * @param bool $allow_bail Optional. Allows the function to bail. Default true.
     * @return bool True with a successful connection, false on failure.
     */
    public function db_connect($allow_bail = \true)
    {
    }
    /**
     * Parse the DB_HOST setting to interpret it for mysqli_real_connect.
     *
     * mysqli_real_connect doesn't support the host param including a port or
     * socket like mysql_connect does. This duplicates how mysql_connect detects
     * a port and/or socket file.
     *
     * @since 4.9.0
     *
     * @param string $host The DB_HOST setting to parse.
     * @return array|bool Array containing the host, the port, the socket and whether
     *                    it is an IPv6 address, in that order. If $host couldn't be parsed,
     *                    returns false.
     */
    public function parse_db_host($host)
    {
    }
    /**
     * Checks that the connection to the database is still up. If not, try to reconnect.
     *
     * If this function is unable to reconnect, it will forcibly die, or if after the
     * the {@see 'template_redirect'} hook has been fired, return false instead.
     *
     * If $allow_bail is false, the lack of database connection will need
     * to be handled manually.
     *
     * @since 3.9.0
     *
     * @param bool $allow_bail Optional. Allows the function to bail. Default true.
     * @return bool|void True if the connection is up.
     */
    public function check_connection($allow_bail = \true)
    {
    }
    /**
     * Perform a MySQL database query, using current database connection.
     *
     * More information can be found on the codex page.
     *
     * @since 0.71
     *
     * @param string $query Database query
     * @return int|false Number of rows affected/selected or false on error
     */
    public function query($query)
    {
    }
    /**
     * Internal function to perform the mysql_query() call.
     *
     * @since 3.9.0
     *
     * @see wpdb::query()
     *
     * @param string $query The query to run.
     */
    private function _do_query($query)
    {
    }
    /**
     * Generates and returns a placeholder escape string for use in queries returned by ::prepare().
     *
     * @since 4.8.3
     *
     * @return string String to escape placeholders.
     */
    public function placeholder_escape()
    {
    }
    /**
     * Adds a placeholder escape string, to escape anything that resembles a printf() placeholder.
     *
     * @since 4.8.3
     *
     * @param string $query The query to escape.
     * @return string The query with the placeholder escape string inserted where necessary.
     */
    public function add_placeholder_escape($query)
    {
    }
    /**
     * Removes the placeholder escape strings from a query.
     *
     * @since 4.8.3
     *
     * @param string $query The query from which the placeholder will be removed.
     * @return string The query with the placeholder removed.
     */
    public function remove_placeholder_escape($query)
    {
    }
    /**
     * Insert a row into a table.
     *
     *     wpdb::insert( 'table', array( 'column' => 'foo', 'field' => 'bar' ) )
     *     wpdb::insert( 'table', array( 'column' => 'foo', 'field' => 1337 ), array( '%s', '%d' ) )
     *
     * @since 2.5.0
     * @see wpdb::prepare()
     * @see wpdb::$field_types
     * @see wp_set_wpdb_vars()
     *
     * @param string       $table  Table name
     * @param array        $data   Data to insert (in column => value pairs).
     *                             Both $data columns and $data values should be "raw" (neither should be SQL escaped).
     *                             Sending a null value will cause the column to be set to NULL - the corresponding format is ignored in this case.
     * @param array|string $format Optional. An array of formats to be mapped to each of the value in $data.
     *                             If string, that format will be used for all of the values in $data.
     *                             A format is one of '%d', '%f', '%s' (integer, float, string).
     *                             If omitted, all values in $data will be treated as strings unless otherwise specified in wpdb::$field_types.
     * @return int|false The number of rows inserted, or false on error.
     */
    public function insert($table, $data, $format = \null)
    {
    }
    /**
     * Replace a row into a table.
     *
     *     wpdb::replace( 'table', array( 'column' => 'foo', 'field' => 'bar' ) )
     *     wpdb::replace( 'table', array( 'column' => 'foo', 'field' => 1337 ), array( '%s', '%d' ) )
     *
     * @since 3.0.0
     * @see wpdb::prepare()
     * @see wpdb::$field_types
     * @see wp_set_wpdb_vars()
     *
     * @param string       $table  Table name
     * @param array        $data   Data to insert (in column => value pairs).
     *                             Both $data columns and $data values should be "raw" (neither should be SQL escaped).
     *                             Sending a null value will cause the column to be set to NULL - the corresponding format is ignored in this case.
     * @param array|string $format Optional. An array of formats to be mapped to each of the value in $data.
     *                             If string, that format will be used for all of the values in $data.
     *                             A format is one of '%d', '%f', '%s' (integer, float, string).
     *                             If omitted, all values in $data will be treated as strings unless otherwise specified in wpdb::$field_types.
     * @return int|false The number of rows affected, or false on error.
     */
    public function replace($table, $data, $format = \null)
    {
    }
    /**
     * Helper function for insert and replace.
     *
     * Runs an insert or replace query based on $type argument.
     *
     * @since 3.0.0
     * @see wpdb::prepare()
     * @see wpdb::$field_types
     * @see wp_set_wpdb_vars()
     *
     * @param string       $table  Table name
     * @param array        $data   Data to insert (in column => value pairs).
     *                             Both $data columns and $data values should be "raw" (neither should be SQL escaped).
     *                             Sending a null value will cause the column to be set to NULL - the corresponding format is ignored in this case.
     * @param array|string $format Optional. An array of formats to be mapped to each of the value in $data.
     *                             If string, that format will be used for all of the values in $data.
     *                             A format is one of '%d', '%f', '%s' (integer, float, string).
     *                             If omitted, all values in $data will be treated as strings unless otherwise specified in wpdb::$field_types.
     * @param string $type         Optional. What type of operation is this? INSERT or REPLACE. Defaults to INSERT.
     * @return int|false The number of rows affected, or false on error.
     */
    function _insert_replace_helper($table, $data, $format = \null, $type = 'INSERT')
    {
    }
    /**
     * Update a row in the table
     *
     *     wpdb::update( 'table', array( 'column' => 'foo', 'field' => 'bar' ), array( 'ID' => 1 ) )
     *     wpdb::update( 'table', array( 'column' => 'foo', 'field' => 1337 ), array( 'ID' => 1 ), array( '%s', '%d' ), array( '%d' ) )
     *
     * @since 2.5.0
     * @see wpdb::prepare()
     * @see wpdb::$field_types
     * @see wp_set_wpdb_vars()
     *
     * @param string       $table        Table name
     * @param array        $data         Data to update (in column => value pairs).
     *                                   Both $data columns and $data values should be "raw" (neither should be SQL escaped).
     *                                   Sending a null value will cause the column to be set to NULL - the corresponding
     *                                   format is ignored in this case.
     * @param array        $where        A named array of WHERE clauses (in column => value pairs).
     *                                   Multiple clauses will be joined with ANDs.
     *                                   Both $where columns and $where values should be "raw".
     *                                   Sending a null value will create an IS NULL comparison - the corresponding format will be ignored in this case.
     * @param array|string $format       Optional. An array of formats to be mapped to each of the values in $data.
     *                                   If string, that format will be used for all of the values in $data.
     *                                   A format is one of '%d', '%f', '%s' (integer, float, string).
     *                                   If omitted, all values in $data will be treated as strings unless otherwise specified in wpdb::$field_types.
     * @param array|string $where_format Optional. An array of formats to be mapped to each of the values in $where.
     *                                   If string, that format will be used for all of the items in $where.
     *                                   A format is one of '%d', '%f', '%s' (integer, float, string).
     *                                   If omitted, all values in $where will be treated as strings.
     * @return int|false The number of rows updated, or false on error.
     */
    public function update($table, $data, $where, $format = \null, $where_format = \null)
    {
    }
    /**
     * Delete a row in the table
     *
     *     wpdb::delete( 'table', array( 'ID' => 1 ) )
     *     wpdb::delete( 'table', array( 'ID' => 1 ), array( '%d' ) )
     *
     * @since 3.4.0
     * @see wpdb::prepare()
     * @see wpdb::$field_types
     * @see wp_set_wpdb_vars()
     *
     * @param string       $table        Table name
     * @param array        $where        A named array of WHERE clauses (in column => value pairs).
     *                                   Multiple clauses will be joined with ANDs.
     *                                   Both $where columns and $where values should be "raw".
     *                                   Sending a null value will create an IS NULL comparison - the corresponding format will be ignored in this case.
     * @param array|string $where_format Optional. An array of formats to be mapped to each of the values in $where.
     *                                   If string, that format will be used for all of the items in $where.
     *                                   A format is one of '%d', '%f', '%s' (integer, float, string).
     *                                   If omitted, all values in $where will be treated as strings unless otherwise specified in wpdb::$field_types.
     * @return int|false The number of rows updated, or false on error.
     */
    public function delete($table, $where, $where_format = \null)
    {
    }
    /**
     * Processes arrays of field/value pairs and field formats.
     *
     * This is a helper method for wpdb's CRUD methods, which take field/value
     * pairs for inserts, updates, and where clauses. This method first pairs
     * each value with a format. Then it determines the charset of that field,
     * using that to determine if any invalid text would be stripped. If text is
     * stripped, then field processing is rejected and the query fails.
     *
     * @since 4.2.0
     *
     * @param string $table  Table name.
     * @param array  $data   Field/value pair.
     * @param mixed  $format Format for each field.
     * @return array|false Returns an array of fields that contain paired values
     *                    and formats. Returns false for invalid values.
     */
    protected function process_fields($table, $data, $format)
    {
    }
    /**
     * Prepares arrays of value/format pairs as passed to wpdb CRUD methods.
     *
     * @since 4.2.0
     *
     * @param array $data   Array of fields to values.
     * @param mixed $format Formats to be mapped to the values in $data.
     * @return array Array, keyed by field names with values being an array
     *               of 'value' and 'format' keys.
     */
    protected function process_field_formats($data, $format)
    {
    }
    /**
     * Adds field charsets to field/value/format arrays generated by
     * the wpdb::process_field_formats() method.
     *
     * @since 4.2.0
     *
     * @param array  $data  As it comes from the wpdb::process_field_formats() method.
     * @param string $table Table name.
     * @return array|false The same array as $data with additional 'charset' keys.
     */
    protected function process_field_charsets($data, $table)
    {
    }
    /**
     * For string fields, record the maximum string length that field can safely save.
     *
     * @since 4.2.1
     *
     * @param array  $data  As it comes from the wpdb::process_field_charsets() method.
     * @param string $table Table name.
     * @return array|false The same array as $data with additional 'length' keys, or false if
     *                     any of the values were too long for their corresponding field.
     */
    protected function process_field_lengths($data, $table)
    {
    }
    /**
     * Retrieve one variable from the database.
     *
     * Executes a SQL query and returns the value from the SQL result.
     * If the SQL result contains more than one column and/or more than one row, this function returns the value in the column and row specified.
     * If $query is null, this function returns the value in the specified column and row from the previous SQL result.
     *
     * @since 0.71
     *
     * @param string|null $query Optional. SQL query. Defaults to null, use the result from the previous query.
     * @param int         $x     Optional. Column of value to return. Indexed from 0.
     * @param int         $y     Optional. Row of value to return. Indexed from 0.
     * @return string|null Database query result (as string), or null on failure
     */
    public function get_var($query = \null, $x = 0, $y = 0)
    {
    }
    /**
     * Retrieve one row from the database.
     *
     * Executes a SQL query and returns the row from the SQL result.
     *
     * @since 0.71
     *
     * @param string|null $query  SQL query.
     * @param string      $output Optional. The required return type. One of OBJECT, ARRAY_A, or ARRAY_N, which correspond to
     *                            an stdClass object, an associative array, or a numeric array, respectively. Default OBJECT.
     * @param int         $y      Optional. Row to return. Indexed from 0.
     * @return array|object|null|void Database query result in format specified by $output or null on failure
     */
    public function get_row($query = \null, $output = \OBJECT, $y = 0)
    {
    }
    /**
     * Retrieve one column from the database.
     *
     * Executes a SQL query and returns the column from the SQL result.
     * If the SQL result contains more than one column, this function returns the column specified.
     * If $query is null, this function returns the specified column from the previous SQL result.
     *
     * @since 0.71
     *
     * @param string|null $query Optional. SQL query. Defaults to previous query.
     * @param int         $x     Optional. Column to return. Indexed from 0.
     * @return array Database query result. Array indexed from 0 by SQL result row number.
     */
    public function get_col($query = \null, $x = 0)
    {
    }
    /**
     * Retrieve an entire SQL result set from the database (i.e., many rows)
     *
     * Executes a SQL query and returns the entire SQL result.
     *
     * @since 0.71
     *
     * @param string $query  SQL query.
     * @param string $output Optional. Any of ARRAY_A | ARRAY_N | OBJECT | OBJECT_K constants.
     *                       With one of the first three, return an array of rows indexed from 0 by SQL result row number.
     *                       Each row is an associative array (column => value, ...), a numerically indexed array (0 => value, ...), or an object. ( ->column = value ), respectively.
     *                       With OBJECT_K, return an associative array of row objects keyed by the value of each row's first column's value.
     *                       Duplicate keys are discarded.
     * @return array|object|null Database query results
     */
    public function get_results($query = \null, $output = \OBJECT)
    {
    }
    /**
     * Retrieves the character set for the given table.
     *
     * @since 4.2.0
     *
     * @param string $table Table name.
     * @return string|WP_Error Table character set, WP_Error object if it couldn't be found.
     */
    protected function get_table_charset($table)
    {
    }
    /**
     * Retrieves the character set for the given column.
     *
     * @since 4.2.0
     *
     * @param string $table  Table name.
     * @param string $column Column name.
     * @return string|false|WP_Error Column character set as a string. False if the column has no
     *                               character set. WP_Error object if there was an error.
     */
    public function get_col_charset($table, $column)
    {
    }
    /**
     * Retrieve the maximum string length allowed in a given column.
     * The length may either be specified as a byte length or a character length.
     *
     * @since 4.2.1
     *
     * @param string $table  Table name.
     * @param string $column Column name.
     * @return array|false|WP_Error array( 'length' => (int), 'type' => 'byte' | 'char' )
     *                              false if the column has no length (for example, numeric column)
     *                              WP_Error object if there was an error.
     */
    public function get_col_length($table, $column)
    {
    }
    /**
     * Check if a string is ASCII.
     *
     * The negative regex is faster for non-ASCII strings, as it allows
     * the search to finish as soon as it encounters a non-ASCII character.
     *
     * @since 4.2.0
     *
     * @param string $string String to check.
     * @return bool True if ASCII, false if not.
     */
    protected function check_ascii($string)
    {
    }
    /**
     * Check if the query is accessing a collation considered safe on the current version of MySQL.
     *
     * @since 4.2.0
     *
     * @param string $query The query to check.
     * @return bool True if the collation is safe, false if it isn't.
     */
    protected function check_safe_collation($query)
    {
    }
    /**
     * Strips any invalid characters based on value/charset pairs.
     *
     * @since 4.2.0
     *
     * @param array $data Array of value arrays. Each value array has the keys
     *                    'value' and 'charset'. An optional 'ascii' key can be
     *                    set to false to avoid redundant ASCII checks.
     * @return array|WP_Error The $data parameter, with invalid characters removed from
     *                        each value. This works as a passthrough: any additional keys
     *                        such as 'field' are retained in each value array. If we cannot
     *                        remove invalid characters, a WP_Error object is returned.
     */
    protected function strip_invalid_text($data)
    {
    }
    /**
     * Strips any invalid characters from the query.
     *
     * @since 4.2.0
     *
     * @param string $query Query to convert.
     * @return string|WP_Error The converted query, or a WP_Error object if the conversion fails.
     */
    protected function strip_invalid_text_from_query($query)
    {
    }
    /**
     * Strips any invalid characters from the string for a given table and column.
     *
     * @since 4.2.0
     *
     * @param string $table  Table name.
     * @param string $column Column name.
     * @param string $value  The text to check.
     * @return string|WP_Error The converted string, or a WP_Error object if the conversion fails.
     */
    public function strip_invalid_text_for_column($table, $column, $value)
    {
    }
    /**
     * Find the first table name referenced in a query.
     *
     * @since 4.2.0
     *
     * @param string $query The query to search.
     * @return string|false $table The table name found, or false if a table couldn't be found.
     */
    protected function get_table_from_query($query)
    {
    }
    /**
     * Load the column metadata from the last query.
     *
     * @since 3.5.0
     *
     */
    protected function load_col_info()
    {
    }
    /**
     * Retrieve column metadata from the last query.
     *
     * @since 0.71
     *
     * @param string $info_type  Optional. Type one of name, table, def, max_length, not_null, primary_key, multiple_key, unique_key, numeric, blob, type, unsigned, zerofill
     * @param int    $col_offset Optional. 0: col name. 1: which table the col's in. 2: col's max length. 3: if the col is numeric. 4: col's type
     * @return mixed Column Results
     */
    public function get_col_info($info_type = 'name', $col_offset = -1)
    {
    }
    /**
     * Starts the timer, for debugging purposes.
     *
     * @since 1.5.0
     *
     * @return true
     */
    public function timer_start()
    {
    }
    /**
     * Stops the debugging timer.
     *
     * @since 1.5.0
     *
     * @return float Total time spent on the query, in seconds
     */
    public function timer_stop()
    {
    }
    /**
     * Wraps errors in a nice header and footer and dies.
     *
     * Will not die if wpdb::$show_errors is false.
     *
     * @since 1.5.0
     *
     * @param string $message    The Error message
     * @param string $error_code Optional. A Computer readable string to identify the error.
     * @return false|void
     */
    public function bail($message, $error_code = '500')
    {
    }
    /**
     * Closes the current database connection.
     *
     * @since 4.5.0
     *
     * @return bool True if the connection was successfully closed, false if it wasn't,
     *              or the connection doesn't exist.
     */
    public function close()
    {
    }
    /**
     * Whether MySQL database is at least the required minimum version.
     *
     * @since 2.5.0
     *
     * @global string $wp_version
     * @global string $required_mysql_version
     *
     * @return WP_Error|void
     */
    public function check_database_version()
    {
    }
    /**
     * Whether the database supports collation.
     *
     * Called when WordPress is generating the table scheme.
     *
     * Use `wpdb::has_cap( 'collation' )`.
     *
     * @since 2.5.0
     * @deprecated 3.5.0 Use wpdb::has_cap()
     *
     * @return bool True if collation is supported, false if version does not
     */
    public function supports_collation()
    {
    }
    /**
     * The database character collate.
     *
     * @since 3.5.0
     *
     * @return string The database character collate.
     */
    public function get_charset_collate()
    {
    }
    /**
     * Determine if a database supports a particular feature.
     *
     * @since 2.7.0
     * @since 4.1.0 Added support for the 'utf8mb4' feature.
     * @since 4.6.0 Added support for the 'utf8mb4_520' feature.
     *
     * @see wpdb::db_version()
     *
     * @param string $db_cap The feature to check for. Accepts 'collation',
     *                       'group_concat', 'subqueries', 'set_charset',
     *                       'utf8mb4', or 'utf8mb4_520'.
     * @return int|false Whether the database feature is supported, false otherwise.
     */
    public function has_cap($db_cap)
    {
    }
    /**
     * Retrieve the name of the function that called wpdb.
     *
     * Searches up the list of functions until it reaches
     * the one that would most logically had called this method.
     *
     * @since 2.5.0
     *
     * @return string|array The name of the calling function
     */
    public function get_caller()
    {
    }
    /**
     * Retrieves the MySQL server version.
     *
     * @since 2.7.0
     *
     * @return null|string Null on failure, version number on success.
     */
    public function db_version()
    {
    }
}