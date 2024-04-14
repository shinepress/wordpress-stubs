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
     * An array that maps old categories names to new ones.
     *
     * @since 6.2.0
     * @var array
     */
    protected static $categories_migration = array('buttons' => 'call-to-action', 'columns' => 'text', 'query' => 'posts');
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
     * @since 6.2.0 Added migration for old core pattern categories to the new ones.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function get_items($request)
    {
    }
    /**
     * Migrates old core pattern categories to the new categories.
     *
     * Core pattern categories are revamped. Migration is needed to ensure
     * backwards compatibility.
     *
     * @since 6.2.0
     *
     * @param array $pattern Raw pattern as registered, before applying any changes.
     * @return array Migrated pattern.
     */
    protected function migrate_pattern_categories($pattern)
    {
    }
    /**
     * Prepare a raw block pattern before it gets output in a REST API response.
     *
     * @since 6.0.0
     * @since 6.3.0 Added `source` property.
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
     * @since 6.3.0 Added `source` property.
     *
     * @return array Item schema data.
     */
    public function get_item_schema()
    {
    }
}