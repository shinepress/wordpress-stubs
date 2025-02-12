<?php


/**
 * WordPress XMLRPC server implementation.
 *
 * Implements compatibility for Blogger API, MetaWeblog API, MovableType, and
 * pingback. Additional WordPress API for managing comments, pages, posts,
 * options, etc.
 *
 * As of WordPress 3.5.0, XML-RPC is enabled by default. It can be disabled
 * via the {@see 'xmlrpc_enabled'} filter found in wp_xmlrpc_server::set_is_enabled().
 *
 * @since 1.5.0
 *
 * @see IXR_Server
 */
#[\AllowDynamicProperties]
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
     * Sets up server and method property. Passes XMLRPC methods through the
     * {@see 'xmlrpc_methods'} filter to allow plugins to extend or replace
     * XML-RPC methods.
     *
     * @since 1.5.0
     */
    public function __construct()
    {
    }
    /**
     * Makes private/protected methods readable for backward compatibility.
     *
     * @since 4.0.0
     *
     * @param string $name      Method to call.
     * @param array  $arguments Arguments to pass when calling.
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
     * Tests XMLRPC API by saying, "Hello!" to client.
     *
     * @since 1.5.0
     *
     * @return string Hello string response.
     */
    public function sayHello()
    {
    }
    /**
     * Tests XMLRPC API by adding two numbers for client.
     *
     * @since 1.5.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int $0 A number to add.
     *     @type int $1 A second number to add.
     * }
     * @return int Sum of the two given numbers.
     * @phpstan-param array{
     *   0: int,
     *   1: int,
     * } $args
     */
    public function addTwoNumbers($args)
    {
    }
    /**
     * Logs user in.
     *
     * @since 2.8.0
     *
     * @param string $username User's username.
     * @param string $password User's password.
     * @return WP_User|false WP_User object if authentication passed, false otherwise.
     */
    public function login($username, $password)
    {
    }
    /**
     * Checks user's credentials. Deprecated.
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
     * Escapes string or array of strings for database.
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
     * Sends error response to client.
     *
     * Sends an XML error response to the client. If the endpoint is enabled
     * an HTTP 200 response is always sent per the XML-RPC specification.
     *
     * @since 5.7.3
     *
     * @param IXR_Error|string $error   Error code or an error object.
     * @param false            $message Error message. Optional.
     */
    public function error($error, $message = \false)
    {
    }
    /**
     * Retrieves custom fields for post.
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
     * Sets custom fields for post.
     *
     * @since 2.5.0
     *
     * @param int   $post_id Post ID.
     * @param array $fields  Custom fields.
     */
    public function set_custom_fields($post_id, $fields)
    {
    }
    /**
     * Retrieves custom fields for a term.
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
     * Sets custom fields for a term.
     *
     * @since 4.9.0
     *
     * @param int   $term_id Term ID.
     * @param array $fields  Custom fields.
     */
    public function set_term_custom_fields($term_id, $fields)
    {
    }
    /**
     * Sets up blog options property.
     *
     * Passes property through {@see 'xmlrpc_blog_options'} filter.
     *
     * @since 2.6.0
     */
    public function initialise_blog_option_info()
    {
    }
    /**
     * Retrieves the blogs of the user.
     *
     * @since 2.6.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type string $0 Username.
     *     @type string $1 Password.
     * }
     * @return array|IXR_Error Array contains:
     *  - 'isAdmin'
     *  - 'isPrimary' - whether the blog is the user's primary blog
     *  - 'url'
     *  - 'blogid'
     *  - 'blogName'
     *  - 'xmlrpc' - url of xmlrpc endpoint
     * @phpstan-param array{
     *   0: string,
     *   1: string,
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
     * @param WP_Taxonomy $taxonomy The unprepared taxonomy data.
     * @param array       $fields   The subset of taxonomy fields to return.
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
     * Converts a WordPress date string to an IXR_Date object.
     *
     * @param string $date Date string to convert.
     * @return IXR_Date IXR_Date object.
     */
    protected function _convert_date($date)
    {
    }
    /**
     * Converts a WordPress GMT date string to an IXR_Date object.
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
     * @param WP_Post $media_item     The unprepared media item data.
     * @param string  $thumbnail_size The image size to use for the thumbnail URL.
     * @return array The prepared media item data.
     */
    protected function _prepare_media_item($media_item, $thumbnail_size = 'thumbnail')
    {
    }
    /**
     * Prepares page data for return in an XML-RPC object.
     *
     * @param WP_Post $page The unprepared page data.
     * @return array The prepared page data.
     */
    protected function _prepare_page($page)
    {
    }
    /**
     * Prepares comment data for return in an XML-RPC object.
     *
     * @param WP_Comment $comment The unprepared comment data.
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
     * Creates a new post for any registered post type.
     *
     * @since 3.4.0
     *
     * @link https://en.wikipedia.org/wiki/RSS_enclosure for information on RSS enclosures.
     *
     * @param array $args {
     *     Method arguments. Note: top-level arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     *     @type array  $3 {
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
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: array{
     *     post_type?: string,
     *     post_status?: string,
     *     post_title: string,
     *     post_author: int,
     *     post_excerpt: string,
     *     post_content: string,
     *     post_date_gmt: string,
     *     post_date: string,
     *     post_password: string,
     *     comment_status: string,
     *     ping_status: string,
     *     sticky: bool,
     *     post_thumbnail: int,
     *     custom_fields: array,
     *     terms: array,
     *     terms_names: array,
     *     enclosure: array{
     *       url: string,
     *       length: int,
     *       type: string,
     *     },
     *   },
     * } $args
     */
    public function wp_newPost($args)
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
     * Edits a post for any registered post type.
     *
     * The $content_struct parameter only needs to contain fields that
     * should be changed. All other fields will retain their existing values.
     *
     * @since 3.4.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     *     @type int    $3 Post ID.
     *     @type array  $4 Extra content arguments.
     * }
     * @return true|IXR_Error True on success, IXR_Error on failure.
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: int,
     *   4: array,
     * } $args
     */
    public function wp_editPost($args)
    {
    }
    /**
     * Deletes a post for any registered post type.
     *
     * @since 3.4.0
     *
     * @see wp_delete_post()
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     *     @type int    $3 Post ID.
     * }
     * @return true|IXR_Error True on success, IXR_Error instance on failure.
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: int,
     * } $args
     */
    public function wp_deletePost($args)
    {
    }
    /**
     * Retrieves a post.
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
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     *     @type int    $3 Post ID.
     *     @type array  $4 Optional. The subset of post type fields to return.
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
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: int,
     *   4: array,
     * } $args
     */
    public function wp_getPost($args)
    {
    }
    /**
     * Retrieves posts.
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
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     *     @type array  $3 Optional. Modifies the query used to retrieve posts. Accepts 'post_type',
     *                     'post_status', 'number', 'offset', 'orderby', 's', and 'order'.
     *                     Default empty array.
     *     @type array  $4 Optional. The subset of post type fields to return in the response array.
     * }
     * @return array|IXR_Error Array containing a collection of posts.
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: array,
     *   4: array,
     * } $args
     */
    public function wp_getPosts($args)
    {
    }
    /**
     * Creates a new term.
     *
     * @since 3.4.0
     *
     * @see wp_insert_term()
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     *     @type array  $3 Content struct for adding a new term. The struct must contain
     *                     the term 'name' and 'taxonomy'. Optional accepted values include
     *                     'parent', 'description', and 'slug'.
     * }
     * @return int|IXR_Error The term ID on success, or an IXR_Error object on failure.
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: array,
     * } $args
     */
    public function wp_newTerm($args)
    {
    }
    /**
     * Edits a term.
     *
     * @since 3.4.0
     *
     * @see wp_update_term()
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     *     @type int    $3 Term ID.
     *     @type array  $4 Content struct for editing a term. The struct must contain the
     *                     term 'taxonomy'. Optional accepted values include 'name', 'parent',
     *                     'description', and 'slug'.
     * }
     * @return true|IXR_Error True on success, IXR_Error instance on failure.
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: int,
     *   4: array,
     * } $args
     */
    public function wp_editTerm($args)
    {
    }
    /**
     * Deletes a term.
     *
     * @since 3.4.0
     *
     * @see wp_delete_term()
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     *     @type string $3 Taxonomy name.
     *     @type int    $4 Term ID.
     * }
     * @return true|IXR_Error True on success, IXR_Error instance on failure.
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: string,
     *   4: int,
     * } $args
     */
    public function wp_deleteTerm($args)
    {
    }
    /**
     * Retrieves a term.
     *
     * @since 3.4.0
     *
     * @see get_term()
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     *     @type string $3 Taxonomy name.
     *     @type int    $4 Term ID.
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
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: string,
     *   4: int,
     * } $args
     */
    public function wp_getTerm($args)
    {
    }
    /**
     * Retrieves all terms for a taxonomy.
     *
     * @since 3.4.0
     *
     * The optional $filter parameter modifies the query used to retrieve terms.
     * Accepted keys are 'number', 'offset', 'orderby', 'order', 'hide_empty', and 'search'.
     *
     * @see get_terms()
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     *     @type string $3 Taxonomy name.
     *     @type array  $4 Optional. Modifies the query used to retrieve posts. Accepts 'number',
     *                     'offset', 'orderby', 'order', 'hide_empty', and 'search'. Default empty array.
     * }
     * @return array|IXR_Error An associative array of terms data on success, IXR_Error instance otherwise.
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: string,
     *   4: array,
     * } $args
     */
    public function wp_getTerms($args)
    {
    }
    /**
     * Retrieves a taxonomy.
     *
     * @since 3.4.0
     *
     * @see get_taxonomy()
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     *     @type string $3 Taxonomy name.
     *     @type array  $4 Optional. Array of taxonomy fields to limit to in the return.
     *                     Accepts 'labels', 'cap', 'menu', and 'object_type'.
     *                     Default empty array.
     * }
     * @return array|IXR_Error An array of taxonomy data on success, IXR_Error instance otherwise.
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: string,
     *   4: array,
     * } $args
     */
    public function wp_getTaxonomy($args)
    {
    }
    /**
     * Retrieves all taxonomies.
     *
     * @since 3.4.0
     *
     * @see get_taxonomies()
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     *     @type array  $3 Optional. An array of arguments for retrieving taxonomies.
     *     @type array  $4 Optional. The subset of taxonomy fields to return.
     * }
     * @return array|IXR_Error An associative array of taxonomy data with returned fields determined
     *                         by `$fields`, or an IXR_Error instance on failure.
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: array,
     *   4: array,
     * } $args
     */
    public function wp_getTaxonomies($args)
    {
    }
    /**
     * Retrieves a user.
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
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     *     @type int    $3 User ID.
     *     @type array  $4 Optional. Array of fields to return.
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
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: int,
     *   4: array,
     * } $args
     */
    public function wp_getUser($args)
    {
    }
    /**
     * Retrieves users.
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
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     *     @type array  $3 Optional. Arguments for the user query.
     *     @type array  $4 Optional. Fields to return.
     * }
     * @return array|IXR_Error users data
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: array,
     *   4: array,
     * } $args
     */
    public function wp_getUsers($args)
    {
    }
    /**
     * Retrieves information about the requesting user.
     *
     * @uses get_userdata()
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username
     *     @type string $2 Password
     *     @type array  $3 Optional. Fields to return.
     * }
     * @return array|IXR_Error (@see wp_getUser)
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: array,
     * } $args
     */
    public function wp_getProfile($args)
    {
    }
    /**
     * Edits user's profile.
     *
     * @uses wp_update_user()
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     *     @type array  $3 Content struct. It can optionally contain:
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
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: array,
     * } $args
     */
    public function wp_editProfile($args)
    {
    }
    /**
     * Retrieves a page.
     *
     * @since 2.2.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type int    $1 Page ID.
     *     @type string $2 Username.
     *     @type string $3 Password.
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   0: int,
     *   1: int,
     *   2: string,
     *   3: string,
     * } $args
     */
    public function wp_getPage($args)
    {
    }
    /**
     * Retrieves Pages.
     *
     * @since 2.2.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     *     @type int    $3 Optional. Number of pages. Default 10.
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: int,
     * } $args
     */
    public function wp_getPages($args)
    {
    }
    /**
     * Creates a new page.
     *
     * @since 2.2.0
     *
     * @see wp_xmlrpc_server::mw_newPost()
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     *     @type array  $3 Content struct.
     * }
     * @return int|IXR_Error
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: array,
     * } $args
     */
    public function wp_newPage($args)
    {
    }
    /**
     * Deletes a page.
     *
     * @since 2.2.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     *     @type int    $3 Page ID.
     * }
     * @return true|IXR_Error True, if success.
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: int,
     * } $args
     */
    public function wp_deletePage($args)
    {
    }
    /**
     * Edits a page.
     *
     * @since 2.2.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type int    $1 Page ID.
     *     @type string $2 Username.
     *     @type string $3 Password.
     *     @type string $4 Content.
     *     @type int    $5 Publish flag. 0 for draft, 1 for publish.
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   0: int,
     *   1: int,
     *   2: string,
     *   3: string,
     *   4: string,
     *   5: int,
     * } $args
     */
    public function wp_editPage($args)
    {
    }
    /**
     * Retrieves page list.
     *
     * @since 2.2.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     * } $args
     */
    public function wp_getPageList($args)
    {
    }
    /**
     * Retrieves authors list.
     *
     * @since 2.2.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     * } $args
     */
    public function wp_getAuthors($args)
    {
    }
    /**
     * Gets the list of all tags.
     *
     * @since 2.7.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     * } $args
     */
    public function wp_getTags($args)
    {
    }
    /**
     * Creates a new category.
     *
     * @since 2.2.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     *     @type array  $3 Category.
     * }
     * @return int|IXR_Error Category ID.
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: array,
     * } $args
     */
    public function wp_newCategory($args)
    {
    }
    /**
     * Deletes a category.
     *
     * @since 2.5.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     *     @type int    $3 Category ID.
     * }
     * @return bool|IXR_Error See wp_delete_term() for return info.
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: int,
     * } $args
     */
    public function wp_deleteCategory($args)
    {
    }
    /**
     * Retrieves category list.
     *
     * @since 2.2.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     *     @type array  $3 Category
     *     @type int    $4 Max number of results.
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: array,
     *   4: int,
     * } $args
     */
    public function wp_suggestCategories($args)
    {
    }
    /**
     * Retrieves a comment.
     *
     * @since 2.7.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     *     @type int    $3 Comment ID.
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: int,
     * } $args
     */
    public function wp_getComment($args)
    {
    }
    /**
     * Retrieves comments.
     *
     * Besides the common blog_id (unused), username, and password arguments,
     * it takes a filter array as the last argument.
     *
     * Accepted 'filter' keys are 'status', 'post_id', 'offset', and 'number'.
     *
     * The defaults are as follows:
     * - 'status'  - Default is ''. Filter by status (e.g., 'approve', 'hold')
     * - 'post_id' - Default is ''. The post where the comment is posted.
     *               Empty string shows all comments.
     * - 'number'  - Default is 10. Total number of media items to retrieve.
     * - 'offset'  - Default is 0. See WP_Query::query() for more.
     *
     * @since 2.7.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     *     @type array  $3 Optional. Query arguments.
     * }
     * @return array|IXR_Error Array containing a collection of comments.
     *                         See wp_xmlrpc_server::wp_getComment() for a description
     *                         of each item contents.
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: array,
     * } $args
     */
    public function wp_getComments($args)
    {
    }
    /**
     * Deletes a comment.
     *
     * By default, the comment will be moved to the Trash instead of deleted.
     * See wp_delete_comment() for more information on this behavior.
     *
     * @since 2.7.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     *     @type int    $3 Comment ID.
     * }
     * @return bool|IXR_Error See wp_delete_comment().
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: int,
     * } $args
     */
    public function wp_deleteComment($args)
    {
    }
    /**
     * Edits a comment.
     *
     * Besides the common blog_id (unused), username, and password arguments,
     * it takes a comment_id integer and a content_struct array as the last argument.
     *
     * The allowed keys in the content_struct array are:
     *  - 'author'
     *  - 'author_url'
     *  - 'author_email'
     *  - 'content'
     *  - 'date_created_gmt'
     *  - 'status'. Common statuses are 'approve', 'hold', 'spam'. See get_comment_statuses() for more details.
     *
     * @since 2.7.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     *     @type int    $3 Comment ID.
     *     @type array  $4 Content structure.
     * }
     * @return true|IXR_Error True, on success.
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: int,
     *   4: array,
     * } $args
     */
    public function wp_editComment($args)
    {
    }
    /**
     * Creates a new comment.
     *
     * @since 2.7.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int        $0 Blog ID (unused).
     *     @type string     $1 Username.
     *     @type string     $2 Password.
     *     @type string|int $3 Post ID or URL.
     *     @type array      $4 Content structure.
     * }
     * @return int|IXR_Error See wp_new_comment().
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: string|int,
     *   4: array,
     * } $args
     */
    public function wp_newComment($args)
    {
    }
    /**
     * Retrieves all of the comment status.
     *
     * @since 2.7.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     * } $args
     */
    public function wp_getCommentStatusList($args)
    {
    }
    /**
     * Retrieves comment counts.
     *
     * @since 2.5.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     *     @type int    $3 Post ID.
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: int,
     * } $args
     */
    public function wp_getCommentCount($args)
    {
    }
    /**
     * Retrieves post statuses.
     *
     * @since 2.5.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     * } $args
     */
    public function wp_getPostStatusList($args)
    {
    }
    /**
     * Retrieves page statuses.
     *
     * @since 2.5.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     * } $args
     */
    public function wp_getPageStatusList($args)
    {
    }
    /**
     * Retrieves page templates.
     *
     * @since 2.6.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     * } $args
     */
    public function wp_getPageTemplates($args)
    {
    }
    /**
     * Retrieves blog options.
     *
     * @since 2.6.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     *     @type array  $3 Optional. Options.
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: array,
     * } $args
     */
    public function wp_getOptions($args)
    {
    }
    /**
     * Retrieves blog options value from list.
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
     * Updates blog options.
     *
     * @since 2.6.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     *     @type array  $3 Options.
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: array,
     * } $args
     */
    public function wp_setOptions($args)
    {
    }
    /**
     * Retrieves a media item by ID.
     *
     * @since 3.1.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     *     @type int    $3 Attachment ID.
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
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: int,
     * } $args
     */
    public function wp_getMediaItem($args)
    {
    }
    /**
     * Retrieves a collection of media library items (or attachments).
     *
     * Besides the common blog_id (unused), username, and password arguments,
     * it takes a filter array as the last argument.
     *
     * Accepted 'filter' keys are 'parent_id', 'mime_type', 'offset', and 'number'.
     *
     * The defaults are as follows:
     * - 'number'    - Default is 5. Total number of media items to retrieve.
     * - 'offset'    - Default is 0. See WP_Query::query() for more.
     * - 'parent_id' - Default is ''. The post where the media item is attached.
     *                 Empty string shows all media items. 0 shows unattached media items.
     * - 'mime_type' - Default is ''. Filter by mime type (e.g., 'image/jpeg', 'application/pdf')
     *
     * @since 3.1.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     *     @type array  $3 Optional. Query arguments.
     * }
     * @return array|IXR_Error Array containing a collection of media items.
     *                         See wp_xmlrpc_server::wp_getMediaItem() for a description
     *                         of each item contents.
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: array,
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
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     * }
     * @return array|IXR_Error List of post formats, otherwise IXR_Error object.
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     * } $args
     */
    public function wp_getPostFormats($args)
    {
    }
    /**
     * Retrieves a post type.
     *
     * @since 3.4.0
     *
     * @see get_post_type_object()
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     *     @type string $3 Post type name.
     *     @type array  $4 Optional. Fields to fetch.
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
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: string,
     *   4: array,
     * } $args
     */
    public function wp_getPostType($args)
    {
    }
    /**
     * Retrieves post types.
     *
     * @since 3.4.0
     *
     * @see get_post_types()
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     *     @type array  $3 Optional. Query arguments.
     *     @type array  $4 Optional. Fields to fetch.
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: array,
     *   4: array,
     * } $args
     */
    public function wp_getPostTypes($args)
    {
    }
    /**
     * Retrieves revisions for a specific post.
     *
     * @since 3.5.0
     *
     * The optional $fields parameter specifies what fields will be included
     * in the response array.
     *
     * @uses wp_get_post_revisions()
     * @see wp_getPost() for more on $fields
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     *     @type int    $3 Post ID.
     *     @type array  $4 Optional. Fields to fetch.
     * }
     * @return array|IXR_Error Array containing a collection of posts.
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: int,
     *   4: array,
     * } $args
     */
    public function wp_getRevisions($args)
    {
    }
    /**
     * Restores a post revision.
     *
     * @since 3.5.0
     *
     * @uses wp_restore_post_revision()
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     *     @type int    $3 Revision ID.
     * }
     * @return bool|IXR_Error false if there was an error restoring, true if success.
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: int,
     * } $args
     */
    public function wp_restoreRevision($args)
    {
    }
    /**
     * Retrieves blogs that user owns.
     *
     * Will make more sense once we support multiple blogs.
     *
     * @since 1.5.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     * } $args
     */
    public function blogger_getUsersBlogs($args)
    {
    }
    /**
     * Private function for retrieving a users blogs for multisite setups.
     *
     * @since 3.0.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     * } $args
     */
    protected function _multisite_getUsersBlogs($args)
    {
    }
    /**
     * Retrieves user's data.
     *
     * Gives your client some info about you, so you don't have to.
     *
     * @since 1.5.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     * } $args
     */
    public function blogger_getUserInfo($args)
    {
    }
    /**
     * Retrieves a post.
     *
     * @since 1.5.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type int    $1 Post ID.
     *     @type string $2 Username.
     *     @type string $3 Password.
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   0: int,
     *   1: int,
     *   2: string,
     *   3: string,
     * } $args
     */
    public function blogger_getPost($args)
    {
    }
    /**
     * Retrieves the list of recent posts.
     *
     * @since 1.5.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type string $0 App key (unused).
     *     @type int    $1 Blog ID (unused).
     *     @type string $2 Username.
     *     @type string $3 Password.
     *     @type int    $4 Optional. Number of posts.
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   0: string,
     *   1: int,
     *   2: string,
     *   3: string,
     *   4: int,
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
     * Creates a new post.
     *
     * @since 1.5.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type string $0 App key (unused).
     *     @type int    $1 Blog ID (unused).
     *     @type string $2 Username.
     *     @type string $3 Password.
     *     @type string $4 Content.
     *     @type int    $5 Publish flag. 0 for draft, 1 for publish.
     * }
     * @return int|IXR_Error
     * @phpstan-param array{
     *   0: string,
     *   1: int,
     *   2: string,
     *   3: string,
     *   4: string,
     *   5: int,
     * } $args
     */
    public function blogger_newPost($args)
    {
    }
    /**
     * Edits a post.
     *
     * @since 1.5.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type int    $1 Post ID.
     *     @type string $2 Username.
     *     @type string $3 Password.
     *     @type string $4 Content
     *     @type int    $5 Publish flag. 0 for draft, 1 for publish.
     * }
     * @return true|IXR_Error true when done.
     * @phpstan-param array{
     *   0: int,
     *   1: int,
     *   2: string,
     *   3: string,
     *   4: string,
     *   5: int,
     * } $args
     */
    public function blogger_editPost($args)
    {
    }
    /**
     * Deletes a post.
     *
     * @since 1.5.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type int    $1 Post ID.
     *     @type string $2 Username.
     *     @type string $3 Password.
     * }
     * @return true|IXR_Error True when post is deleted.
     * @phpstan-param array{
     *   0: int,
     *   1: int,
     *   2: string,
     *   3: string,
     * } $args
     */
    public function blogger_deletePost($args)
    {
    }
    /**
     * Creates a new post.
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
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     *     @type array  $3 Content structure.
     *     @type int    $4 Optional. Publish flag. 0 for draft, 1 for publish. Default 0.
     * }
     * @return int|IXR_Error
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: array,
     *   4: int,
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
     * @param int   $post_id   Post ID.
     * @param array $enclosure Enclosure data.
     */
    public function add_enclosure_if_new($post_id, $enclosure)
    {
    }
    /**
     * Attaches an upload to a post.
     *
     * @since 2.1.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param int    $post_id      Post ID.
     * @param string $post_content Post Content for attachment.
     */
    public function attach_uploads($post_id, $post_content)
    {
    }
    /**
     * Edits a post.
     *
     * @since 1.5.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Post ID.
     *     @type string $1 Username.
     *     @type string $2 Password.
     *     @type array  $3 Content structure.
     *     @type int    $4 Optional. Publish flag. 0 for draft, 1 for publish. Default 0.
     * }
     * @return true|IXR_Error True on success.
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: array,
     *   4: int,
     * } $args
     */
    public function mw_editPost($args)
    {
    }
    /**
     * Retrieves a post.
     *
     * @since 1.5.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Post ID.
     *     @type string $1 Username.
     *     @type string $2 Password.
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     * } $args
     */
    public function mw_getPost($args)
    {
    }
    /**
     * Retrieves list of recent posts.
     *
     * @since 1.5.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     *     @type int    $3 Optional. Number of posts.
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: int,
     * } $args
     */
    public function mw_getRecentPosts($args)
    {
    }
    /**
     * Retrieves the list of categories on a given blog.
     *
     * @since 1.5.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
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
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     *     @type array  $3 Data.
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: array,
     * } $args
     */
    public function mw_newMediaObject($args)
    {
    }
    /**
     * Retrieves the post titles of recent posts.
     *
     * @since 1.5.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     *     @type int    $3 Optional. Number of posts.
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: int,
     * } $args
     */
    public function mt_getRecentPostTitles($args)
    {
    }
    /**
     * Retrieves the list of all categories on a blog.
     *
     * @since 1.5.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Blog ID (unused).
     *     @type string $1 Username.
     *     @type string $2 Password.
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     * } $args
     */
    public function mt_getCategoryList($args)
    {
    }
    /**
     * Retrieves post categories.
     *
     * @since 1.5.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Post ID.
     *     @type string $1 Username.
     *     @type string $2 Password.
     * }
     * @return array|IXR_Error
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
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
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Post ID.
     *     @type string $1 Username.
     *     @type string $2 Password.
     *     @type array  $3 Categories.
     * }
     * @return true|IXR_Error True on success.
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     *   3: array,
     * } $args
     */
    public function mt_setPostCategories($args)
    {
    }
    /**
     * Retrieves an array of methods supported by this server.
     *
     * @since 1.5.0
     *
     * @return array
     */
    public function mt_supportedMethods()
    {
    }
    /**
     * Retrieves an empty array because we don't support per-post text filters.
     *
     * @since 1.5.0
     */
    public function mt_supportedTextFilters()
    {
    }
    /**
     * Retrieves trackbacks sent to a given post.
     *
     * @since 1.5.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param int $post_id
     * @return array|IXR_Error
     */
    public function mt_getTrackbackPings($post_id)
    {
    }
    /**
     * Sets a post's publish status to 'publish'.
     *
     * @since 1.5.0
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type int    $0 Post ID.
     *     @type string $1 Username.
     *     @type string $2 Password.
     * }
     * @return int|IXR_Error
     * @phpstan-param array{
     *   0: int,
     *   1: string,
     *   2: string,
     * } $args
     */
    public function mt_publishPost($args)
    {
    }
    /**
     * Retrieves a pingback and registers it.
     *
     * @since 1.5.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param array $args {
     *     Method arguments. Note: arguments must be ordered as documented.
     *
     *     @type string $0 URL of page linked from.
     *     @type string $1 URL of page linked to.
     * }
     * @return string|IXR_Error
     * @phpstan-param array{
     *   0: string,
     *   1: string,
     * } $args
     */
    public function pingback_ping($args)
    {
    }
    /**
     * Retrieves an array of URLs that pingbacked the given URL.
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