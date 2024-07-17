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
class WP_REST_Global_Styles_Controller extends \WP_REST_Posts_Controller
{
    /**
     * Whether the controller supports batching.
     *
     * @since 6.6.0
     * @var array
     */
    protected $allow_batch = array('v1' => \false);
    /**
     * Constructor.
     *
     * @since 6.6.0
     *
     * @param string $post_type Post type.
     */
    public function __construct($post_type = 'wp_global_styles')
    {
    }
    /**
     * Registers the controllers routes.
     *
     * @since 5.9.0
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
    public function check_read_permission($post)
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
     * Prepares a single global styles config for update.
     *
     * @since 5.9.0
     * @since 6.2.0 Added validation of styles.css property.
     * @since 6.6.0 Added registration of block style variations from theme.json sources (theme.json, user theme.json, partials).
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
     * @since 6.6.0 Added custom relative theme file URIs to `_links`.
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
     * @since 6.3.0 Adds revisions count and rest URL href to version-history.
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
     * @since 6.6.0 Added $post and $request parameters.
     *
     * @param WP_Post         $post    Post object.
     * @param WP_REST_Request $request Request object.
     * @return array List of link relations.
     */
    protected function get_available_actions($post, $request)
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
     * @since 6.6.0 Added custom relative theme file URIs to `_links`.
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
     * @since 6.2.0 Returns parent theme variations, if they exist.
     * @since 6.6.0 Added custom relative theme file URIs to `_links` for each item.
     *
     * @param WP_REST_Request $request The request instance.
     *
     * @return WP_REST_Response|WP_Error
     */
    public function get_theme_items($request)
    {
    }
    /**
     * Validate style.css as valid CSS.
     *
     * Currently just checks for invalid markup.
     *
     * @since 6.2.0
     * @since 6.4.0 Changed method visibility to protected.
     *
     * @param string $css CSS to validate.
     * @return true|WP_Error True if the input was validated, otherwise WP_Error.
     */
    protected function validate_custom_css($css)
    {
    }
}