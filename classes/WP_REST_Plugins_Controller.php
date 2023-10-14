<?php


/**
 * REST API: WP_REST_Plugins_Controller class
 *
 * @package WordPress
 * @subpackage REST_API
 * @since 5.5.0
 */
/**
 * Core class to access plugins via the REST API.
 *
 * @since 5.5.0
 *
 * @see WP_REST_Controller
 */
class WP_REST_Plugins_Controller extends \WP_REST_Controller
{
    const PATTERN = '[^.\/]+(?:\/[^.\/]+)?';
    /**
     * Plugins controller constructor.
     *
     * @since 5.5.0
     */
    public function __construct()
    {
    }
    /**
     * Registers the routes for the plugins controller.
     *
     * @since 5.5.0
     */
    public function register_routes()
    {
    }
    /**
     * Checks if a given request has access to get plugins.
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
     * Retrieves a collection of plugins.
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
     * Checks if a given request has access to get a specific plugin.
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
     * Retrieves one plugin from the site.
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
     * Checks if the given plugin can be viewed by the current user.
     *
     * On multisite, this hides non-active network only plugins if the user does not have permission
     * to manage network plugins.
     *
     * @since 5.5.0
     *
     * @param string $plugin The plugin file to check.
     * @return true|WP_Error True if can read, a WP_Error instance otherwise.
     */
    protected function check_read_permission($plugin)
    {
    }
    /**
     * Checks if a given request has access to upload plugins.
     *
     * @since 5.5.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has access to create items, WP_Error object otherwise.
     */
    public function create_item_permissions_check($request)
    {
    }
    /**
     * Uploads a plugin and optionally activates it.
     *
     * @since 5.5.0
     *
     * @global WP_Filesystem_Base $wp_filesystem WordPress filesystem subclass.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function create_item($request)
    {
    }
    /**
     * Checks if a given request has access to update a specific plugin.
     *
     * @since 5.5.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has access to update the item, WP_Error object otherwise.
     */
    public function update_item_permissions_check($request)
    {
    }
    /**
     * Updates one plugin.
     *
     * @since 5.5.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function update_item($request)
    {
    }
    /**
     * Checks if a given request has access to delete a specific plugin.
     *
     * @since 5.5.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has access to delete the item, WP_Error object otherwise.
     */
    public function delete_item_permissions_check($request)
    {
    }
    /**
     * Deletes one plugin from the site.
     *
     * @since 5.5.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function delete_item($request)
    {
    }
    /**
     * Prepares the plugin for the REST response.
     *
     * @since 5.5.0
     *
     * @param array           $item    Unmarked up and untranslated plugin data from {@see get_plugin_data()}.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function prepare_item_for_response($item, $request)
    {
    }
    /**
     * Prepares links for the request.
     *
     * @since 5.5.0
     *
     * @param array $item The plugin item.
     * @return array[]
     */
    protected function prepare_links($item)
    {
    }
    /**
     * Gets the plugin header data for a plugin.
     *
     * @since 5.5.0
     *
     * @param string $plugin The plugin file to get data for.
     * @return array|WP_Error The plugin data, or a WP_Error if the plugin is not installed.
     */
    protected function get_plugin_data($plugin)
    {
    }
    /**
     * Get's the activation status for a plugin.
     *
     * @since 5.5.0
     *
     * @param string $plugin The plugin file to check.
     * @return string Either 'network-active', 'active' or 'inactive'.
     */
    protected function get_plugin_status($plugin)
    {
    }
    /**
     * Handle updating a plugin's status.
     *
     * @since 5.5.0
     *
     * @param string $plugin         The plugin file to update.
     * @param string $new_status     The plugin's new status.
     * @param string $current_status The plugin's current status.
     * @return true|WP_Error
     */
    protected function plugin_status_permission_check($plugin, $new_status, $current_status)
    {
    }
    /**
     * Handle updating a plugin's status.
     *
     * @since 5.5.0
     *
     * @param string $plugin         The plugin file to update.
     * @param string $new_status     The plugin's new status.
     * @param string $current_status The plugin's current status.
     * @return true|WP_Error
     */
    protected function handle_plugin_status($plugin, $new_status, $current_status)
    {
    }
    /**
     * Checks that the "plugin" parameter is a valid path.
     *
     * @since 5.5.0
     *
     * @param string $file The plugin file parameter.
     * @return bool
     */
    public function validate_plugin_param($file)
    {
    }
    /**
     * Sanitizes the "plugin" parameter to be a proper plugin file with ".php" appended.
     *
     * @since 5.5.0
     *
     * @param string $file The plugin file parameter.
     * @return string
     */
    public function sanitize_plugin_param($file)
    {
    }
    /**
     * Checks if the plugin matches the requested parameters.
     *
     * @since 5.5.0
     *
     * @param WP_REST_Request $request The request to require the plugin matches against.
     * @param array           $item    The plugin item.
     * @return bool
     */
    protected function does_plugin_match_request($request, $item)
    {
    }
    /**
     * Checks if the plugin is installed.
     *
     * @since 5.5.0
     *
     * @param string $plugin The plugin file.
     * @return bool
     */
    protected function is_plugin_installed($plugin)
    {
    }
    /**
     * Determine if the endpoints are available.
     *
     * Only the 'Direct' filesystem transport, and SSH/FTP when credentials are stored are supported at present.
     *
     * @since 5.5.0
     *
     * @return true|WP_Error True if filesystem is available, WP_Error otherwise.
     */
    protected function is_filesystem_available()
    {
    }
    /**
     * Retrieves the plugin's schema, conforming to JSON Schema.
     *
     * @since 5.5.0
     *
     * @return array Item schema data.
     */
    public function get_item_schema()
    {
    }
    /**
     * Retrieves the query params for the collections.
     *
     * @since 5.5.0
     *
     * @return array Query parameters for the collection.
     */
    public function get_collection_params()
    {
    }
}