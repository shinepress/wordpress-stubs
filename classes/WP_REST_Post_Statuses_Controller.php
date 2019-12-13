<?php


/**
 * REST API: WP_REST_Post_Statuses_Controller class
 *
 * @package WordPress
 * @subpackage REST_API
 * @since 4.7.0
 */
/**
 * Core class used to access post statuses via the REST API.
 *
 * @since 4.7.0
 *
 * @see WP_REST_Controller
 */
class WP_REST_Post_Statuses_Controller extends \WP_REST_Controller
{
    /**
     * Constructor.
     *
     * @since 4.7.0
     * @access public
     */
    public function __construct()
    {
    }
    /**
     * Registers the routes for the objects of the controller.
     *
     * @since 4.7.0
     * @access public
     *
     * @see register_rest_route()
     */
    public function register_routes()
    {
    }
    /**
     * Checks whether a given request has permission to read post statuses.
     *
     * @since 4.7.0
     * @access public
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|bool True if the request has read access, WP_Error object otherwise.
     */
    public function get_items_permissions_check($request)
    {
    }
    /**
     * Retrieves all post statuses, depending on user context.
     *
     * @since 4.7.0
     * @access public
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response Response object on success, or WP_Error object on failure.
     */
    public function get_items($request)
    {
    }
    /**
     * Checks if a given request has access to read a post status.
     *
     * @since 4.7.0
     * @access public
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|bool True if the request has read access for the item, WP_Error object otherwise.
     */
    public function get_item_permissions_check($request)
    {
    }
    /**
     * Checks whether a given post status should be visible.
     *
     * @since 4.7.0
     * @access protected
     *
     * @param object $status Post status.
     * @return bool True if the post status is visible, otherwise false.
     */
    protected function check_read_permission($status)
    {
    }
    /**
     * Retrieves a specific post status.
     *
     * @since 4.7.0
     * @access public
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response Response object on success, or WP_Error object on failure.
     */
    public function get_item($request)
    {
    }
    /**
     * Prepares a post status object for serialization.
     *
     * @since 4.7.0
     * @access public
     *
     * @param stdClass        $status  Post status data.
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response Post status data.
     */
    public function prepare_item_for_response($status, $request)
    {
    }
    /**
     * Retrieves the post status' schema, conforming to JSON Schema.
     *
     * @since 4.7.0
     * @access public
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
     * @access public
     *
     * @return array Collection parameters.
     */
    public function get_collection_params()
    {
    }
}