<?php


/**
 * REST API: WP_REST_Taxonomies_Controller class
 *
 * @package WordPress
 * @subpackage REST_API
 * @since 4.7.0
 */
/**
 * Core class used to manage taxonomies via the REST API.
 *
 * @since 4.7.0
 *
 * @see WP_REST_Controller
 */
class WP_REST_Taxonomies_Controller extends \WP_REST_Controller
{
    /**
     * Constructor.
     *
     * @since 4.7.0
     */
    public function __construct()
    {
    }
    /**
     * Registers the routes for taxonomies.
     *
     * @since 4.7.0
     *
     * @see register_rest_route()
     */
    public function register_routes()
    {
    }
    /**
     * Checks whether a given request has permission to read taxonomies.
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
     * Retrieves all public taxonomies.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response Response object on success, or WP_Error object on failure.
     */
    public function get_items($request)
    {
    }
    /**
     * Checks if a given request has access to a taxonomy.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has read access for the item, otherwise false or WP_Error object.
     */
    public function get_item_permissions_check($request)
    {
    }
    /**
     * Retrieves a specific taxonomy.
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
     * Prepares a taxonomy object for serialization.
     *
     * @since 4.7.0
     * @since 5.9.0 Renamed `$taxonomy` to `$item` to match parent class for PHP 8 named parameter support.
     *
     * @param WP_Taxonomy     $item    Taxonomy data.
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response Response object.
     */
    public function prepare_item_for_response($item, $request)
    {
    }
    /**
     * Prepares links for the request.
     *
     * @since 6.1.0
     *
     * @param WP_Taxonomy $taxonomy The taxonomy.
     * @return array Links for the given taxonomy.
     */
    protected function prepare_links($taxonomy)
    {
    }
    /**
     * Retrieves the taxonomy's schema, conforming to JSON Schema.
     *
     * @since 4.7.0
     * @since 5.0.0 The `visibility` property was added.
     * @since 5.9.0 The `rest_namespace` property was added.
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
}