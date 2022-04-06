<?php


/**
 * REST API: WP_REST_Search_Controller class
 *
 * @package WordPress
 * @subpackage REST_API
 * @since 5.0.0
 */
/**
 * Core class to search through all WordPress content via the REST API.
 *
 * @since 5.0.0
 *
 * @see WP_REST_Controller
 */
class WP_REST_Search_Controller extends \WP_REST_Controller
{
    /**
     * ID property name.
     */
    const PROP_ID = 'id';
    /**
     * Title property name.
     */
    const PROP_TITLE = 'title';
    /**
     * URL property name.
     */
    const PROP_URL = 'url';
    /**
     * Type property name.
     */
    const PROP_TYPE = 'type';
    /**
     * Subtype property name.
     */
    const PROP_SUBTYPE = 'subtype';
    /**
     * Identifier for the 'any' type.
     */
    const TYPE_ANY = 'any';
    /**
     * Search handlers used by the controller.
     *
     * @since 5.0.0
     * @var WP_REST_Search_Handler[]
     */
    protected $search_handlers = array();
    /**
     * Constructor.
     *
     * @since 5.0.0
     *
     * @param array $search_handlers List of search handlers to use in the controller. Each search
     *                               handler instance must extend the `WP_REST_Search_Handler` class.
     */
    public function __construct(array $search_handlers)
    {
    }
    /**
     * Registers the routes for the search controller.
     *
     * @since 5.0.0
     *
     * @see register_rest_route()
     */
    public function register_routes()
    {
    }
    /**
     * Checks if a given request has access to search content.
     *
     * @since 5.0.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has search access, WP_Error object otherwise.
     */
    public function get_items_permission_check($request)
    {
    }
    /**
     * Retrieves a collection of search results.
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
     * Prepares a single search result for response.
     *
     * @since 5.0.0
     * @since 5.6.0 The `$id` parameter can accept a string.
     * @since 5.9.0 Renamed `$id` to `$item` to match parent class for PHP 8 named parameter support.
     *
     * @param int|string      $item    ID of the item to prepare.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response Response object.
     */
    public function prepare_item_for_response($item, $request)
    {
    }
    /**
     * Retrieves the item schema, conforming to JSON Schema.
     *
     * @since 5.0.0
     *
     * @return array Item schema data.
     */
    public function get_item_schema()
    {
    }
    /**
     * Retrieves the query params for the search results collection.
     *
     * @since 5.0.0
     *
     * @return array Collection parameters.
     */
    public function get_collection_params()
    {
    }
    /**
     * Sanitizes the list of subtypes, to ensure only subtypes of the passed type are included.
     *
     * @since 5.0.0
     *
     * @param string|array    $subtypes  One or more subtypes.
     * @param WP_REST_Request $request   Full details about the request.
     * @param string          $parameter Parameter name.
     * @return array|WP_Error List of valid subtypes, or WP_Error object on failure.
     */
    public function sanitize_subtypes($subtypes, $request, $parameter)
    {
    }
    /**
     * Gets the search handler to handle the current request.
     *
     * @since 5.0.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Search_Handler|WP_Error Search handler for the request type, or WP_Error object on failure.
     */
    protected function get_search_handler($request)
    {
    }
}