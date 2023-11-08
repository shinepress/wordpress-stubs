<?php


/**
 * REST API: WP_REST_Block_Types_Controller class
 *
 * @package WordPress
 * @subpackage REST_API
 * @since 5.5.0
 */
/**
 * Core class used to access block types via the REST API.
 *
 * @since 5.5.0
 *
 * @see WP_REST_Controller
 */
class WP_REST_Block_Types_Controller extends \WP_REST_Controller
{
    const NAME_PATTERN = '^[a-z][a-z0-9-]*/[a-z][a-z0-9-]*$';
    /**
     * Instance of WP_Block_Type_Registry.
     *
     * @since 5.5.0
     * @var WP_Block_Type_Registry
     */
    protected $block_registry;
    /**
     * Instance of WP_Block_Styles_Registry.
     *
     * @since 5.5.0
     * @var WP_Block_Styles_Registry
     */
    protected $style_registry;
    /**
     * Constructor.
     *
     * @since 5.5.0
     */
    public function __construct()
    {
    }
    /**
     * Registers the routes for block types.
     *
     * @since 5.5.0
     *
     * @see register_rest_route()
     */
    public function register_routes()
    {
    }
    /**
     * Checks whether a given request has permission to read post block types.
     *
     * @since 5.5.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has read access, WP_Error object otherwise.
     */
    public function get_items_permissions_check($request)
    {
    }
    /**
     * Retrieves all post block types, depending on user context.
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
     * Checks if a given request has access to read a block type.
     *
     * @since 5.5.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has read access for the item, WP_Error object otherwise.
     */
    public function get_item_permissions_check($request)
    {
    }
    /**
     * Checks whether a given block type should be visible.
     *
     * @since 5.5.0
     *
     * @return true|WP_Error True if the block type is visible, WP_Error otherwise.
     */
    protected function check_read_permission()
    {
    }
    /**
     * Get the block, if the name is valid.
     *
     * @since 5.5.0
     *
     * @param string $name Block name.
     * @return WP_Block_Type|WP_Error Block type object if name is valid, WP_Error otherwise.
     */
    protected function get_block($name)
    {
    }
    /**
     * Retrieves a specific block type.
     *
     * @since 5.5.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function get_item($request)
    {
    }
    /**
     * Prepares a block type object for serialization.
     *
     * @since 5.5.0
     * @since 5.9.0 Renamed `$block_type` to `$item` to match parent class for PHP 8 named parameter support.
     * @since 6.3.0 Added `selectors` field.
     *
     * @param WP_Block_Type   $item    Block type data.
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response Block type data.
     */
    public function prepare_item_for_response($item, $request)
    {
    }
    /**
     * Prepares links for the request.
     *
     * @since 5.5.0
     *
     * @param WP_Block_Type $block_type Block type data.
     * @return array Links for the given block type.
     */
    protected function prepare_links($block_type)
    {
    }
    /**
     * Retrieves the block type' schema, conforming to JSON Schema.
     *
     * @since 5.5.0
     * @since 6.3.0 Added `selectors` field.
     *
     * @return array Item schema data.
     */
    public function get_item_schema()
    {
    }
    /**
     * Retrieves the query params for collections.
     *
     * @since 5.5.0
     *
     * @return array Collection parameters.
     */
    public function get_collection_params()
    {
    }
}