<?php


/**
 * Core class used to manage a site's sidebars.
 *
 * @since 5.8.0
 *
 * @see WP_REST_Controller
 */
class WP_REST_Sidebars_Controller extends \WP_REST_Controller
{
    /**
     * Tracks whether {@see retrieve_widgets()} has been called in the current request.
     *
     * @since 5.9.0
     * @var bool
     */
    protected $widgets_retrieved = \false;
    /**
     * Sidebars controller constructor.
     *
     * @since 5.8.0
     */
    public function __construct()
    {
    }
    /**
     * Registers the controllers routes.
     *
     * @since 5.8.0
     */
    public function register_routes()
    {
    }
    /**
     * Checks if a given request has access to get sidebars.
     *
     * @since 5.8.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has read access, WP_Error object otherwise.
     */
    public function get_items_permissions_check($request)
    {
    }
    /**
     * Retrieves the list of sidebars (active or inactive).
     *
     * @since 5.8.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response Response object on success.
     */
    public function get_items($request)
    {
    }
    /**
     * Checks if a given request has access to get a single sidebar.
     *
     * @since 5.8.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has read access, WP_Error object otherwise.
     */
    public function get_item_permissions_check($request)
    {
    }
    /**
     * Checks if a sidebar can be read publicly.
     *
     * @since 5.9.0
     *
     * @param array $sidebar The registered sidebar configuration.
     * @return bool Whether the side can be read.
     */
    protected function check_read_permission($sidebar)
    {
    }
    /**
     * Retrieves one sidebar from the collection.
     *
     * @since 5.8.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function get_item($request)
    {
    }
    /**
     * Checks if a given request has access to update sidebars.
     *
     * @since 5.8.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has read access, WP_Error object otherwise.
     */
    public function update_item_permissions_check($request)
    {
    }
    /**
     * Updates a sidebar.
     *
     * @since 5.8.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response Response object on success, or WP_Error object on failure.
     */
    public function update_item($request)
    {
    }
    /**
     * Checks if the user has permissions to make the request.
     *
     * @since 5.8.0
     *
     * @return true|WP_Error True if the request has read access, WP_Error object otherwise.
     */
    protected function do_permissions_check()
    {
    }
    /**
     * Retrieves the registered sidebar with the given id.
     *
     * @since 5.8.0
     *
     * @param string|int $id ID of the sidebar.
     * @return array|null The discovered sidebar, or null if it is not registered.
     */
    protected function get_sidebar($id)
    {
    }
    /**
     * Looks for "lost" widgets once per request.
     *
     * @since 5.9.0
     *
     * @see retrieve_widgets()
     */
    protected function retrieve_widgets()
    {
    }
    /**
     * Prepares a single sidebar output for response.
     *
     * @since 5.8.0
     * @since 5.9.0 Renamed `$raw_sidebar` to `$item` to match parent class for PHP 8 named parameter support.
     *
     * @global array $wp_registered_sidebars The registered sidebars.
     * @global array $wp_registered_widgets  The registered widgets.
     *
     * @param array           $item    Sidebar instance.
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response Prepared response object.
     */
    public function prepare_item_for_response($item, $request)
    {
    }
    /**
     * Prepares links for the sidebar.
     *
     * @since 5.8.0
     *
     * @param array $sidebar Sidebar.
     * @return array Links for the given widget.
     */
    protected function prepare_links($sidebar)
    {
    }
    /**
     * Retrieves the block type' schema, conforming to JSON Schema.
     *
     * @since 5.8.0
     *
     * @return array Item schema data.
     */
    public function get_item_schema()
    {
    }
}