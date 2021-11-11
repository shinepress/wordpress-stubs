<?php


/**
 * REST API: WP_REST_Posts_Controller class
 *
 * @package WordPress
 * @subpackage REST_API
 * @since 4.7.0
 */
/**
 * Core class to access posts via the REST API.
 *
 * @since 4.7.0
 *
 * @see WP_REST_Controller
 */
class WP_REST_Posts_Controller extends \WP_REST_Controller
{
    /**
     * Post type.
     *
     * @since 4.7.0
     * @var string
     */
    protected $post_type;
    /**
     * Instance of a post meta fields object.
     *
     * @since 4.7.0
     * @var WP_REST_Post_Meta_Fields
     */
    protected $meta;
    /**
     * Passwordless post access permitted.
     *
     * @since 5.7.1
     * @var int[]
     */
    protected $password_check_passed = array();
    /**
     * Constructor.
     *
     * @since 4.7.0
     *
     * @param string $post_type Post type.
     */
    public function __construct($post_type)
    {
    }
    /**
     * Registers the routes for the objects of the controller.
     *
     * @since 4.7.0
     *
     * @see register_rest_route()
     */
    public function register_routes()
    {
    }
    /**
     * Checks if a given request has access to read posts.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has read access, WP_Error object otherwise.
     */
    public function get_items_permissions_check($request)
    {
    }
    /**
     * Override the result of the post password check for REST requested posts.
     *
     * Allow users to read the content of password protected posts if they have
     * previously passed a permission check or if they have the `edit_post` capability
     * for the post being checked.
     *
     * @since 5.7.1
     *
     * @param bool    $required Whether the post requires a password check.
     * @param WP_Post $post     The post been password checked.
     * @return bool Result of password check taking in to account REST API considerations.
     */
    public function check_password_required($required, $post)
    {
    }
    /**
     * Retrieves a collection of posts.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function get_items($request)
    {
    }
    /**
     * Get the post, if the ID is valid.
     *
     * @since 4.7.2
     *
     * @param int $id Supplied ID.
     * @return WP_Post|WP_Error Post object if ID is valid, WP_Error otherwise.
     */
    protected function get_post($id)
    {
    }
    /**
     * Checks if a given request has access to read a post.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return bool|WP_Error True if the request has read access for the item, WP_Error object otherwise.
     */
    public function get_item_permissions_check($request)
    {
    }
    /**
     * Checks if the user can access password-protected content.
     *
     * This method determines whether we need to override the regular password
     * check in core with a filter.
     *
     * @since 4.7.0
     *
     * @param WP_Post         $post    Post to check against.
     * @param WP_REST_Request $request Request data to check.
     * @return bool True if the user can access password-protected content, otherwise false.
     */
    public function can_access_password_content($post, $request)
    {
    }
    /**
     * Retrieves a single post.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function get_item($request)
    {
    }
    /**
     * Checks if a given request has access to create a post.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has access to create items, WP_Error object otherwise.
     */
    public function create_item_permissions_check($request)
    {
    }
    /**
     * Creates a single post.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function create_item($request)
    {
    }
    /**
     * Checks if a given request has access to update a post.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has access to update the item, WP_Error object otherwise.
     */
    public function update_item_permissions_check($request)
    {
    }
    /**
     * Updates a single post.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function update_item($request)
    {
    }
    /**
     * Checks if a given request has access to delete a post.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has access to delete the item, WP_Error object otherwise.
     */
    public function delete_item_permissions_check($request)
    {
    }
    /**
     * Deletes a single post.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function delete_item($request)
    {
    }
    /**
     * Determines the allowed query_vars for a get_items() response and prepares
     * them for WP_Query.
     *
     * @since 4.7.0
     *
     * @param array           $prepared_args Optional. Prepared WP_Query arguments. Default empty array.
     * @param WP_REST_Request $request       Optional. Full details about the request.
     * @return array Items query arguments.
     */
    protected function prepare_items_query($prepared_args = array(), $request = \null)
    {
    }
    /**
     * Checks the post_date_gmt or modified_gmt and prepare any post or
     * modified date for single post output.
     *
     * @since 4.7.0
     *
     * @param string      $date_gmt GMT publication time.
     * @param string|null $date     Optional. Local publication time. Default null.
     * @return string|null ISO8601/RFC3339 formatted datetime.
     */
    protected function prepare_date_response($date_gmt, $date = \null)
    {
    }
    /**
     * Prepares a single post for create or update.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Request object.
     * @return stdClass|WP_Error Post object or WP_Error.
     */
    protected function prepare_item_for_database($request)
    {
    }
    /**
     * Checks whether the status is valid for the given post.
     *
     * Allows for sending an update request with the current status, even if that status would not be acceptable.
     *
     * @since 5.6.0
     *
     * @param string          $status  The provided status.
     * @param WP_REST_Request $request The request object.
     * @param string          $param   The parameter name.
     * @return true|WP_Error True if the status is valid, or WP_Error if not.
     */
    public function check_status($status, $request, $param)
    {
    }
    /**
     * Determines validity and normalizes the given status parameter.
     *
     * @since 4.7.0
     *
     * @param string       $post_status Post status.
     * @param WP_Post_Type $post_type   Post type.
     * @return string|WP_Error Post status or WP_Error if lacking the proper permission.
     */
    protected function handle_status_param($post_status, $post_type)
    {
    }
    /**
     * Determines the featured media based on a request param.
     *
     * @since 4.7.0
     *
     * @param int $featured_media Featured Media ID.
     * @param int $post_id        Post ID.
     * @return bool|WP_Error Whether the post thumbnail was successfully deleted, otherwise WP_Error.
     */
    protected function handle_featured_media($featured_media, $post_id)
    {
    }
    /**
     * Check whether the template is valid for the given post.
     *
     * @since 4.9.0
     *
     * @param string          $template Page template filename.
     * @param WP_REST_Request $request  Request.
     * @return bool|WP_Error True if template is still valid or if the same as existing value, or false if template not supported.
     */
    public function check_template($template, $request)
    {
    }
    /**
     * Sets the template for a post.
     *
     * @since 4.7.0
     * @since 4.9.0 Added the `$validate` parameter.
     *
     * @param string $template Page template filename.
     * @param int    $post_id  Post ID.
     * @param bool   $validate Whether to validate that the template selected is valid.
     */
    public function handle_template($template, $post_id, $validate = \false)
    {
    }
    /**
     * Updates the post's terms from a REST request.
     *
     * @since 4.7.0
     *
     * @param int             $post_id The post ID to update the terms form.
     * @param WP_REST_Request $request The request object with post and terms data.
     * @return null|WP_Error WP_Error on an error assigning any of the terms, otherwise null.
     */
    protected function handle_terms($post_id, $request)
    {
    }
    /**
     * Checks whether current user can assign all terms sent with the current request.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request The request object with post and terms data.
     * @return bool Whether the current user can assign the provided terms.
     */
    protected function check_assign_terms_permission($request)
    {
    }
    /**
     * Checks if a given post type can be viewed or managed.
     *
     * @since 4.7.0
     *
     * @param WP_Post_Type|string $post_type Post type name or object.
     * @return bool Whether the post type is allowed in REST.
     */
    protected function check_is_post_type_allowed($post_type)
    {
    }
    /**
     * Checks if a post can be read.
     *
     * Correctly handles posts with the inherit status.
     *
     * @since 4.7.0
     *
     * @param WP_Post $post Post object.
     * @return bool Whether the post can be read.
     */
    public function check_read_permission($post)
    {
    }
    /**
     * Checks if a post can be edited.
     *
     * @since 4.7.0
     *
     * @param WP_Post $post Post object.
     * @return bool Whether the post can be edited.
     */
    protected function check_update_permission($post)
    {
    }
    /**
     * Checks if a post can be created.
     *
     * @since 4.7.0
     *
     * @param WP_Post $post Post object.
     * @return bool Whether the post can be created.
     */
    protected function check_create_permission($post)
    {
    }
    /**
     * Checks if a post can be deleted.
     *
     * @since 4.7.0
     *
     * @param WP_Post $post Post object.
     * @return bool Whether the post can be deleted.
     */
    protected function check_delete_permission($post)
    {
    }
    /**
     * Prepares a single post output for response.
     *
     * @since 4.7.0
     *
     * @param WP_Post         $post    Post object.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response Response object.
     */
    public function prepare_item_for_response($post, $request)
    {
    }
    /**
     * Overwrites the default protected title format.
     *
     * By default, WordPress will show password protected posts with a title of
     * "Protected: %s", as the REST API communicates the protected status of a post
     * in a machine readable format, we remove the "Protected: " prefix.
     *
     * @since 4.7.0
     *
     * @return string Protected title format.
     */
    public function protected_title_format()
    {
    }
    /**
     * Prepares links for the request.
     *
     * @since 4.7.0
     *
     * @param WP_Post $post Post object.
     * @return array Links for the given post.
     */
    protected function prepare_links($post)
    {
    }
    /**
     * Get the link relations available for the post and current user.
     *
     * @since 4.9.8
     *
     * @param WP_Post         $post    Post object.
     * @param WP_REST_Request $request Request object.
     * @return array List of link relations.
     */
    protected function get_available_actions($post, $request)
    {
    }
    /**
     * Retrieves the post's schema, conforming to JSON Schema.
     *
     * @since 4.7.0
     *
     * @return array Item schema data.
     */
    public function get_item_schema()
    {
    }
    /**
     * Retrieve Link Description Objects that should be added to the Schema for the posts collection.
     *
     * @since 4.9.8
     *
     * @return array
     */
    protected function get_schema_links()
    {
    }
    /**
     * Retrieves the query params for the posts collection.
     *
     * @since 4.7.0
     *
     * @return array Collection parameters.
     */
    public function get_collection_params()
    {
    }
    /**
     * Sanitizes and validates the list of post statuses, including whether the
     * user can query private statuses.
     *
     * @since 4.7.0
     *
     * @param string|array    $statuses  One or more post statuses.
     * @param WP_REST_Request $request   Full details about the request.
     * @param string          $parameter Additional parameter to pass to validation.
     * @return array|WP_Error A list of valid statuses, otherwise WP_Error object.
     */
    public function sanitize_post_statuses($statuses, $request, $parameter)
    {
    }
}