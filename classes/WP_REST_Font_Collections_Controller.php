<?php


/**
 * Font Library Controller class.
 *
 * @since 6.5.0
 */
class WP_REST_Font_Collections_Controller extends \WP_REST_Controller
{
    /**
     * Constructor.
     *
     * @since 6.5.0
     */
    public function __construct()
    {
    }
    /**
     * Registers the routes for the objects of the controller.
     *
     * @since 6.5.0
     */
    public function register_routes()
    {
    }
    /**
     * Gets the font collections available.
     *
     * @since 6.5.0
     *
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function get_items($request)
    {
    }
    /**
     * Gets a font collection.
     *
     * @since 6.5.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function get_item($request)
    {
    }
    /**
     * Prepare a single collection output for response.
     *
     * @since 6.5.0
     *
     * @param WP_Font_Collection $item    Font collection object.
     * @param WP_REST_Request    $request Request object.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function prepare_item_for_response($item, $request)
    {
    }
    /**
     * Retrieves the font collection's schema, conforming to JSON Schema.
     *
     * @since 6.5.0
     *
     * @return array Item schema data.
     */
    public function get_item_schema()
    {
    }
    /**
     * Prepares links for the request.
     *
     * @since 6.5.0
     *
     * @param WP_Font_Collection $collection Font collection data
     * @return array Links for the given font collection.
     */
    protected function prepare_links($collection)
    {
    }
    /**
     * Retrieves the search params for the font collections.
     *
     * @since 6.5.0
     *
     * @return array Collection parameters.
     */
    public function get_collection_params()
    {
    }
    /**
     * Checks whether the user has permissions to use the Fonts Collections.
     *
     * @since 6.5.0
     *
     * @return true|WP_Error True if the request has write access for the item, WP_Error object otherwise.
     */
    public function get_items_permissions_check($request)
    {
    }
}