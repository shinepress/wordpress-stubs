<?php


/**
 * Core class used to access autosaves via the REST API.
 *
 * @since 5.0.0
 *
 * @see WP_REST_Revisions_Controller
 * @see WP_REST_Controller
 */
class WP_REST_Autosaves_Controller extends \WP_REST_Revisions_Controller
{
    /**
     * Constructor.
     *
     * @since 5.0.0
     *
     * @param string $parent_post_type Post type of the parent.
     */
    public function __construct($parent_post_type)
    {
    }
    /**
     * Registers the routes for autosaves.
     *
     * @since 5.0.0
     *
     * @see register_rest_route()
     */
    public function register_routes()
    {
    }
    /**
     * Get the parent post.
     *
     * @since 5.0.0
     *
     * @param int $parent_id Supplied ID.
     * @return WP_Post|WP_Error Post object if ID is valid, WP_Error otherwise.
     */
    protected function get_parent($parent_id)
    {
    }
    /**
     * Checks if a given request has access to get autosaves.
     *
     * @since 5.0.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has read access, WP_Error object otherwise.
     */
    public function get_items_permissions_check($request)
    {
    }
    /**
     * Checks if a given request has access to create an autosave revision.
     *
     * Autosave revisions inherit permissions from the parent post,
     * check if the current user has permission to edit the post.
     *
     * @since 5.0.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has access to create the item, WP_Error object otherwise.
     */
    public function create_item_permissions_check($request)
    {
    }
    /**
     * Creates, updates or deletes an autosave revision.
     *
     * @since 5.0.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function create_item($request)
    {
    }
    /**
     * Get the autosave, if the ID is valid.
     *
     * @since 5.0.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Post|WP_Error Revision post object if ID is valid, WP_Error otherwise.
     */
    public function get_item($request)
    {
    }
    /**
     * Gets a collection of autosaves using wp_get_post_autosave.
     *
     * Contains the user's autosave, for empty if it doesn't exist.
     *
     * @since 5.0.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function get_items($request)
    {
    }
    /**
     * Retrieves the autosave's schema, conforming to JSON Schema.
     *
     * @since 5.0.0
     *
     * @return array Item schema data.
     */
    public function get_item_schema()
    {
    }
    /**
     * Creates autosave for the specified post.
     *
     * From wp-admin/post.php.
     *
     * @since 5.0.0
     * @since 6.4.0 The `$meta` parameter was added.
     *
     * @param array $post_data Associative array containing the post data.
     * @param array $meta      Associative array containing the post meta data.
     * @return mixed The autosave revision ID or WP_Error.
     */
    public function create_post_autosave($post_data, array $meta = array())
    {
    }
    /**
     * Prepares the revision for the REST response.
     *
     * @since 5.0.0
     * @since 5.9.0 Renamed `$post` to `$item` to match parent class for PHP 8 named parameter support.
     *
     * @param WP_Post         $item    Post revision object.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response Response object.
     */
    public function prepare_item_for_response($item, $request)
    {
    }
    /**
     * Retrieves the query params for the autosaves collection.
     *
     * @since 5.0.0
     *
     * @return array Collection parameters.
     */
    public function get_collection_params()
    {
    }
}