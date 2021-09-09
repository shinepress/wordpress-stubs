<?php


/**
 * REST API: WP_REST_Block_Directory_Controller class
 *
 * @package WordPress
 * @subpackage REST_API
 * @since 5.5.0
 */
/**
 * Controller which provides REST endpoint for the blocks.
 *
 * @since 5.5.0
 *
 * @see WP_REST_Controller
 */
class WP_REST_Block_Directory_Controller extends \WP_REST_Controller
{
    /**
     * Constructs the controller.
     */
    public function __construct()
    {
    }
    /**
     * Registers the necessary REST API routes.
     */
    public function register_routes()
    {
    }
    /**
     * Checks whether a given request has permission to install and activate plugins.
     *
     * @since 5.5.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has permission, WP_Error object otherwise.
     */
    public function get_items_permissions_check($request)
    {
    }
    /**
     * Search and retrieve blocks metadata
     *
     * @since 5.5.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function get_items($request)
    {
    }
    /**
     * Parse block metadata for a block, and prepare it for an API repsonse.
     *
     * @since 5.5.0
     *
     * @param array           $plugin  The plugin metadata.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function prepare_item_for_response($plugin, $request)
    {
    }
    /**
     * Generates a list of links to include in the response for the plugin.
     *
     * @since 5.5.0
     *
     * @param array $plugin The plugin data from WordPress.org.
     * @return array
     */
    protected function prepare_links($plugin)
    {
    }
    /**
     * Finds an installed plugin for the given slug.
     *
     * @since 5.5.0
     *
     * @param string $slug The WordPress.org directory slug for a plugin.
     * @return string The plugin file found matching it.
     */
    protected function find_plugin_for_slug($slug)
    {
    }
    /**
     * Retrieves the theme's schema, conforming to JSON Schema.
     *
     * @since 5.5.0
     *
     * @return array Item schema data.
     */
    public function get_item_schema()
    {
    }
    /**
     * Retrieves the search params for the blocks collection.
     *
     * @since 5.5.0
     *
     * @return array Collection parameters.
     */
    public function get_collection_params()
    {
    }
}