<?php


/**
 * REST API: WP_REST_Comments_Controller class
 *
 * @package WordPress
 * @subpackage REST_API
 * @since 4.7.0
 */
/**
 * Core controller used to access comments via the REST API.
 *
 * @since 4.7.0
 *
 * @see WP_REST_Controller
 */
class WP_REST_Comments_Controller extends \WP_REST_Controller
{
    /**
     * Instance of a comment meta fields object.
     *
     * @since 4.7.0
     * @var WP_REST_Comment_Meta_Fields
     */
    protected $meta;
    /**
     * Constructor.
     *
     * @since 4.7.0
     */
    public function __construct()
    {
    }
    /**
     * Registers the routes for the objects of the controller.
     *
     * @since 4.7.0
     */
    public function register_routes()
    {
    }
    /**
     * Checks if a given request has access to read comments.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|bool True if the request has read access, error object otherwise.
     */
    public function get_items_permissions_check($request)
    {
    }
    /**
     * Retrieves a list of comment items.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response Response object on success, or error object on failure.
     */
    public function get_items($request)
    {
    }
    /**
     * Get the comment, if the ID is valid.
     *
     * @since 4.7.2
     *
     * @param int $id Supplied ID.
     * @return WP_Comment|WP_Error Comment object if ID is valid, WP_Error otherwise.
     */
    protected function get_comment($id)
    {
    }
    /**
     * Checks if a given request has access to read the comment.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|bool True if the request has read access for the item, error object otherwise.
     */
    public function get_item_permissions_check($request)
    {
    }
    /**
     * Retrieves a comment.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response Response object on success, or error object on failure.
     */
    public function get_item($request)
    {
    }
    /**
     * Checks if a given request has access to create a comment.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|bool True if the request has access to create items, error object otherwise.
     */
    public function create_item_permissions_check($request)
    {
    }
    /**
     * Creates a comment.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response Response object on success, or error object on failure.
     */
    public function create_item($request)
    {
    }
    /**
     * Checks if a given REST request has access to update a comment.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|bool True if the request has access to update the item, error object otherwise.
     */
    public function update_item_permissions_check($request)
    {
    }
    /**
     * Updates a comment.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response Response object on success, or error object on failure.
     */
    public function update_item($request)
    {
    }
    /**
     * Checks if a given request has access to delete a comment.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|bool True if the request has access to delete the item, error object otherwise.
     */
    public function delete_item_permissions_check($request)
    {
    }
    /**
     * Deletes a comment.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response Response object on success, or error object on failure.
     */
    public function delete_item($request)
    {
    }
    /**
     * Prepares a single comment output for response.
     *
     * @since 4.7.0
     *
     * @param WP_Comment      $comment Comment object.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response Response object.
     */
    public function prepare_item_for_response($comment, $request)
    {
    }
    /**
     * Prepares links for the request.
     *
     * @since 4.7.0
     *
     * @param WP_Comment $comment Comment object.
     * @return array Links for the given comment.
     */
    protected function prepare_links($comment)
    {
    }
    /**
     * Prepends internal property prefix to query parameters to match our response fields.
     *
     * @since 4.7.0
     *
     * @param string $query_param Query parameter.
     * @return string The normalized query parameter.
     */
    protected function normalize_query_param($query_param)
    {
    }
    /**
     * Checks comment_approved to set comment status for single comment output.
     *
     * @since 4.7.0
     *
     * @param string|int $comment_approved comment status.
     * @return string Comment status.
     */
    protected function prepare_status_response($comment_approved)
    {
    }
    /**
     * Prepares a single comment to be inserted into the database.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Request object.
     * @return array|WP_Error Prepared comment, otherwise WP_Error object.
     */
    protected function prepare_item_for_database($request)
    {
    }
    /**
     * Retrieves the comment's schema, conforming to JSON Schema.
     *
     * @since 4.7.0
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
    /**
     * Retrieves the query params for collections.
     *
     * @since 4.7.0
     *
     * @return array Comments collection parameters.
     */
    public function get_collection_params()
    {
    }
    /**
     * Sets the comment_status of a given comment object when creating or updating a comment.
     *
     * @since 4.7.0
     *
     * @param string|int $new_status New comment status.
     * @param int        $comment_id Comment ID.
     * @return bool Whether the status was changed.
     */
    protected function handle_status_param($new_status, $comment_id)
    {
    }
    /**
     * Checks if the post can be read.
     *
     * Correctly handles posts with the inherit status.
     *
     * @since 4.7.0
     *
     * @param WP_Post         $post    Post object.
     * @param WP_REST_Request $request Request data to check.
     * @return bool Whether post can be read.
     */
    protected function check_read_post_permission($post, $request)
    {
    }
    /**
     * Checks if the comment can be read.
     *
     * @since 4.7.0
     *
     * @param WP_Comment      $comment Comment object.
     * @param WP_REST_Request $request Request data to check.
     * @return bool Whether the comment can be read.
     */
    protected function check_read_permission($comment, $request)
    {
    }
    /**
     * Checks if a comment can be edited or deleted.
     *
     * @since 4.7.0
     *
     * @param object $comment Comment object.
     * @return bool Whether the comment can be edited or deleted.
     */
    protected function check_edit_permission($comment)
    {
    }
    /**
     * Checks a comment author email for validity.
     *
     * Accepts either a valid email address or empty string as a valid comment
     * author email address. Setting the comment author email to an empty
     * string is allowed when a comment is being updated.
     *
     * @since 4.7.0
     *
     * @param string          $value   Author email value submitted.
     * @param WP_REST_Request $request Full details about the request.
     * @param string          $param   The parameter name.
     * @return WP_Error|string The sanitized email address, if valid,
     *                         otherwise an error.
     */
    public function check_comment_author_email($value, $request, $param)
    {
    }
}