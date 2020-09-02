<?php


/**
 * Block Renderer REST API: WP_REST_Block_Renderer_Controller class
 *
 * @package WordPress
 * @subpackage REST_API
 * @since 5.0.0
 */
/**
 * Controller which provides REST endpoint for rendering a block.
 *
 * @since 5.0.0
 *
 * @see WP_REST_Controller
 */
class WP_REST_Block_Renderer_Controller extends \WP_REST_Controller
{
    /**
     * Constructs the controller.
     *
     * @since 5.0.0
     */
    public function __construct()
    {
    }
    /**
     * Registers the necessary REST API routes, one for each dynamic block.
     *
     * @since 5.0.0
     *
     * @see register_rest_route()
     */
    public function register_routes()
    {
    }
    /**
     * Checks if a given request has access to read blocks.
     *
     * @since 5.0.0
     *
     * @param WP_REST_Request $request Request.
     * @return true|WP_Error True if the request has read access, WP_Error object otherwise.
     */
    public function get_item_permissions_check($request)
    {
    }
    /**
     * Returns block output from block's registered render_callback.
     *
     * @since 5.0.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function get_item($request)
    {
    }
    /**
     * Retrieves block's output schema, conforming to JSON Schema.
     *
     * @since 5.0.0
     *
     * @return array Item schema data.
     */
    public function get_item_schema()
    {
    }
}