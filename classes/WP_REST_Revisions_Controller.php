<?php


/**
 * REST API: WP_REST_Revisions_Controller class
 *
 * @package WordPress
 * @subpackage REST_API
 * @since 4.7.0
 */
/**
 * Core class used to access revisions via the REST API.
 *
 * @since 4.7.0
 *
 * @see WP_REST_Controller
 */
class WP_REST_Revisions_Controller extends \WP_REST_Controller
{
    /**
     * Parent post type.
     *
     * @since 4.7.0
     * @var string
     */
    private $parent_post_type;
    /**
     * Parent controller.
     *
     * @since 4.7.0
     * @var WP_REST_Controller
     */
    private $parent_controller;
    /**
     * The base of the parent controller's route.
     *
     * @since 4.7.0
     * @var string
     */
    private $parent_base;
    /**
     * Constructor.
     *
     * @since 4.7.0
     *
     * @param string $parent_post_type Post type of the parent.
     */
    public function __construct($parent_post_type)
    {
    }
    /**
     * Registers the routes for revisions based on post types supporting revisions.
     *
     * @since 4.7.0
     *
     * @see register_rest_route()
     */
    public function register_routes()
    {
    }
    /**
     * Get the parent post, if the ID is valid.
     *
     * @since 4.7.2
     *
     * @param int $parent Supplied ID.
     * @return WP_Post|WP_Error Post object if ID is valid, WP_Error otherwise.
     */
    protected function get_parent($parent)
    {
    }
    /**
     * Checks if a given request has access to get revisions.
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
     * Get the revision, if the ID is valid.
     *
     * @since 4.7.2
     *
     * @param int $id Supplied ID.
     * @return WP_Post|WP_Error Revision post object if ID is valid, WP_Error otherwise.
     */
    protected function get_revision($id)
    {
    }
    /**
     * Gets a collection of revisions.
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
     * Checks if a given request has access to get a specific revision.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has read access for the item, WP_Error object otherwise.
     */
    public function get_item_permissions_check($request)
    {
    }
    /**
     * Retrieves one revision from the collection.
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
     * Checks if a given request has access to delete a revision.
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
     * Deletes a single revision.
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
     * @since 5.0.0
     *
     * @param array           $prepared_args Optional. Prepared WP_Query arguments. Default empty array.
     * @param WP_REST_Request $request       Optional. Full details about the request.
     * @return array Items query arguments.
     */
    protected function prepare_items_query($prepared_args = array(), $request = \null)
    {
    }
    /**
     * Prepares the revision for the REST response.
     *
     * @since 4.7.0
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
     * Checks the post_date_gmt or modified_gmt and prepare any post or
     * modified date for single post output.
     *
     * @since 4.7.0
     *
     * @param string      $date_gmt GMT publication time.
     * @param string|null $date     Optional. Local publication time. Default null.
     * @return string|null ISO8601/RFC3339 formatted datetime, otherwise null.
     */
    protected function prepare_date_response($date_gmt, $date = \null)
    {
    }
    /**
     * Retrieves the revision's schema, conforming to JSON Schema.
     *
     * @since 4.7.0
     *
     * @return array Item schema data.
     */
    public function get_item_schema()
    {
    }
    /**
     * Retrieves the query params for collections.
     *
     * @since 4.7.0
     *
     * @return array Collection parameters.
     */
    public function get_collection_params()
    {
    }
    /**
     * Checks the post excerpt and prepare it for single post output.
     *
     * @since 4.7.0
     *
     * @param string  $excerpt The post excerpt.
     * @param WP_Post $post    Post revision object.
     * @return string Prepared excerpt or empty string.
     */
    protected function prepare_excerpt_response($excerpt, $post)
    {
    }
}