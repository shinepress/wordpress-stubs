<?php


/**
 * REST API: WP_REST_URL_Details_Controller class
 *
 * @package WordPress
 * @subpackage REST_API
 * @since 5.9.0
 */
/**
 * Controller which provides REST endpoint for retrieving information
 * from a remote site's HTML response.
 *
 * @since 5.9.0
 *
 * @see WP_REST_Controller
 */
class WP_REST_URL_Details_Controller extends \WP_REST_Controller
{
    /**
     * Constructs the controller.
     *
     * @since 5.9.0
     */
    public function __construct()
    {
    }
    /**
     * Registers the necessary REST API routes.
     *
     * @since 5.9.0
     */
    public function register_routes()
    {
    }
    /**
     * Retrieves the item's schema, conforming to JSON Schema.
     *
     * @since 5.9.0
     *
     * @return array Item schema data.
     */
    public function get_item_schema()
    {
    }
    /**
     * Retrieves the contents of the title tag from the HTML response.
     *
     * @since 5.9.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error The parsed details as a response object. WP_Error if there are errors.
     */
    public function parse_url_details($request)
    {
    }
    /**
     * Checks whether a given request has permission to read remote URLs.
     *
     * @since 5.9.0
     *
     * @return WP_Error|bool True if the request has permission, else WP_Error.
     */
    public function permissions_check()
    {
    }
}