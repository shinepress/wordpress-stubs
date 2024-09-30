<?php


/**
 * Core class used to manage themes via the REST API.
 *
 * @since 5.0.0
 *
 * @see WP_REST_Controller
 */
class WP_REST_Themes_Controller extends \WP_REST_Controller
{
    /**
     * Matches theme's directory: `/themes/<subdirectory>/<theme>/` or `/themes/<theme>/`.
     * Excludes invalid directory name characters: `/:<>*?"|`.
     */
    const PATTERN = '[^\/:<>\*\?"\|]+(?:\/[^\/:<>\*\?"\|]+)?';
    /**
     * Constructor.
     *
     * @since 5.0.0
     */
    public function __construct()
    {
    }
    /**
     * Registers the routes for themes.
     *
     * @since 5.0.0
     *
     * @see register_rest_route()
     */
    public function register_routes()
    {
    }
    /**
     * Sanitize the stylesheet to decode endpoint.
     *
     * @since 5.9.0
     *
     * @param string $stylesheet The stylesheet name.
     * @return string Sanitized stylesheet.
     */
    public function _sanitize_stylesheet_callback($stylesheet)
    {
    }
    /**
     * Checks if a given request has access to read the theme.
     *
     * @since 5.0.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has read access for the item, otherwise WP_Error object.
     */
    public function get_items_permissions_check($request)
    {
    }
    /**
     * Checks if a given request has access to read the theme.
     *
     * @since 5.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has read access for the item, otherwise WP_Error object.
     */
    public function get_item_permissions_check($request)
    {
    }
    /**
     * Checks if a theme can be read.
     *
     * @since 5.7.0
     *
     * @return true|WP_Error True if the theme can be read, WP_Error object otherwise.
     */
    protected function check_read_active_theme_permission()
    {
    }
    /**
     * Retrieves a single theme.
     *
     * @since 5.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function get_item($request)
    {
    }
    /**
     * Retrieves a collection of themes.
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
     * Prepares a single theme output for response.
     *
     * @since 5.0.0
     * @since 5.9.0 Renamed `$theme` to `$item` to match parent class for PHP 8 named parameter support.
     * @since 6.6.0 Added `stylesheet_uri` and `template_uri` fields.
     *
     * @param WP_Theme        $item    Theme object.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response Response object.
     */
    public function prepare_item_for_response($item, $request)
    {
    }
    /**
     * Prepares links for the request.
     *
     * @since 5.7.0
     *
     * @param WP_Theme $theme Theme data.
     * @return array Links for the given block type.
     */
    protected function prepare_links($theme)
    {
    }
    /**
     * Helper function to compare two themes.
     *
     * @since 5.7.0
     *
     * @param WP_Theme $theme_a First theme to compare.
     * @param WP_Theme $theme_b Second theme to compare.
     * @return bool
     */
    protected function is_same_theme($theme_a, $theme_b)
    {
    }
    /**
     * Prepares the theme support value for inclusion in the REST API response.
     *
     * @since 5.5.0
     *
     * @param mixed           $support The raw value from get_theme_support().
     * @param array           $args    The feature's registration args.
     * @param string          $feature The feature name.
     * @param WP_REST_Request $request The request object.
     * @return mixed The prepared support value.
     */
    protected function prepare_theme_support($support, $args, $feature, $request)
    {
    }
    /**
     * Retrieves the theme's schema, conforming to JSON Schema.
     *
     * @since 5.0.0
     *
     * @return array Item schema data.
     */
    public function get_item_schema()
    {
    }
    /**
     * Retrieves the search params for the themes collection.
     *
     * @since 5.0.0
     *
     * @return array Collection parameters.
     */
    public function get_collection_params()
    {
    }
    /**
     * Sanitizes and validates the list of theme status.
     *
     * @since 5.0.0
     * @deprecated 5.7.0
     *
     * @param string|array    $statuses  One or more theme statuses.
     * @param WP_REST_Request $request   Full details about the request.
     * @param string          $parameter Additional parameter to pass to validation.
     * @return array|WP_Error A list of valid statuses, otherwise WP_Error object.
     */
    public function sanitize_theme_status($statuses, $request, $parameter)
    {
    }
}