<?php


/**
 * REST API: WP_REST_Block_Patterns_Controller class
 *
 * @package    WordPress
 * @subpackage REST_API
 * @since      6.0.0
 */
/**
 * Core class used to access block patterns via the REST API.
 *
 * @since 6.0.0
 *
 * @see WP_REST_Controller
 */
class WP_REST_Block_Patterns_Controller extends \WP_REST_Controller
{
    /**
     * Defines whether remote patterns should be loaded.
     *
     * @since 6.0.0
     * @var bool
     */
    private $remote_patterns_loaded;
    /**
     * Constructs the controller.
     *
     * @since 6.0.0
     */
    public function __construct()
    {
    }
    /**
     * Registers the routes for the objects of the controller.
     *
     * @since 6.0.0
     */
    public function register_routes()
    {
    }
    /**
     * Checks whether a given request has permission to read block patterns.
     *
     * @since 6.0.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has read access, WP_Error object otherwise.
     */
    public function get_items_permissions_check($request)
    {
    }
    /**
     * Retrieves all block patterns.
     *
     * @since 6.0.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function get_items($request)
    {
    }
    /**
     * Prepare a raw block pattern before it gets output in a REST API response.
     *
     * @since 6.0.0
     *
     * @param array           $item    Raw pattern as registered, before any changes.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function prepare_item_for_response($item, $request)
    {
    }
    /**
     * Retrieves the block pattern schema, conforming to JSON Schema.
     *
     * @since 6.0.0
     *
     * @return array Item schema data.
     */
    public function get_item_schema()
    {
    }
}