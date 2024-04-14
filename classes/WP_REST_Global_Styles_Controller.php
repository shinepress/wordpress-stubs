<?php


/**
 * REST API: WP_REST_Global_Styles_Controller class
 *
 * @package    WordPress
 * @subpackage REST_API
 * @since 5.9.0
 */
/**
 * Base Global Styles REST API Controller.
 */
class WP_REST_Global_Styles_Controller extends \WP_REST_Controller
{
    /**
     * Post type.
     *
     * @since 5.9.0
     * @var string
     */
    protected $post_type;
    /**
     * Constructor.
     * @since 5.9.0
     */
    public function __construct()
    {
    }
    /**
     * Registers the controllers routes.
     *
     * @since 5.9.0
     *
     * @return void
     */
    public function register_routes()
    {
    }
    /**
     * Sanitize the global styles ID or stylesheet to decode endpoint.
     * For example, `wp/v2/global-styles/twentytwentytwo%200.4.0`
     * would be decoded to `twentytwentytwo 0.4.0`.
     *
     * @since 5.9.0
     *
     * @param string $id_or_stylesheet Global styles ID or stylesheet.
     * @return string Sanitized global styles ID or stylesheet.
     */
    public function _sanitize_global_styles_callback($id_or_stylesheet)
    {
    }
    /**
     * Get the post, if the ID is valid.
     *
     * @since 5.9.0
     *
     * @param int $id Supplied ID.
     * @return WP_Post|WP_Error Post object if ID is valid, WP_Error otherwise.
     */
    protected function get_post($id)
    {
    }
    /**
     * Checks if a given request has access to read a single global style.
     *
     * @since 5.9.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has read access, WP_Error object otherwise.
     */
    public function get_item_permissions_check($request)
    {
    }
    /**
     * Checks if a global style can be read.
     *
     * @since 5.9.0
     *
     * @param WP_Post $post Post object.
     * @return bool Whether the post can be read.
     */
    protected function check_read_permission($post)
    {
    }
    /**
     * Returns the given global styles config.
     *
     * @since 5.9.0
     *
     * @param WP_REST_Request $request The request instance.
     *
     * @return WP_REST_Response|WP_Error
     */
    public function get_item($request)
    {
    }
    /**
     * Checks if a given request has access to write a single global styles config.
     *
     * @since 5.9.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has write access for the item, WP_Error object otherwise.
     */
    public function update_item_permissions_check($request)
    {
    }
    /**
     * Checks if a global style can be edited.
     *
     * @since 5.9.0
     *
     * @param WP_Post $post Post object.
     * @return bool Whether the post can be edited.
     */
    protected function check_update_permission($post)
    {
    }
    /**
     * Updates a single global style config.
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
     * Prepares a single global styles config for update.
     *
     * @since 5.9.0
     * @since 6.2.0 Added validation of styles.css property.
     *
     * @param WP_REST_Request $request Request object.
     * @return stdClass|WP_Error Prepared item on success. WP_Error on when the custom CSS is not valid.
     */
    protected function prepare_item_for_database($request)
    {
    }
    /**
     * Prepare a global styles config output for response.
     *
     * @since 5.9.0
     *
     * @param WP_Post         $post    Global Styles post object.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response Response object.
     */
    public function prepare_item_for_response($post, $request)
    {
    }
    /**
     * Prepares links for the request.
     *
     * @since 5.9.0
     *
     * @param integer $id ID.
     * @return array Links for the given post.
     */
    protected function prepare_links($id)
    {
    }
    /**
     * Get the link relations available for the post and current user.
     *
     * @since 5.9.0
     * @since 6.2.0 Added 'edit-css' action.
     *
     * @return array List of link relations.
     */
    protected function get_available_actions()
    {
    }
    /**
     * Overwrites the default protected title format.
     *
     * By default, WordPress will show password protected posts with a title of
     * "Protected: %s", as the REST API communicates the protected status of a post
     * in a machine readable format, we remove the "Protected: " prefix.
     *
     * @since 5.9.0
     *
     * @return string Protected title format.
     */
    public function protected_title_format()
    {
    }
    /**
     * Retrieves the query params for the global styles collection.
     *
     * @since 5.9.0
     *
     * @return array Collection parameters.
     */
    public function get_collection_params()
    {
    }
    /**
     * Retrieves the global styles type' schema, conforming to JSON Schema.
     *
     * @since 5.9.0
     *
     * @return array Item schema data.
     */
    public function get_item_schema()
    {
    }
    /**
     * Checks if a given request has access to read a single theme global styles config.
     *
     * @since 5.9.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has read access for the item, WP_Error object otherwise.
     */
    public function get_theme_item_permissions_check($request)
    {
    }
    /**
     * Returns the given theme global styles config.
     *
     * @since 5.9.0
     *
     * @param WP_REST_Request $request The request instance.
     * @return WP_REST_Response|WP_Error
     */
    public function get_theme_item($request)
    {
    }
    /**
     * Checks if a given request has access to read a single theme global styles config.
     *
     * @since 6.0.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has read access for the item, WP_Error object otherwise.
     */
    public function get_theme_items_permissions_check($request)
    {
    }
    /**
     * Returns the given theme global styles variations.
     *
     * @since 6.0.0
     *
     * @param WP_REST_Request $request The request instance.
     *
     * @return WP_REST_Response|WP_Error
     */
    public function get_theme_items($request)
    {
    }
}