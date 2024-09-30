<?php


/**
 * Controller which provides REST endpoint for block patterns.
 *
 * This simply proxies the endpoint at http://api.wordpress.org/patterns/1.0/. That isn't necessary for
 * functionality, but is desired for privacy. It prevents api.wordpress.org from knowing the user's IP address.
 *
 * @since 5.8.0
 *
 * @see WP_REST_Controller
 */
class WP_REST_Pattern_Directory_Controller extends \WP_REST_Controller
{
    /**
     * Constructs the controller.
     *
     * @since 5.8.0
     */
    public function __construct()
    {
    }
    /**
     * Registers the necessary REST API routes.
     *
     * @since 5.8.0
     */
    public function register_routes()
    {
    }
    /**
     * Checks whether a given request has permission to view the local block pattern directory.
     *
     * @since 5.8.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has permission, WP_Error object otherwise.
     */
    public function get_items_permissions_check($request)
    {
    }
    /**
     * Search and retrieve block patterns metadata
     *
     * @since 5.8.0
     * @since 6.0.0 Added 'slug' to request.
     * @since 6.2.0 Added 'per_page', 'page', 'offset', 'order', and 'orderby' to request.
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
     * @since 5.8.0
     * @since 5.9.0 Renamed `$raw_pattern` to `$item` to match parent class for PHP 8 named parameter support.
     *
     * @param object          $item    Raw pattern from api.wordpress.org, before any changes.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response
     */
    public function prepare_item_for_response($item, $request)
    {
    }
    /**
     * Retrieves the block pattern's schema, conforming to JSON Schema.
     *
     * @since 5.8.0
     * @since 6.2.0 Added `'block_types'` to schema.
     *
     * @return array Item schema data.
     */
    public function get_item_schema()
    {
    }
    /**
     * Retrieves the search parameters for the block pattern's collection.
     *
     * @since 5.8.0
     * @since 6.2.0 Added 'per_page', 'page', 'offset', 'order', and 'orderby' to request.
     *
     * @return array Collection parameters.
     */
    public function get_collection_params()
    {
    }
    /*
     * Include a hash of the query args, so that different requests are stored in
     * separate caches.
     *
     * MD5 is chosen for its speed, low-collision rate, universal availability, and to stay
     * under the character limit for `_site_transient_timeout_{...}` keys.
     *
     * @link https://stackoverflow.com/questions/3665247/fastest-hash-for-non-cryptographic-uses
     *
     * @since 6.0.0
     *
     * @param array $query_args Query arguments to generate a transient key from.
     * @return string Transient key.
     */
    protected function get_transient_key($query_args)
    {
    }
}