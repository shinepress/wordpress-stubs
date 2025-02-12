<?php


/**
 * Core class to access widgets via the REST API.
 *
 * @since 5.8.0
 *
 * @see WP_REST_Controller
 */
class WP_REST_Widgets_Controller extends \WP_REST_Controller
{
    /**
     * Tracks whether {@see retrieve_widgets()} has been called in the current request.
     *
     * @since 5.9.0
     * @var bool
     */
    protected $widgets_retrieved = \false;
    /**
     * Whether the controller supports batching.
     *
     * @since 5.9.0
     * @var array
     */
    protected $allow_batch = array('v1' => \true);
    /**
     * Widgets controller constructor.
     *
     * @since 5.8.0
     */
    public function __construct()
    {
    }
    /**
     * Registers the widget routes for the controller.
     *
     * @since 5.8.0
     */
    public function register_routes()
    {
    }
    /**
     * Checks if a given request has access to get widgets.
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
     * Retrieves a collection of widgets.
     *
     * @since 5.8.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response Response object.
     */
    public function get_items($request)
    {
    }
    /**
     * Checks if a given request has access to get a widget.
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
     * @param string $sidebar_id The sidebar ID.
     * @return bool Whether the sidebar can be read.
     */
    protected function check_read_sidebar_permission($sidebar_id)
    {
    }
    /**
     * Gets an individual widget.
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
     * Checks if a given request has access to create widgets.
     *
     * @since 5.8.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has read access, WP_Error object otherwise.
     */
    public function create_item_permissions_check($request)
    {
    }
    /**
     * Creates a widget.
     *
     * @since 5.8.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function create_item($request)
    {
    }
    /**
     * Checks if a given request has access to update widgets.
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
     * Updates an existing widget.
     *
     * @since 5.8.0
     *
     * @global WP_Widget_Factory $wp_widget_factory
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function update_item($request)
    {
    }
    /**
     * Checks if a given request has access to delete widgets.
     *
     * @since 5.8.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has read access, WP_Error object otherwise.
     */
    public function delete_item_permissions_check($request)
    {
    }
    /**
     * Deletes a widget.
     *
     * @since 5.8.0
     *
     * @global WP_Widget_Factory $wp_widget_factory
     * @global array             $wp_registered_widget_updates The registered widget update functions.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function delete_item($request)
    {
    }
    /**
     * Performs a permissions check for managing widgets.
     *
     * @since 5.8.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error
     */
    protected function permissions_check($request)
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
     * Saves the widget in the request object.
     *
     * @since 5.8.0
     *
     * @global WP_Widget_Factory $wp_widget_factory
     * @global array             $wp_registered_widget_updates The registered widget update functions.
     *
     * @param WP_REST_Request $request    Full details about the request.
     * @param string          $sidebar_id ID of the sidebar the widget belongs to.
     * @return string|WP_Error The saved widget ID.
     */
    protected function save_widget($request, $sidebar_id)
    {
    }
    /**
     * Prepares the widget for the REST response.
     *
     * @since 5.8.0
     *
     * @global WP_Widget_Factory $wp_widget_factory
     * @global array             $wp_registered_widgets The registered widgets.
     *
     * @param array           $item    An array containing a widget_id and sidebar_id.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function prepare_item_for_response($item, $request)
    {
    }
    /**
     * Prepares links for the widget.
     *
     * @since 5.8.0
     *
     * @param array $prepared Widget.
     * @return array Links for the given widget.
     */
    protected function prepare_links($prepared)
    {
    }
    /**
     * Gets the list of collection params.
     *
     * @since 5.8.0
     *
     * @return array[]
     */
    public function get_collection_params()
    {
    }
    /**
     * Retrieves the widget's schema, conforming to JSON Schema.
     *
     * @since 5.8.0
     *
     * @return array Item schema data.
     */
    public function get_item_schema()
    {
    }
}