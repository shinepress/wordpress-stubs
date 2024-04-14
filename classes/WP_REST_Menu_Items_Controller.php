<?php


/**
 * REST API: WP_REST_Menu_Items_Controller class
 *
 * @package WordPress
 * @subpackage REST_API
 * @since 5.9.0
 */
/**
 * Core class to access nav items via the REST API.
 *
 * @since 5.9.0
 *
 * @see WP_REST_Posts_Controller
 */
class WP_REST_Menu_Items_Controller extends \WP_REST_Posts_Controller
{
    /**
     * Get the nav menu item, if the ID is valid.
     *
     * @since 5.9.0
     *
     * @param int $id Supplied ID.
     * @return object|WP_Error Post object if ID is valid, WP_Error otherwise.
     */
    protected function get_nav_menu_item($id)
    {
    }
    /**
     * Checks if a given request has access to read menu items.
     *
     * @since 5.9.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has read access, WP_Error object otherwise.
     */
    public function get_items_permissions_check($request)
    {
    }
    /**
     * Checks if a given request has access to read a menu item if they have access to edit them.
     *
     * @since 5.9.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return bool|WP_Error True if the request has read access for the item, WP_Error object otherwise.
     */
    public function get_item_permissions_check($request)
    {
    }
    /**
     * Checks whether the current user has read permission for the endpoint.
     *
     * This allows for any user that can `edit_theme_options` or edit any REST API available post type.
     *
     * @since 5.9.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return bool|WP_Error Whether the current user has permission.
     */
    protected function check_has_read_only_access($request)
    {
    }
    /**
     * Creates a single post.
     *
     * @since 5.9.0
     *
     * @param WP_REST_Request $request Full details about the request.
     *
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function create_item($request)
    {
    }
    /**
     * Updates a single nav menu item.
     *
     * @since 5.9.0
     *
     * @param WP_REST_Request $request Full details about the request.
     *
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function update_item($request)
    {
    }
    /**
     * Deletes a single menu item.
     *
     * @since 5.9.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error True on success, or WP_Error object on failure.
     */
    public function delete_item($request)
    {
    }
    /**
     * Prepares a single post for create or update.
     *
     * @since 5.9.0
     *
     * @param WP_REST_Request $request Request object.
     *
     * @return object|WP_Error
     */
    protected function prepare_item_for_database($request)
    {
    }
    /**
     * Prepares a single post output for response.
     *
     * @since 5.9.0
     *
     * @param WP_Post          $item   Post object.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response Response object.
     */
    public function prepare_item_for_response($item, $request)
    {
    }
    /**
     * Prepares links for the request.
     *
     * @since 5.9.0
     *
     * @param WP_Post $post Post object.
     * @return array Links for the given post.
     */
    protected function prepare_links($post)
    {
    }
    /**
     * Retrieve Link Description Objects that should be added to the Schema for the posts collection.
     *
     * @since 5.9.0
     *
     * @return array
     */
    protected function get_schema_links()
    {
    }
    /**
     * Retrieves the term's schema, conforming to JSON Schema.
     *
     * @since 5.9.0
     *
     * @return array Item schema data.
     */
    public function get_item_schema()
    {
    }
    /**
     * Retrieves the query params for the posts collection.
     *
     * @since 5.9.0
     *
     * @return array Collection parameters.
     */
    public function get_collection_params()
    {
    }
    /**
     * Determines the allowed query_vars for a get_items() response and prepares
     * them for WP_Query.
     *
     * @since 5.9.0
     *
     * @param array           $prepared_args Optional. Prepared WP_Query arguments. Default empty array.
     * @param WP_REST_Request $request       Optional. Full details about the request.
     * @return array Items query arguments.
     */
    protected function prepare_items_query($prepared_args = array(), $request = \null)
    {
    }
    /**
     * Gets the id of the menu that the given menu item belongs to.
     *
     * @since 5.9.0
     *
     * @param int $menu_item_id Menu item id.
     * @return int
     */
    protected function get_menu_id($menu_item_id)
    {
    }
}