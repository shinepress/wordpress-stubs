<?php


/**
 * Core class used to manage users via the REST API.
 *
 * @since 4.7.0
 *
 * @see WP_REST_Controller
 */
class WP_REST_Users_Controller extends \WP_REST_Controller
{
    /**
     * Instance of a user meta fields object.
     *
     * @since 4.7.0
     * @var WP_REST_User_Meta_Fields
     */
    protected $meta;
    /**
     * Whether the controller supports batching.
     *
     * @since 6.6.0
     * @var array
     */
    protected $allow_batch = array('v1' => \true);
    /**
     * Constructor.
     *
     * @since 4.7.0
     */
    public function __construct()
    {
    }
    /**
     * Registers the routes for users.
     *
     * @since 4.7.0
     *
     * @see register_rest_route()
     */
    public function register_routes()
    {
    }
    /**
     * Checks for a valid value for the reassign parameter when deleting users.
     *
     * The value can be an integer, 'false', false, or ''.
     *
     * @since 4.7.0
     *
     * @param int|bool        $value   The value passed to the reassign parameter.
     * @param WP_REST_Request $request Full details about the request.
     * @param string          $param   The parameter that is being sanitized.
     * @return int|bool|WP_Error
     */
    public function check_reassign($value, $request, $param)
    {
    }
    /**
     * Permissions check for getting all users.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has read access, otherwise WP_Error object.
     */
    public function get_items_permissions_check($request)
    {
    }
    /**
     * Retrieves all users.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function get_items($request)
    {
    }
    /**
     * Get the user, if the ID is valid.
     *
     * @since 4.7.2
     *
     * @param int $id Supplied ID.
     * @return WP_User|WP_Error True if ID is valid, WP_Error otherwise.
     */
    protected function get_user($id)
    {
    }
    /**
     * Checks if a given request has access to read a user.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has read access for the item, otherwise WP_Error object.
     */
    public function get_item_permissions_check($request)
    {
    }
    /**
     * Retrieves a single user.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function get_item($request)
    {
    }
    /**
     * Retrieves the current user.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function get_current_item($request)
    {
    }
    /**
     * Checks if a given request has access create users.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has access to create items, WP_Error object otherwise.
     */
    public function create_item_permissions_check($request)
    {
    }
    /**
     * Creates a single user.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function create_item($request)
    {
    }
    /**
     * Checks if a given request has access to update a user.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has access to update the item, WP_Error object otherwise.
     */
    public function update_item_permissions_check($request)
    {
    }
    /**
     * Updates a single user.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function update_item($request)
    {
    }
    /**
     * Checks if a given request has access to update the current user.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has access to update the item, WP_Error object otherwise.
     */
    public function update_current_item_permissions_check($request)
    {
    }
    /**
     * Updates the current user.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function update_current_item($request)
    {
    }
    /**
     * Checks if a given request has access delete a user.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has access to delete the item, WP_Error object otherwise.
     */
    public function delete_item_permissions_check($request)
    {
    }
    /**
     * Deletes a single user.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function delete_item($request)
    {
    }
    /**
     * Checks if a given request has access to delete the current user.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has access to delete the item, WP_Error object otherwise.
     */
    public function delete_current_item_permissions_check($request)
    {
    }
    /**
     * Deletes the current user.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function delete_current_item($request)
    {
    }
    /**
     * Prepares a single user output for response.
     *
     * @since 4.7.0
     * @since 5.9.0 Renamed `$user` to `$item` to match parent class for PHP 8 named parameter support.
     *
     * @param WP_User         $item    User object.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response Response object.
     */
    public function prepare_item_for_response($item, $request)
    {
    }
    /**
     * Prepares links for the user request.
     *
     * @since 4.7.0
     *
     * @param WP_User $user User object.
     * @return array Links for the given user.
     */
    protected function prepare_links($user)
    {
    }
    /**
     * Prepares a single user for creation or update.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Request object.
     * @return object User object.
     */
    protected function prepare_item_for_database($request)
    {
    }
    /**
     * Determines if the current user is allowed to make the desired roles change.
     *
     * @since 4.7.0
     *
     * @global WP_Roles $wp_roles WordPress role management object.
     *
     * @param int   $user_id User ID.
     * @param array $roles   New user roles.
     * @return true|WP_Error True if the current user is allowed to make the role change,
     *                       otherwise a WP_Error object.
     */
    protected function check_role_update($user_id, $roles)
    {
    }
    /**
     * Check a username for the REST API.
     *
     * Performs a couple of checks like edit_user() in wp-admin/includes/user.php.
     *
     * @since 4.7.0
     *
     * @param string          $value   The username submitted in the request.
     * @param WP_REST_Request $request Full details about the request.
     * @param string          $param   The parameter name.
     * @return string|WP_Error The sanitized username, if valid, otherwise an error.
     */
    public function check_username($value, $request, $param)
    {
    }
    /**
     * Check a user password for the REST API.
     *
     * Performs a couple of checks like edit_user() in wp-admin/includes/user.php.
     *
     * @since 4.7.0
     *
     * @param string          $value   The password submitted in the request.
     * @param WP_REST_Request $request Full details about the request.
     * @param string          $param   The parameter name.
     * @return string|WP_Error The sanitized password, if valid, otherwise an error.
     */
    public function check_user_password($value, $request, $param)
    {
    }
    /**
     * Retrieves the user's schema, conforming to JSON Schema.
     *
     * @since 4.7.0
     *
     * @return array Item schema data.
     */
    public function get_item_schema()
    {
    }
    /**
     * Retrieves the query params for collections.
     *
     * @since 4.7.0
     *
     * @return array Collection parameters.
     */
    public function get_collection_params()
    {
    }
}