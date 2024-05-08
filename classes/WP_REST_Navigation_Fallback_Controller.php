<?php


/**
 * WP_REST_Navigation_Fallback_Controller class
 *
 * REST Controller to create/fetch a fallback Navigation Menu.
 *
 * @package WordPress
 * @subpackage REST_API
 * @since 6.3.0
 */
/**
 * REST Controller to fetch a fallback Navigation Block Menu. If needed it creates one.
 *
 * @since 6.3.0
 */
class WP_REST_Navigation_Fallback_Controller extends \WP_REST_Controller
{
    /**
     * Constructs the controller.
     *
     * @since 6.3.0
     */
    public function __construct()
    {
    }
    /**
     * Registers the controllers routes.
     *
     * @since 6.3.0
     */
    public function register_routes()
    {
    }
    /**
     * Checks if a given request has access to read fallbacks.
     *
     * @since 6.3.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has read access, WP_Error object otherwise.
     */
    public function get_item_permissions_check($request)
    {
    }
    /**
     * Gets the most appropriate fallback Navigation Menu.
     *
     * @since 6.3.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function get_item($request)
    {
    }
    /**
     * Retrieves the fallbacks' schema, conforming to JSON Schema.
     *
     * @since 6.3.0
     *
     * @return array Item schema data.
     */
    public function get_item_schema()
    {
    }
    /**
     * Matches the post data to the schema we want.
     *
     * @since 6.3.0
     *
     * @param WP_Post         $item    The wp_navigation Post object whose response is being prepared.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response $response The response data.
     */
    public function prepare_item_for_response($item, $request)
    {
    }
}