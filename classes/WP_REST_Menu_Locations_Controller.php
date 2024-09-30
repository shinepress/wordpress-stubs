<?php


/**
 * Core class used to access menu locations via the REST API.
 *
 * @since 5.9.0
 *
 * @see WP_REST_Controller
 */
class WP_REST_Menu_Locations_Controller extends \WP_REST_Controller
{
    /**
     * Menu Locations Constructor.
     *
     * @since 5.9.0
     */
    public function __construct()
    {
    }
    /**
     * Registers the routes for the objects of the controller.
     *
     * @since 5.9.0
     *
     * @see register_rest_route()
     */
    public function register_routes()
    {
    }
    /**
     * Checks whether a given request has permission to read menu locations.
     *
     * @since 5.9.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|bool True if the request has read access, WP_Error object otherwise.
     */
    public function get_items_permissions_check($request)
    {
    }
    /**
     * Retrieves all menu locations, depending on user context.
     *
     * @since 5.9.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response Response object on success, or WP_Error object on failure.
     */
    public function get_items($request)
    {
    }
    /**
     * Checks if a given request has access to read a menu location.
     *
     * @since 5.9.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has read access for the item, WP_Error object otherwise.
     */
    public function get_item_permissions_check($request)
    {
    }
    /**
     * Retrieves a specific menu location.
     *
     * @since 5.9.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response Response object on success, or WP_Error object on failure.
     */
    public function get_item($request)
    {
    }
    /**
     * Prepares a menu location object for serialization.
     *
     * @since 5.9.0
     *
     * @param stdClass        $item    Post status data.
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response Menu location data.
     */
    public function prepare_item_for_response($item, $request)
    {
    }
    /**
     * Prepares links for the request.
     *
     * @since 5.9.0
     *
     * @param stdClass $location Menu location.
     * @return array Links for the given menu location.
     */
    protected function prepare_links($location)
    {
    }
    /**
     * Retrieves the menu location's schema, conforming to JSON Schema.
     *
     * @since 5.9.0
     *
     * @return array Item schema data.
     */
    public function get_item_schema()
    {
    }
    /**
     * Retrieves the query params for collections.
     *
     * @since 5.9.0
     *
     * @return array Collection parameters.
     */
    public function get_collection_params()
    {
    }
}