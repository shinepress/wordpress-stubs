<?php


/**
 * REST API: WP_REST_Application_Passwords_Controller class
 *
 * @package    WordPress
 * @subpackage REST_API
 * @since      5.6.0
 */
/**
 * Core class to access a user's application passwords via the REST API.
 *
 * @since 5.6.0
 *
 * @see   WP_REST_Controller
 */
class WP_REST_Application_Passwords_Controller extends \WP_REST_Controller
{
    /**
     * Application Passwords controller constructor.
     *
     * @since 5.6.0
     */
    public function __construct()
    {
    }
    /**
     * Registers the REST API routes for the application passwords controller.
     *
     * @since 5.6.0
     */
    public function register_routes()
    {
    }
    /**
     * Checks if a given request has access to get application passwords.
     *
     * @since 5.6.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has read access, WP_Error object otherwise.
     */
    public function get_items_permissions_check($request)
    {
    }
    /**
     * Retrieves a collection of application passwords.
     *
     * @since 5.6.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function get_items($request)
    {
    }
    /**
     * Checks if a given request has access to get a specific application password.
     *
     * @since 5.6.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has read access for the item, WP_Error object otherwise.
     */
    public function get_item_permissions_check($request)
    {
    }
    /**
     * Retrieves one application password from the collection.
     *
     * @since 5.6.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function get_item($request)
    {
    }
    /**
     * Checks if a given request has access to create application passwords.
     *
     * @since 5.6.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has access to create items, WP_Error object otherwise.
     */
    public function create_item_permissions_check($request)
    {
    }
    /**
     * Creates an application password.
     *
     * @since 5.6.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function create_item($request)
    {
    }
    /**
     * Checks if a given request has access to update application passwords.
     *
     * @since 5.6.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has access to create items, WP_Error object otherwise.
     */
    public function update_item_permissions_check($request)
    {
    }
    /**
     * Updates an application password.
     *
     * @since 5.6.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function update_item($request)
    {
    }
    /**
     * Checks if a given request has access to delete all application passwords.
     *
     * @since 5.6.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has access to delete the item, WP_Error object otherwise.
     */
    public function delete_items_permissions_check($request)
    {
    }
    /**
     * Deletes all application passwords.
     *
     * @since 5.6.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function delete_items($request)
    {
    }
    /**
     * Checks if a given request has access to delete a specific application password.
     *
     * @since 5.6.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has access to delete the item, WP_Error object otherwise.
     */
    public function delete_item_permissions_check($request)
    {
    }
    /**
     * Deletes one application password.
     *
     * @since 5.6.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function delete_item($request)
    {
    }
    /**
     * Performs a permissions check for the request.
     *
     * @since 5.6.0
     *
     * @param WP_REST_Request $request
     * @return true|WP_Error
     */
    protected function do_permissions_check($request)
    {
    }
    /**
     * Prepares an application password for a create or update operation.
     *
     * @since 5.6.0
     *
     * @param WP_REST_Request $request Request object.
     * @return object|WP_Error The prepared item, or WP_Error object on failure.
     */
    protected function prepare_item_for_database($request)
    {
    }
    /**
     * Prepares the application password for the REST response.
     *
     * @since 5.6.0
     *
     * @param array           $item    WordPress representation of the item.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function prepare_item_for_response($item, $request)
    {
    }
    /**
     * Prepares links for the object.
     *
     * @since 5.6.0
     *
     * @param WP_User $user The requested user.
     * @param array   $item The application password.
     * @return array The list of links.
     */
    protected function prepare_links(\WP_User $user, $item)
    {
    }
    /**
     * Gets the requested user.
     *
     * @since 5.6.0
     *
     * @param WP_REST_Request $request The request object.
     * @return WP_User|WP_Error The WordPress user associated with the request, or a WP_Error if none found.
     */
    protected function get_user($request)
    {
    }
    /**
     * Gets the requested application password.
     *
     * @since 5.6.0
     *
     * @param WP_REST_Request $request The request object.
     * @return array|WP_Error The application password details if found, a WP_Error otherwise.
     */
    protected function get_application_password($request)
    {
    }
    /**
     * Retrieves the query params for the collections.
     *
     * @since 5.6.0
     *
     * @return array Query parameters for the collection.
     */
    public function get_collection_params()
    {
    }
    /**
     * Retrieves the application password's schema, conforming to JSON Schema.
     *
     * @since 5.6.0
     *
     * @return array Item schema data.
     */
    public function get_item_schema()
    {
    }
}