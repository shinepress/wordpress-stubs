<?php


/**
 * REST API: WP_REST_Widget_Types_Controller class
 *
 * @package WordPress
 * @subpackage REST_API
 * @since 5.8.0
 */
/**
 * Core class to access widget types via the REST API.
 *
 * @since 5.8.0
 *
 * @see WP_REST_Controller
 */
class WP_REST_Widget_Types_Controller extends \WP_REST_Controller
{
    /**
     * Constructor.
     *
     * @since 5.8.0
     */
    public function __construct()
    {
    }
    /**
     * Registers the widget type routes.
     *
     * @since 5.8.0
     *
     * @see register_rest_route()
     */
    public function register_routes()
    {
    }
    /**
     * Checks whether a given request has permission to read widget types.
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
     * Retrieves the list of all widget types.
     *
     * @since 5.8.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function get_items($request)
    {
    }
    /**
     * Checks if a given request has access to read a widget type.
     *
     * @since 5.8.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has read access for the item, WP_Error object otherwise.
     */
    public function get_item_permissions_check($request)
    {
    }
    /**
     * Checks whether the user can read widget types.
     *
     * @since 5.8.0
     *
     * @return true|WP_Error True if the widget type is visible, WP_Error otherwise.
     */
    protected function check_read_permission()
    {
    }
    /**
     * Gets the details about the requested widget.
     *
     * @since 5.8.0
     *
     * @param string $id The widget type id.
     * @return array|WP_Error The array of widget data if the name is valid, WP_Error otherwise.
     */
    public function get_widget($id)
    {
    }
    /**
     * Normalize array of widgets.
     *
     * @since 5.8.0
     *
     * @global WP_Widget_Factory $wp_widget_factory
     * @global array             $wp_registered_widgets The list of registered widgets.
     *
     * @return array Array of widgets.
     */
    protected function get_widgets()
    {
    }
    /**
     * Retrieves a single widget type from the collection.
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
     * Prepares a widget type object for serialization.
     *
     * @since 5.8.0
     *
     * @param array           $widget_type Widget type data.
     * @param WP_REST_Request $request    Full details about the request.
     * @return WP_REST_Response Widget type data.
     */
    public function prepare_item_for_response($widget_type, $request)
    {
    }
    /**
     * Prepares links for the widget type.
     *
     * @since 5.8.0
     *
     * @param array $widget_type Widget type data.
     * @return array Links for the given widget type.
     */
    protected function prepare_links($widget_type)
    {
    }
    /**
     * Retrieves the widget type's schema, conforming to JSON Schema.
     *
     * @since 5.8.0
     *
     * @return array Item schema data.
     */
    public function get_item_schema()
    {
    }
    /**
     * An RPC-style endpoint which can be used by clients to turn user input in
     * a widget admin form into an encoded instance object.
     *
     * Accepts:
     *
     * - id:        A widget type ID.
     * - instance:  A widget's encoded instance object. Optional.
     * - form_data: Form data from submitting a widget's admin form. Optional.
     *
     * Returns:
     * - instance: The encoded instance object after updating the widget with
     *             the given form data.
     * - form:     The widget's admin form after updating the widget with the
     *             given form data.
     *
     * @since 5.8.0
     *
     * @global WP_Widget_Factory $wp_widget_factory
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function encode_form_data($request)
    {
    }
    /**
     * Returns the output of WP_Widget::widget() when called with the provided
     * instance. Used by encode_form_data() to preview a widget.
     * @since 5.8.0
     *
     * @param string    $widget   The widget's PHP class name (see class-wp-widget.php).
     * @param array     $instance Widget instance settings.
     * @return string
     */
    private function get_widget_preview($widget, $instance)
    {
    }
    /**
     * Returns the output of WP_Widget::form() when called with the provided
     * instance. Used by encode_form_data() to preview a widget's form.
     *
     * @since 5.8.0
     *
     * @param WP_Widget $widget_object Widget object to call widget() on.
     * @param array     $instance Widget instance settings.
     * @return string
     */
    private function get_widget_form($widget_object, $instance)
    {
    }
    /**
     * Retrieves the query params for collections.
     *
     * @since 5.8.0
     *
     * @return array Collection parameters.
     */
    public function get_collection_params()
    {
    }
}