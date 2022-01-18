<?php


/**
 * REST API: WP_REST_Themes_Controller class
 *
 * @package WordPress
 * @subpackage REST_API
 * @since 5.0.0
 */
/**
 * Core class used to manage themes via the REST API.
 *
 * @since 5.0.0
 *
 * @see WP_REST_Controller
 */
class WP_REST_Themes_Controller extends \WP_REST_Controller
{
    /**
     * Constructor.
     *
     * @since 5.0.0
     */
    public function __construct()
    {
    }
    /**
     * Registers the routes for the objects of the controller.
     *
     * @since 5.0.0
     *
     * @see register_rest_route()
     */
    public function register_routes()
    {
    }
    /**
     * Checks if a given request has access to read the theme.
     *
     * @since 5.0.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has read access for the item, otherwise WP_Error object.
     */
    public function get_items_permissions_check($request)
    {
    }
    /**
     * Retrieves a collection of themes.
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
     * Prepares a single theme output for response.
     *
     * @since 5.0.0
     *
     * @param WP_Theme        $theme   Theme object.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response Response object.
     */
    public function prepare_item_for_response($theme, $request)
    {
    }
    /**
     * Retrieves the theme's schema, conforming to JSON Schema.
     *
     * @since 5.0.0
     *
     * @return array Item schema data.
     */
    public function get_item_schema()
    {
    }
    /**
     * Retrieves the search params for the themes collection.
     *
     * @since 5.0.0
     *
     * @return array Collection parameters.
     */
    public function get_collection_params()
    {
    }
    /**
     * Sanitizes and validates the list of theme status.
     *
     * @since 5.0.0
     *
     * @param string|array    $statuses  One or more theme statuses.
     * @param WP_REST_Request $request   Full details about the request.
     * @param string          $parameter Additional parameter to pass to validation.
     * @return array|WP_Error A list of valid statuses, otherwise WP_Error object.
     */
    public function sanitize_theme_status($statuses, $request, $parameter)
    {
    }
}