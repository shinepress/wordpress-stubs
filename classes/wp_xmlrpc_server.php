<?php


/**
 * XML-RPC protocol support for WordPress
 *
 * @package WordPress
 * @subpackage Publishing
 */
/**
 * WordPress XMLRPC server implementation.
 *
 * Implements compatibility for Blogger API, MetaWeblog API, MovableType, and
 * pingback. Additional WordPress API for managing comments, pages, posts,
 * options, etc.
 *
 * As of WordPress 3.5.0, XML-RPC is enabled by default. It can be disabled
 * via the {@see 'xmlrpc_enabled'} filter found in wp_xmlrpc_server::login().
 *
 * @since 1.5.0
 *
 * @see IXR_Server
 */
class wp_xmlrpc_server extends \IXR_Server
{
    /**
     * Methods.
     *
     * @var array
     */
    public $methods;
    /**
     * Blog options.
     *
     * @var array
     */
    public $blog_options;
    /**
     * IXR_Error instance.
     *
     * @var IXR_Error
     */
    public $error;
    /**
     * Flags that the user authentication has failed in this instance of wp_xmlrpc_server.
     *
     * @var bool
     */
    protected $auth_failed = \false;
    /**
     * Registers all of the XMLRPC methods that XMLRPC server understands.
     *
     * Sets up server and method property. Passes XMLRPC
     * methods through the {@see 'xmlrpc_methods'} filter to allow plugins to extend
     * or replace XML-RPC methods.
     *
     * @since 1.5.0
     */
    public function __construct()
    {
    }
    /**
     * Make private/protected methods readable for backward compatibility.
     *
     * @since 4.0.0
     *
     * @param string   $name      Method to call.
     * @param array    $arguments Arguments to pass when calling.
     * @return array|IXR_Error|false Return value of the callback, false otherwise.
     */
    public function __call($name, $arguments)
    {
    }
    /**
     * Serves the XML-RPC request.
     *
     * @since 2.9.0
     */
    public function serve_request()
    {
    }
    /**
     * Test XMLRPC API by saying, "Hello!" to client.
     *
     * @since 1.5.0
     *
     * @return string Hello string response.
     */
    public function sayHello()
    {
    }
    /**
     * Test XMLRPC API by adding two numbers for client.
     *
     * @since 1.5.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int $number1 A number to add.
     *     @type int $number2 A second number to add.
     * }
     * @return int Sum of the two given numbers.
     * @phpstan-param array{
     *   number1?: int,
     *   number2?: int,
     * } $args
     */
    public function addTwoNumbers($args)
    {
    }
    /**
     * Log user in.
     *
     * @since 2.8.0
     *
     * @param string $username User's username.
     * @param string $password User's password.
     * @return WP_User|bool WP_User object if authentication passed, false otherwise
     */
    public function login($username, $password)
    {
    }
    /**
     * Check user's credentials. Deprecated.
     *
     * @since 1.5.0
     * @deprecated 2.8.0 Use wp_xmlrpc_server::login()
     * @see wp_xmlrpc_server::login()
     *
     * @param string $username User's username.
     * @param string $password User's password.
     * @return bool Whether authentication passed.
     */
    public function login_pass_ok($username, $password)
    {
    }
    /**
     * Escape string or array of strings for database.
     *
     * @since 1.5.2
     *
     * @param string|array $data Escape single string or array of strings.
     * @return string|void Returns with string is passed, alters by-reference
     *                     when array is passed.
     */
    public function escape(&$data)
    {
    }
    /**
     * Retrieve custom fields for post.
     *
     * @since 2.5.0
     *
     * @param int $post_id Post ID.
     * @return array Custom fields, if exist.
     */
    public function get_custom_fields($post_id)
    {
    }
    /**
     * Set custom fields for post.
     *
     * @since 2.5.0
     *
     * @param int $post_id Post ID.
     * @param array $fields Custom fields.
     */
    public function set_custom_fields($post_id, $fields)
    {
    }
    /**
     * Retrieve custom fields for a term.
     *
     * @since 4.9.0
     *
     * @param int $term_id Term ID.
     * @return array Array of custom fields, if they exist.
     */
    public function get_term_custom_fields($term_id)
    {
    }
    /**
     * Set custom fields for a term.
     *
     * @since 4.9.0
     *
     * @param int $term_id Term ID.
     * @param array $fields Custom fields.
     */
    public function set_term_custom_fields($term_id, $fields)
    {
    }
    /**
     * Set up blog options property.
     *
     * Passes property through {@see 'xmlrpc_blog_options'} filter.
     *
     * @since 2.6.0
     */
    public function initialise_blog_option_info()
    {
    }
    /**
     * Retrieve the blogs of the user.
     *
     * @since 2.6.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type string $username Username.
     *     @type string $password Password.
     * }
     * @return array|IXR_Error Array contains:
     *  - 'isAdmin'
     *  - 'isPrimary' - whether the blog is the user's primary blog
     *  - 'url'
     *  - 'blogid'
     *  - 'blogName'
     *  - 'xmlrpc' - url of xmlrpc endpoint
     * @phpstan-param array{
     *   username?: string,
     *   password?: string,
     * } $args
     */
    public function wp_getUsersBlogs($args)
    {
    }
    /**
     * Checks if the method received at least the minimum number of arguments.
     *
     * @since 3.4.0
     *
     * @param array $args  An array of arguments to check.
     * @param int   $count Minimum number of arguments.
     * @return bool True if `$args` contains at least `$count` arguments, false otherwise.
     */
    protected function minimum_args($args, $count)
    {
    }
    /**
     * Prepares taxonomy data for return in an XML-RPC object.
     *
     * @param object $taxonomy The unprepared taxonomy data.
     * @param array $fields    The subset of taxonomy fields to return.
     * @return array The prepared taxonomy data.
     */
    protected function _prepare_taxonomy($taxonomy, $fields)
    {
    }
    /**
     * Prepares term data for return in an XML-RPC object.
     *
     * @param array|object $term The unprepared term data.
     * @return array The prepared term data.
     */
    protected function _prepare_term($term)
    {
    }
    /**
     * Convert a WordPress date string to an IXR_Date object.
     *
     * @param string $date Date string to convert.
     * @return IXR_Date IXR_Date object.
     */
    protected function _convert_date($date)
    {
    }
    /**
     * Convert a WordPress GMT date string to an IXR_Date object.
     *
     * @param string $date_gmt WordPress GMT date string.
     * @param string $date     Date string.
     * @return IXR_Date IXR_Date object.
     */
    protected function _convert_date_gmt($date_gmt, $date)
    {
    }
    /**
     * Prepares post data for return in an XML-RPC object.
     *
     * @param array $post   The unprepared post data.
     * @param array $fields The subset of post type fields to return.
     * @return array The prepared post data.
     */
    protected function _prepare_post($post, $fields)
    {
    }
    /**
     * Prepares post data for return in an XML-RPC object.
     *
     * @since 3.4.0
     * @since 4.6.0 Converted the `$post_type` parameter to accept a WP_Post_Type object.
     *
     * @param WP_Post_Type $post_type Post type object.
     * @param array        $fields    The subset of post fields to return.
     * @return array The prepared post type data.
     */
    protected function _prepare_post_type($post_type, $fields)
    {
    }
    /**
     * Prepares media item data for return in an XML-RPC object.
     *
     * @param object $media_item     The unprepared media item data.
     * @param string $thumbnail_size The image size to use for the thumbnail URL.
     * @return array The prepared media item data.
     */
    protected function _prepare_media_item($media_item, $thumbnail_size = 'thumbnail')
    {
    }
    /**
     * Prepares page data for return in an XML-RPC object.
     *
     * @param object $page The unprepared page data.
     * @return array The prepared page data.
     */
    protected function _prepare_page($page)
    {
    }
    /**
     * Prepares comment data for return in an XML-RPC object.
     *
     * @param object $comment The unprepared comment data.
     * @return array The prepared comment data.
     */
    protected function _prepare_comment($comment)
    {
    }
    /**
     * Prepares user data for return in an XML-RPC object.
     *
     * @param WP_User $user   The unprepared user object.
     * @param array   $fields The subset of user fields to return.
     * @return array The prepared user data.
     */
    protected function _prepare_user($user, $fields)
    {
    }
    /**
     * Create a new post for any registered post type.
     *
     * @since 3.4.0
     *
     * @link https://en.wikipedia.org/wiki/RSS_enclosure for information on RSS enclosures.
     *
     * @param array  $args {
     *     Method arguments. Note: top-level arguments must be ordered as documented.
     *
     *     @type int    $blog_id        Blog ID (unused).
     *     @type string $username       Username.
     *     @type string $password       Password.
     *     @type array  $content_struct {
     *         Content struct for adding a new post. See wp_insert_post() for information on
     *         additional post fields
     *
     *         @type string $post_type      Post type. Default 'post'.
     *         @type string $post_status    Post status. Default 'draft'
     *         @type string $post_title     Post title.
     *         @type int    $post_author    Post author ID.
     *         @type string $post_excerpt   Post excerpt.
     *         @type string $post_content   Post content.
     *         @type string $post_date_gmt  Post date in GMT.
     *         @type string $post_date      Post date.
     *         @type string $post_password  Post password (20-character limit).
     *         @type string $comment_status Post comment enabled status. Accepts 'open' or 'closed'.
     *         @type string $ping_status    Post ping status. Accepts 'open' or 'closed'.
     *         @type bool   $sticky         Whether the post should be sticky. Automatically false if
     *                                      `$post_status` is 'private'.
     *         @type int    $post_thumbnail ID of an image to use as the post thumbnail/featured image.
     *         @type array  $custom_fields  Array of meta key/value pairs to add to the post.
     *         @type array  $terms          Associative array with taxonomy names as keys and arrays
     *                                      of term IDs as values.
     *         @type array  $terms_names    Associative array with taxonomy names as keys and arrays
     *                                      of term names as values.
     *         @type array  $enclosure      {
     *             Array of feed enclosure data to add to post meta.
     *
     *             @type string $url    URL for the feed enclosure.
     *             @type int    $length Size in bytes of the enclosure.
     *             @type string $type   Mime-type for the enclosure.
     *         }
     *     }
     * }
     * @return int|IXR_Error Post ID on success, IXR_Error instance otherwise.
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   content_struct?: array,
     * } $args
     */
    public function wp_newPost($args)
    {
    }
    /**
     * Helper method for filtering out elements from an array.
     *
     * @since 3.4.0
     *
     * @param int $count Number to compare to one.
     */
    private function _is_greater_than_one($count)
    {
    }
    /**
     * Encapsulate the logic for sticking a post
     * and determining if the user has permission to do so
     *
     * @since 4.3.0
     *
     * @param array $post_data
     * @param bool  $update
     * @return void|IXR_Error
     */
    private function _toggle_sticky($post_data, $update = \false)
    {
    }
    /**
     * Helper method for wp_newPost() and wp_editPost(), containing shared logic.
     *
     * @since 3.4.0
     *
     * @see wp_insert_post()
     *
     * @param WP_User         $user           The post author if post_author isn't set in $content_struct.
     * @param array|IXR_Error $content_struct Post data to insert.
     * @return IXR_Error|string
     */
    protected function _insert_post($user, $content_struct)
    {
    }
    /**
     * Edit a post for any registered post type.
     *
     * The $content_struct parameter only needs to contain fields that
     * should be changed. All other fields will retain their existing values.
     *
     * @since 3.4.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id        Blog ID (unused).
     *     @type string $username       Username.
     *     @type string $password       Password.
     *     @type int    $post_id        Post ID.
     *     @type array  $content_struct Extra content arguments.
     * }
     * @return true|IXR_Error True on success, IXR_Error on failure.
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   post_id?: int,
     *   content_struct?: array,
     * } $args
     */
    public function wp_editPost($args)
    {
    }
    /**
     * Delete a post for any registered post type.
     *
     * @since 3.4.0
     *
     * @see wp_delete_post()
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id  Blog ID (unused).
     *     @type string $username Username.
     *     @type string $password Password.
     *     @type int    $post_id  Post ID.
     * }
     * @return true|IXR_Error True on success, IXR_Error instance on failure.
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   post_id?: int,
     * } $args
     */
    public function wp_deletePost($args)
    {
    }
    /**
     * Retrieve a post.
     *
     * @since 3.4.0
     *
     * The optional $fields parameter specifies what fields will be included
     * in the response array. This should be a list of field names. 'post_id' will
     * always be included in the response regardless of the value of $fields.
     *
     * Instead of, or in addition to, individual field names, conceptual group
     * names can be used to specify multiple fields. The available conceptual
     * groups are 'post' (all basic fields), 'taxonomies', 'custom_fields',
     * and 'enclosure'.
     *
     * @see get_post()
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id  Blog ID (unused).
     *     @type string $username Username.
     *     @type string $password Password.
     *     @type int    $post_id  Post ID.
     *     @type array  $fields   The subset of post type fields to return.
     * }
     * @return array|IXR_Error Array contains (based on $fields parameter):
     *  - 'post_id'
     *  - 'post_title'
     *  - 'post_date'
     *  - 'post_date_gmt'
     *  - 'post_modified'
     *  - 'post_modified_gmt'
     *  - 'post_status'
     *  - 'post_type'
     *  - 'post_name'
     *  - 'post_author'
     *  - 'post_password'
     *  - 'post_excerpt'
     *  - 'post_content'
     *  - 'link'
     *  - 'comment_status'
     *  - 'ping_status'
     *  - 'sticky'
     *  - 'custom_fields'
     *  - 'terms'
     *  - 'categories'
     *  - 'tags'
     *  - 'enclosure'
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   post_id?: int,
     *   fields?: array,
     * } $args
     */
    public function wp_getPost($args)
    {
    }
    /**
     * Retrieve posts.
     *
     * @since 3.4.0
     *
     * @see wp_get_recent_posts()
     * @see wp_getPost() for more on `$fields`
     * @see get_posts() for more on `$filter` values
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id  Blog ID (unused).
     *     @type string $username Username.
     *     @type string $password Password.
     *     @type array  $filter   Optional. Modifies the query used to retrieve posts. Accepts 'post_type',
     *                            'post_status', 'number', 'offset', 'orderby', 's', and 'order'.
     *                            Default empty array.
     *     @type array  $fields   Optional. The subset of post type fields to return in the response array.
     * }
     * @return array|IXR_Error Array contains a collection of posts.
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   filter?: array,
     *   fields?: array,
     * } $args
     */
    public function wp_getPosts($args)
    {
    }
    /**
     * Create a new term.
     *
     * @since 3.4.0
     *
     * @see wp_insert_term()
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id        Blog ID (unused).
     *     @type string $username       Username.
     *     @type string $password       Password.
     *     @type array  $content_struct Content struct for adding a new term. The struct must contain
     *                                  the term 'name' and 'taxonomy'. Optional accepted values include
     *                                  'parent', 'description', and 'slug'.
     * }
     * @return int|IXR_Error The term ID on success, or an IXR_Error object on failure.
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   content_struct?: array,
     * } $args
     */
    public function wp_newTerm($args)
    {
    }
    /**
     * Edit a term.
     *
     * @since 3.4.0
     *
     * @see wp_update_term()
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id        Blog ID (unused).
     *     @type string $username       Username.
     *     @type string $password       Password.
     *     @type int    $term_id        Term ID.
     *     @type array  $content_struct Content struct for editing a term. The struct must contain the
     *                                  term ''taxonomy'. Optional accepted values include 'name', 'parent',
     *                                  'description', and 'slug'.
     * }
     * @return true|IXR_Error True on success, IXR_Error instance on failure.
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   term_id?: int,
     *   content_struct?: array,
     * } $args
     */
    public function wp_editTerm($args)
    {
    }
    /**
     * Delete a term.
     *
     * @since 3.4.0
     *
     * @see wp_delete_term()
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id      Blog ID (unused).
     *     @type string $username     Username.
     *     @type string $password     Password.
     *     @type string $taxnomy_name Taxonomy name.
     *     @type int    $term_id      Term ID.
     * }
     * @return bool|IXR_Error True on success, IXR_Error instance on failure.
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   taxnomy_name?: string,
     *   term_id?: int,
     * } $args
     */
    public function wp_deleteTerm($args)
    {
    }
    /**
     * Retrieve a term.
     *
     * @since 3.4.0
     *
     * @see get_term()
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id  Blog ID (unused).
     *     @type string $username Username.
     *     @type string $password Password.
     *     @type string $taxnomy  Taxonomy name.
     *     @type string $term_id  Term ID.
     * }
     * @return array|IXR_Error IXR_Error on failure, array on success, containing:
     *  - 'term_id'
     *  - 'name'
     *  - 'slug'
     *  - 'term_group'
     *  - 'term_taxonomy_id'
     *  - 'taxonomy'
     *  - 'description'
     *  - 'parent'
     *  - 'count'
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   taxnomy?: string,
     *   term_id?: string,
     * } $args
     */
    public function wp_getTerm($args)
    {
    }
    /**
     * Retrieve all terms for a taxonomy.
     *
     * @since 3.4.0
     *
     * The optional $filter parameter modifies the query used to retrieve terms.
     * Accepted keys are 'number', 'offset', 'orderby', 'order', 'hide_empty', and 'search'.
     *
     * @see get_terms()
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id  Blog ID (unused).
     *     @type string $username Username.
     *     @type string $password Password.
     *     @type string $taxnomy  Taxonomy name.
     *     @type array  $filter   Optional. Modifies the query used to retrieve posts. Accepts 'number',
     *                            'offset', 'orderby', 'order', 'hide_empty', and 'search'. Default empty array.
     * }
     * @return array|IXR_Error An associative array of terms data on success, IXR_Error instance otherwise.
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   taxnomy?: string,
     *   filter?: array,
     * } $args
     */
    public function wp_getTerms($args)
    {
    }
    /**
     * Retrieve a taxonomy.
     *
     * @since 3.4.0
     *
     * @see get_taxonomy()
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id  Blog ID (unused).
     *     @type string $username Username.
     *     @type string $password Password.
     *     @type string $taxnomy  Taxonomy name.
     *     @type array  $fields   Optional. Array of taxonomy fields to limit to in the return.
     *                            Accepts 'labels', 'cap', 'menu', and 'object_type'.
     *                            Default empty array.
     * }
     * @return array|IXR_Error An array of taxonomy data on success, IXR_Error instance otherwise.
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   taxnomy?: string,
     *   fields?: array,
     * } $args
     */
    public function wp_getTaxonomy($args)
    {
    }
    /**
     * Retrieve all taxonomies.
     *
     * @since 3.4.0
     *
     * @see get_taxonomies()
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id  Blog ID (unused).
     *     @type string $username Username.
     *     @type string $password Password.
     *     @type array  $filter   Optional. An array of arguments for retrieving taxonomies.
     *     @type array  $fields   Optional. The subset of taxonomy fields to return.
     * }
     * @return array|IXR_Error An associative array of taxonomy data with returned fields determined
     *                         by `$fields`, or an IXR_Error instance on failure.
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   filter?: array,
     *   fields?: array,
     * } $args
     */
    public function wp_getTaxonomies($args)
    {
    }
    /**
     * Retrieve a user.
     *
     * The optional $fields parameter specifies what fields will be included
     * in the response array. This should be a list of field names. 'user_id' will
     * always be included in the response regardless of the value of $fields.
     *
     * Instead of, or in addition to, individual field names, conceptual group
     * names can be used to specify multiple fields. The available conceptual
     * groups are 'basic' and 'all'.
     *
     * @uses get_userdata()
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     *     @type int    $user_id
     *     @type array  $fields (optional)
     * }
     * @return array|IXR_Error Array contains (based on $fields parameter):
     *  - 'user_id'
     *  - 'username'
     *  - 'first_name'
     *  - 'last_name'
     *  - 'registered'
     *  - 'bio'
     *  - 'email'
     *  - 'nickname'
     *  - 'nicename'
     *  - 'url'
     *  - 'display_name'
     *  - 'roles'
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   user_id?: int,
     *   fields?: array,
     * } $args
     */
    public function wp_getUser($args)
    {
    }
    /**
     * Retrieve users.
     *
     * The optional $filter parameter modifies the query used to retrieve users.
     * Accepted keys are 'number' (default: 50), 'offset' (default: 0), 'role',
     * 'who', 'orderby', and 'order'.
     *
     * The optional $fields parameter specifies what fields will be included
     * in the response array.
     *
     * @uses get_users()
     * @see wp_getUser() for more on $fields and return values
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     *     @type array  $filter (optional)
     *     @type array  $fields (optional)
     * }
     * @return array|IXR_Error users data
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   filter?: array,
     *   fields?: array,
     * } $args
     */
    public function wp_getUsers($args)
    {
    }
    /**
     * Retrieve information about the requesting user.
     *
     * @uses get_userdata()
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     *     @type array  $fields (optional)
     * }
     * @return array|IXR_Error (@see wp_getUser)
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   fields?: array,
     * } $args
     */
    public function wp_getProfile($args)
    {
    }
    /**
     * Edit user's profile.
     *
     * @uses wp_update_user()
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     *     @type array  $content_struct It can optionally contain:
     *      - 'first_name'
     *      - 'last_name'
     *      - 'website'
     *      - 'display_name'
     *      - 'nickname'
     *      - 'nicename'
     *      - 'bio'
     * }
     * @return true|IXR_Error True, on success.
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   content_struct?: array,
     * } $args
     */
    public function wp_editProfile($args)
    {
    }
    /**
     * Retrieve page.
     *
     * @since 2.2.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type int    $page_id
     *     @type string $username
     *     @type string $password
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   blog_id?: int,
     *   page_id?: int,
     *   username?: string,
     *   password?: string,
     * } $args
     */
    public function wp_getPage($args)
    {
    }
    /**
     * Retrieve Pages.
     *
     * @since 2.2.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     *     @type int    $num_pages
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   num_pages?: int,
     * } $args
     */
    public function wp_getPages($args)
    {
    }
    /**
     * Create new page.
     *
     * @since 2.2.0
     *
     * @see wp_xmlrpc_server::mw_newPost()
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     *     @type array  $content_struct
     * }
     * @return int|IXR_Error
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   content_struct?: array,
     * } $args
     */
    public function wp_newPage($args)
    {
    }
    /**
     * Delete page.
     *
     * @since 2.2.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     *     @type int    $page_id
     * }
     * @return true|IXR_Error True, if success.
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   page_id?: int,
     * } $args
     */
    public function wp_deletePage($args)
    {
    }
    /**
     * Edit page.
     *
     * @since 2.2.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type int    $page_id
     *     @type string $username
     *     @type string $password
     *     @type string $content
     *     @type string $publish
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   blog_id?: int,
     *   page_id?: int,
     *   username?: string,
     *   password?: string,
     *   content?: string,
     *   publish?: string,
     * } $args
     */
    public function wp_editPage($args)
    {
    }
    /**
     * Retrieve page list.
     *
     * @since 2.2.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     * } $args
     */
    public function wp_getPageList($args)
    {
    }
    /**
     * Retrieve authors list.
     *
     * @since 2.2.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     * } $args
     */
    public function wp_getAuthors($args)
    {
    }
    /**
     * Get list of all tags
     *
     * @since 2.7.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     * } $args
     */
    public function wp_getTags($args)
    {
    }
    /**
     * Create new category.
     *
     * @since 2.2.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     *     @type array  $category
     * }
     * @return int|IXR_Error Category ID.
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   category?: array,
     * } $args
     */
    public function wp_newCategory($args)
    {
    }
    /**
     * Remove category.
     *
     * @since 2.5.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     *     @type int    $category_id
     * }
     * @return bool|IXR_Error See wp_delete_term() for return info.
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   category_id?: int,
     * } $args
     */
    public function wp_deleteCategory($args)
    {
    }
    /**
     * Retrieve category list.
     *
     * @since 2.2.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     *     @type array  $category
     *     @type int    $max_results
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   category?: array,
     *   max_results?: int,
     * } $args
     */
    public function wp_suggestCategories($args)
    {
    }
    /**
     * Retrieve comment.
     *
     * @since 2.7.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     *     @type int    $comment_id
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   comment_id?: int,
     * } $args
     */
    public function wp_getComment($args)
    {
    }
    /**
     * Retrieve comments.
     *
     * Besides the common blog_id (unused), username, and password arguments, it takes a filter
     * array as last argument.
     *
     * Accepted 'filter' keys are 'status', 'post_id', 'offset', and 'number'.
     *
     * The defaults are as follows:
     * - 'status' - Default is ''. Filter by status (e.g., 'approve', 'hold')
     * - 'post_id' - Default is ''. The post where the comment is posted. Empty string shows all comments.
     * - 'number' - Default is 10. Total number of media items to retrieve.
     * - 'offset' - Default is 0. See WP_Query::query() for more.
     *
     * @since 2.7.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     *     @type array  $struct
     * }
     * @return array|IXR_Error Contains a collection of comments. See wp_xmlrpc_server::wp_getComment() for a description of each item contents
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   struct?: array,
     * } $args
     */
    public function wp_getComments($args)
    {
    }
    /**
     * Delete a comment.
     *
     * By default, the comment will be moved to the trash instead of deleted.
     * See wp_delete_comment() for more information on this behavior.
     *
     * @since 2.7.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     *     @type int    $comment_ID
     * }
     * @return bool|IXR_Error See wp_delete_comment().
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   comment_ID?: int,
     * } $args
     */
    public function wp_deleteComment($args)
    {
    }
    /**
     * Edit comment.
     *
     * Besides the common blog_id (unused), username, and password arguments, it takes a
     * comment_id integer and a content_struct array as last argument.
     *
     * The allowed keys in the content_struct array are:
     *  - 'author'
     *  - 'author_url'
     *  - 'author_email'
     *  - 'content'
     *  - 'date_created_gmt'
     *  - 'status'. Common statuses are 'approve', 'hold', 'spam'. See get_comment_statuses() for more details
     *
     * @since 2.7.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     *     @type int    $comment_ID
     *     @type array  $content_struct
     * }
     * @return true|IXR_Error True, on success.
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   comment_ID?: int,
     *   content_struct?: array,
     * } $args
     */
    public function wp_editComment($args)
    {
    }
    /**
     * Create new comment.
     *
     * @since 2.7.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int        $blog_id (unused)
     *     @type string     $username
     *     @type string     $password
     *     @type string|int $post
     *     @type array      $content_struct
     * }
     * @return int|IXR_Error See wp_new_comment().
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   post?: string|int,
     *   content_struct?: array,
     * } $args
     */
    public function wp_newComment($args)
    {
    }
    /**
     * Retrieve all of the comment status.
     *
     * @since 2.7.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     * } $args
     */
    public function wp_getCommentStatusList($args)
    {
    }
    /**
     * Retrieve comment count.
     *
     * @since 2.5.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     *     @type int    $post_id
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   post_id?: int,
     * } $args
     */
    public function wp_getCommentCount($args)
    {
    }
    /**
     * Retrieve post statuses.
     *
     * @since 2.5.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     * } $args
     */
    public function wp_getPostStatusList($args)
    {
    }
    /**
     * Retrieve page statuses.
     *
     * @since 2.5.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     * } $args
     */
    public function wp_getPageStatusList($args)
    {
    }
    /**
     * Retrieve page templates.
     *
     * @since 2.6.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     * } $args
     */
    public function wp_getPageTemplates($args)
    {
    }
    /**
     * Retrieve blog options.
     *
     * @since 2.6.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     *     @type array  $options
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   options?: array,
     * } $args
     */
    public function wp_getOptions($args)
    {
    }
    /**
     * Retrieve blog options value from list.
     *
     * @since 2.6.0
     *
     * @param array $options Options to retrieve.
     * @return array
     */
    public function _getOptions($options)
    {
    }
    /**
     * Update blog options.
     *
     * @since 2.6.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     *     @type array  $options
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   options?: array,
     * } $args
     */
    public function wp_setOptions($args)
    {
    }
    /**
     * Retrieve a media item by ID
     *
     * @since 3.1.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     *     @type int    $attachment_id
     * }
     * @return array|IXR_Error Associative array contains:
     *  - 'date_created_gmt'
     *  - 'parent'
     *  - 'link'
     *  - 'thumbnail'
     *  - 'title'
     *  - 'caption'
     *  - 'description'
     *  - 'metadata'
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   attachment_id?: int,
     * } $args
     */
    public function wp_getMediaItem($args)
    {
    }
    /**
     * Retrieves a collection of media library items (or attachments)
     *
     * Besides the common blog_id (unused), username, and password arguments, it takes a filter
     * array as last argument.
     *
     * Accepted 'filter' keys are 'parent_id', 'mime_type', 'offset', and 'number'.
     *
     * The defaults are as follows:
     * - 'number' - Default is 5. Total number of media items to retrieve.
     * - 'offset' - Default is 0. See WP_Query::query() for more.
     * - 'parent_id' - Default is ''. The post where the media item is attached. Empty string shows all media items. 0 shows unattached media items.
     * - 'mime_type' - Default is ''. Filter by mime type (e.g., 'image/jpeg', 'application/pdf')
     *
     * @since 3.1.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     *     @type array  $struct
     * }
     * @return array|IXR_Error Contains a collection of media items. See wp_xmlrpc_server::wp_getMediaItem() for a description of each item contents
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   struct?: array,
     * } $args
     */
    public function wp_getMediaLibrary($args)
    {
    }
    /**
     * Retrieves a list of post formats used by the site.
     *
     * @since 3.1.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     * }
     * @return array|IXR_Error List of post formats, otherwise IXR_Error object.
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     * } $args
     */
    public function wp_getPostFormats($args)
    {
    }
    /**
     * Retrieves a post type
     *
     * @since 3.4.0
     *
     * @see get_post_type_object()
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     *     @type string $post_type_name
     *     @type array  $fields (optional)
     * }
     * @return array|IXR_Error Array contains:
     *  - 'labels'
     *  - 'description'
     *  - 'capability_type'
     *  - 'cap'
     *  - 'map_meta_cap'
     *  - 'hierarchical'
     *  - 'menu_position'
     *  - 'taxonomies'
     *  - 'supports'
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   post_type_name?: string,
     *   fields?: array,
     * } $args
     */
    public function wp_getPostType($args)
    {
    }
    /**
     * Retrieves a post types
     *
     * @since 3.4.0
     *
     * @see get_post_types()
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     *     @type array  $filter (optional)
     *     @type array  $fields (optional)
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   filter?: array,
     *   fields?: array,
     * } $args
     */
    public function wp_getPostTypes($args)
    {
    }
    /**
     * Retrieve revisions for a specific post.
     *
     * @since 3.5.0
     *
     * The optional $fields parameter specifies what fields will be included
     * in the response array.
     *
     * @uses wp_get_post_revisions()
     * @see wp_getPost() for more on $fields
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     *     @type int    $post_id
     *     @type array  $fields (optional)
     * }
     * @return array|IXR_Error contains a collection of posts.
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   post_id?: int,
     *   fields?: array,
     * } $args
     */
    public function wp_getRevisions($args)
    {
    }
    /**
     * Restore a post revision
     *
     * @since 3.5.0
     *
     * @uses wp_restore_post_revision()
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     *     @type int    $revision_id
     * }
     * @return bool|IXR_Error false if there was an error restoring, true if success.
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   revision_id?: int,
     * } $args
     */
    public function wp_restoreRevision($args)
    {
    }
    /* Blogger API functions.
     * specs on http://plant.blogger.com/api and https://groups.yahoo.com/group/bloggerDev/
     */
    /**
     * Retrieve blogs that user owns.
     *
     * Will make more sense once we support multiple blogs.
     *
     * @since 1.5.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     * } $args
     */
    public function blogger_getUsersBlogs($args)
    {
    }
    /**
     * Private function for retrieving a users blogs for multisite setups
     *
     * @since 3.0.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type string $username Username.
     *     @type string $password Password.
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   username?: string,
     *   password?: string,
     * } $args
     */
    protected function _multisite_getUsersBlogs($args)
    {
    }
    /**
     * Retrieve user's data.
     *
     * Gives your client some info about you, so you don't have to.
     *
     * @since 1.5.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     * } $args
     */
    public function blogger_getUserInfo($args)
    {
    }
    /**
     * Retrieve post.
     *
     * @since 1.5.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type int    $post_ID
     *     @type string $username
     *     @type string $password
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   blog_id?: int,
     *   post_ID?: int,
     *   username?: string,
     *   password?: string,
     * } $args
     */
    public function blogger_getPost($args)
    {
    }
    /**
     * Retrieve list of recent posts.
     *
     * @since 1.5.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type string $appkey (unused)
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     *     @type int    $numberposts (optional)
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   appkey?: string,
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   numberposts?: int,
     * } $args
     */
    public function blogger_getRecentPosts($args)
    {
    }
    /**
     * Deprecated.
     *
     * @since 1.5.0
     * @deprecated 3.5.0
     *
     * @param array $args Unused.
     * @return IXR_Error Error object.
     */
    public function blogger_getTemplate($args)
    {
    }
    /**
     * Deprecated.
     *
     * @since 1.5.0
     * @deprecated 3.5.0
     *
     * @param array $args Unused.
     * @return IXR_Error Error object.
     */
    public function blogger_setTemplate($args)
    {
    }
    /**
     * Creates new post.
     *
     * @since 1.5.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type string $appkey (unused)
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     *     @type string $content
     *     @type string $publish
     * }
     * @return int|IXR_Error
     * @phpstan-param array{
     *   appkey?: string,
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   content?: string,
     *   publish?: string,
     * } $args
     */
    public function blogger_newPost($args)
    {
    }
    /**
     * Edit a post.
     *
     * @since 1.5.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type int    $post_ID
     *     @type string $username
     *     @type string $password
     *     @type string $content
     *     @type bool   $publish
     * }
     * @return true|IXR_Error true when done.
     * @phpstan-param array{
     *   blog_id?: int,
     *   post_ID?: int,
     *   username?: string,
     *   password?: string,
     *   content?: string,
     *   publish?: bool,
     * } $args
     */
    public function blogger_editPost($args)
    {
    }
    /**
     * Remove a post.
     *
     * @since 1.5.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type int    $post_ID
     *     @type string $username
     *     @type string $password
     * }
     * @return true|IXR_Error True when post is deleted.
     * @phpstan-param array{
     *   blog_id?: int,
     *   post_ID?: int,
     *   username?: string,
     *   password?: string,
     * } $args
     */
    public function blogger_deletePost($args)
    {
    }
    /* MetaWeblog API functions
     * specs on wherever Dave Winer wants them to be
     */
    /**
     * Create a new post.
     *
     * The 'content_struct' argument must contain:
     *  - title
     *  - description
     *  - mt_excerpt
     *  - mt_text_more
     *  - mt_keywords
     *  - mt_tb_ping_urls
     *  - categories
     *
     * Also, it can optionally contain:
     *  - wp_slug
     *  - wp_password
     *  - wp_page_parent_id
     *  - wp_page_order
     *  - wp_author_id
     *  - post_status | page_status - can be 'draft', 'private', 'publish', or 'pending'
     *  - mt_allow_comments - can be 'open' or 'closed'
     *  - mt_allow_pings - can be 'open' or 'closed'
     *  - date_created_gmt
     *  - dateCreated
     *  - wp_post_thumbnail
     *
     * @since 1.5.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     *     @type array  $content_struct
     *     @type int    $publish
     * }
     * @return int|IXR_Error
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   content_struct?: array,
     *   publish?: int,
     * } $args
     */
    public function mw_newPost($args)
    {
    }
    /**
     * Adds an enclosure to a post if it's new.
     *
     * @since 2.8.0
     *
     * @param integer $post_ID   Post ID.
     * @param array   $enclosure Enclosure data.
     */
    public function add_enclosure_if_new($post_ID, $enclosure)
    {
    }
    /**
     * Attach upload to a post.
     *
     * @since 2.1.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param int $post_ID Post ID.
     * @param string $post_content Post Content for attachment.
     */
    public function attach_uploads($post_ID, $post_content)
    {
    }
    /**
     * Edit a post.
     *
     * @since 1.5.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     *     @type array  $content_struct
     *     @type int    $publish
     * }
     * @return bool|IXR_Error True on success.
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   content_struct?: array,
     *   publish?: int,
     * } $args
     */
    public function mw_editPost($args)
    {
    }
    /**
     * Retrieve post.
     *
     * @since 1.5.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type int    $post_ID
     *     @type string $username
     *     @type string $password
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   blog_id?: int,
     *   post_ID?: int,
     *   username?: string,
     *   password?: string,
     * } $args
     */
    public function mw_getPost($args)
    {
    }
    /**
     * Retrieve list of recent posts.
     *
     * @since 1.5.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     *     @type int    $numberposts
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   numberposts?: int,
     * } $args
     */
    public function mw_getRecentPosts($args)
    {
    }
    /**
     * Retrieve the list of categories on a given blog.
     *
     * @since 1.5.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     * } $args
     */
    public function mw_getCategories($args)
    {
    }
    /**
     * Uploads a file, following your settings.
     *
     * Adapted from a patch by Johann Richard.
     *
     * @link http://mycvs.org/archives/2004/06/30/file-upload-to-wordpress-in-ecto/
     *
     * @since 1.5.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     *     @type array  $data
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   data?: array,
     * } $args
     */
    public function mw_newMediaObject($args)
    {
    }
    /* MovableType API functions
     * specs on http://www.movabletype.org/docs/mtmanual_programmatic.html
     */
    /**
     * Retrieve the post titles of recent posts.
     *
     * @since 1.5.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     *     @type int    $numberposts
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     *   numberposts?: int,
     * } $args
     */
    public function mt_getRecentPostTitles($args)
    {
    }
    /**
     * Retrieve list of all categories on blog.
     *
     * @since 1.5.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $blog_id (unused)
     *     @type string $username
     *     @type string $password
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   blog_id?: int,
     *   username?: string,
     *   password?: string,
     * } $args
     */
    public function mt_getCategoryList($args)
    {
    }
    /**
     * Retrieve post categories.
     *
     * @since 1.5.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $post_ID
     *     @type string $username
     *     @type string $password
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   post_ID?: int,
     *   username?: string,
     *   password?: string,
     * } $args
     */
    public function mt_getPostCategories($args)
    {
    }
    /**
     * Sets categories for a post.
     *
     * @since 1.5.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $post_ID
     *     @type string $username
     *     @type string $password
     *     @type array  $categories
     * }
     * @return true|IXR_Error True on success.
     * @phpstan-param array{
     *   post_ID?: int,
     *   username?: string,
     *   password?: string,
     *   categories?: array,
     * } $args
     */
    public function mt_setPostCategories($args)
    {
    }
    /**
     * Retrieve an array of methods supported by this server.
     *
     * @since 1.5.0
     *
     * @return array
     */
    public function mt_supportedMethods()
    {
    }
    /**
     * Retrieve an empty array because we don't support per-post text filters.
     *
     * @since 1.5.0
     */
    public function mt_supportedTextFilters()
    {
    }
    /**
     * Retrieve trackbacks sent to a given post.
     *
     * @since 1.5.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param int $post_ID
     * @return array|IXR_Error
     */
    public function mt_getTrackbackPings($post_ID)
    {
    }
    /**
     * Sets a post's publish status to 'publish'.
     *
     * @since 1.5.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $post_ID
     *     @type string $username
     *     @type string $password
     * }
     * @return int|IXR_Error
     * @phpstan-param array{
     *   post_ID?: int,
     *   username?: string,
     *   password?: string,
     * } $args
     */
    public function mt_publishPost($args)
    {
    }
    /* PingBack functions
     * specs on www.hixie.ch/specs/pingback/pingback
     */
    /**
     * Retrieves a pingback and registers it.
     *
     * @since 1.5.0
     *
     * @param array  $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type string $pagelinkedfrom
     *     @type string $pagelinkedto
     * }
     * @return string|IXR_Error
     * @phpstan-param array{
     *   pagelinkedfrom?: string,
     *   pagelinkedto?: string,
     * } $args
     */
    public function pingback_ping($args)
    {
    }
    /**
     * Retrieve array of URLs that pingbacked the given URL.
     *
     * Specs on http://www.aquarionics.com/misc/archives/blogite/0198.html
     *
     * @since 1.5.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param string $url
     * @return array|IXR_Error
     */
    public function pingback_extensions_getPingbacks($url)
    {
    }
    /**
     * Sends a pingback error based on the given error code and message.
     *
     * @since 3.6.0
     *
     * @param int    $code    Error code.
     * @param string $message Error message.
     * @return IXR_Error Error object.
     */
    protected function pingback_error($code, $message)
    {
    }
}