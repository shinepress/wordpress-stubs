<?php


/**
 * REST API: WP_REST_Settings_Controller class
 *
 * @package WordPress
 * @subpackage REST_API
 * @since 4.7.0
 */
/**
 * Core class used to manage a site's settings via the REST API.
 *
 * @since 4.7.0
 *
 * @see WP_REST_Controller
 */
class WP_REST_Settings_Controller extends \WP_REST_Controller
{
    /**
     * Constructor.
     *
     * @since 4.7.0
     * @access public
     */
    public function __construct()
    {
    }
    /**
     * Registers the routes for the objects of the controller.
     *
     * @since 4.7.0
     * @access public
     *
     * @see register_rest_route()
     */
    public function register_routes()
    {
    }
    /**
     * Checks if a given request has access to read and manage settings.
     *
     * @since 4.7.0
     * @access public
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return bool True if the request has read access for the item, otherwise false.
     */
    public function get_item_permissions_check($request)
    {
    }
    /**
     * Retrieves the settings.
     *
     * @since 4.7.0
     * @access public
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return array|WP_Error Array on success, or WP_Error object on failure.
     */
    public function get_item($request)
    {
    }
    /**
     * Prepares a value for output based off a schema array.
     *
     * @since 4.7.0
     * @access protected
     *
     * @param mixed $value  Value to prepare.
     * @param array $schema Schema to match.
     * @return mixed The prepared value.
     */
    protected function prepare_value($value, $schema)
    {
    }
    /**
     * Updates settings for the settings object.
     *
     * @since 4.7.0
     * @access public
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return array|WP_Error Array on success, or error object on failure.
     */
    public function update_item($request)
    {
    }
    /**
     * Retrieves all of the registered options for the Settings API.
     *
     * @since 4.7.0
     * @access protected
     *
     * @return array Array of registered options.
     */
    protected function get_registered_options()
    {
    }
    /**
     * Retrieves the site setting schema, conforming to JSON Schema.
     *
     * @since 4.7.0
     * @access public
     *
     * @return array Item schema data.
     */
    public function get_item_schema()
    {
    }
    /**
     * Custom sanitize callback used for all options to allow the use of 'null'.
     *
     * By default, the schema of settings will throw an error if a value is set to
     * `null` as it's not a valid value for something like "type => string". We
     * provide a wrapper sanitizer to whitelist the use of `null`.
     *
     * @param  mixed           $value   The value for the setting.
     * @param  WP_REST_Request $request The request object.
     * @param  string          $param   The parameter name.
     * @return mixed|WP_Error
     */
    public function sanitize_callback($value, $request, $param)
    {
    }
}