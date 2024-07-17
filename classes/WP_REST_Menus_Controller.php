<?php


/**
 * REST API: WP_REST_Menus_Controller class
 *
 * @package WordPress
 * @subpackage REST_API
 * @since 5.9.0
 */
/**
 * Core class used to managed menu terms associated via the REST API.
 *
 * @since 5.9.0
 *
 * @see WP_REST_Controller
 */
class WP_REST_Menus_Controller extends \WP_REST_Terms_Controller
{
    /**
     * Checks if a request has access to read menus.
     *
     * @since 5.9.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return bool|WP_Error True if the request has read access, otherwise false or WP_Error object.
     */
    public function get_items_permissions_check($request)
    {
    }
    /**
     * Checks if a request has access to read or edit the specified menu.
     *
     * @since 5.9.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return bool|WP_Error True if the request has read access for the item, otherwise false or WP_Error object.
     */
    public function get_item_permissions_check($request)
    {
    }
    /**
     * Gets the term, if the ID is valid.
     *
     * @since 5.9.0
     *
     * @param int $id Supplied ID.
     * @return WP_Term|WP_Error Term object if ID is valid, WP_Error otherwise.
     */
    protected function get_term($id)
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
     * Prepares a single term output for response.
     *
     * @since 5.9.0
     *
     * @param WP_Term         $term    Term object.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response Response object.
     */
    public function prepare_item_for_response($term, $request)
    {
    }
    /**
     * Prepares links for the request.
     *
     * @since 5.9.0
     *
     * @param WP_Term $term Term object.
     * @return array Links for the given term.
     */
    protected function prepare_links($term)
    {
    }
    /**
     * Prepares a single term for create or update.
     *
     * @since 5.9.0
     *
     * @param WP_REST_Request $request Request object.
     * @return object Prepared term data.
     */
    public function prepare_item_for_database($request)
    {
    }
    /**
     * Creates a single term in a taxonomy.
     *
     * @since 5.9.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function create_item($request)
    {
    }
    /**
     * Updates a single term from a taxonomy.
     *
     * @since 5.9.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function update_item($request)
    {
    }
    /**
     * Deletes a single term from a taxonomy.
     *
     * @since 5.9.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function delete_item($request)
    {
    }
    /**
     * Returns the value of a menu's auto_add setting.
     *
     * @since 5.9.0
     *
     * @param int $menu_id The menu id to query.
     * @return bool The value of auto_add.
     */
    protected function get_menu_auto_add($menu_id)
    {
    }
    /**
     * Updates the menu's auto add from a REST request.
     *
     * @since 5.9.0
     *
     * @param int             $menu_id The menu id to update.
     * @param WP_REST_Request $request Full details about the request.
     * @return bool True if the auto add setting was successfully updated.
     */
    protected function handle_auto_add($menu_id, $request)
    {
    }
    /**
     * Returns the names of the locations assigned to the menu.
     *
     * @since 5.9.0
     *
     * @param int $menu_id The menu id.
     * @return string[] The locations assigned to the menu.
     */
    protected function get_menu_locations($menu_id)
    {
    }
    /**
     * Updates the menu's locations from a REST request.
     *
     * @since 5.9.0
     *
     * @param int             $menu_id The menu id to update.
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True on success, a WP_Error on an error updating any of the locations.
     */
    protected function handle_locations($menu_id, $request)
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
}