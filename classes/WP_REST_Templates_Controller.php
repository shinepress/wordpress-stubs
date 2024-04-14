<?php


/**
 * REST API: WP_REST_Templates_Controller class
 *
 * @package    WordPress
 * @subpackage REST_API
 * @since 5.8.0
 */
/**
 * Base Templates REST API Controller.
 *
 * @since 5.8.0
 *
 * @see WP_REST_Controller
 */
class WP_REST_Templates_Controller extends \WP_REST_Controller
{
    /**
     * Post type.
     *
     * @since 5.8.0
     * @var string
     */
    protected $post_type;
    /**
     * Constructor.
     *
     * @since 5.8.0
     *
     * @param string $post_type Post type.
     */
    public function __construct($post_type)
    {
    }
    /**
     * Registers the controllers routes.
     *
     * @since 5.8.0
     * @since 6.1.0 Endpoint for fallback template content.
     */
    public function register_routes()
    {
    }
    /**
     * Returns the fallback template for the given slug.
     *
     * @since 6.1.0
     * @since 6.3.0 Ignore empty templates.
     *
     * @param WP_REST_Request $request The request instance.
     * @return WP_REST_Response|WP_Error
     */
    public function get_template_fallback($request)
    {
    }
    /**
     * Checks if the user has permissions to make the request.
     *
     * @since 5.8.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has read access, WP_Error object otherwise.
     */
    protected function permissions_check($request)
    {
    }
    /**
     * Requesting this endpoint for a template like 'twentytwentytwo//home'
     * requires using a path like /wp/v2/templates/twentytwentytwo//home. There
     * are special cases when WordPress routing corrects the name to contain
     * only a single slash like 'twentytwentytwo/home'.
     *
     * This method doubles the last slash if it's not already doubled. It relies
     * on the template ID format {theme_name}//{template_slug} and the fact that
     * slugs cannot contain slashes.
     *
     * @since 5.9.0
     * @see https://core.trac.wordpress.org/ticket/54507
     *
     * @param string $id Template ID.
     * @return string Sanitized template ID.
     */
    public function _sanitize_template_id($id)
    {
    }
    /**
     * Checks if a given request has access to read templates.
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
     * Returns a list of templates.
     *
     * @since 5.8.0
     *
     * @param WP_REST_Request $request The request instance.
     * @return WP_REST_Response
     */
    public function get_items($request)
    {
    }
    /**
     * Checks if a given request has access to read a single template.
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
     * Returns the given template
     *
     * @since 5.8.0
     *
     * @param WP_REST_Request $request The request instance.
     * @return WP_REST_Response|WP_Error
     */
    public function get_item($request)
    {
    }
    /**
     * Checks if a given request has access to write a single template.
     *
     * @since 5.8.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has write access for the item, WP_Error object otherwise.
     */
    public function update_item_permissions_check($request)
    {
    }
    /**
     * Updates a single template.
     *
     * @since 5.8.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function update_item($request)
    {
    }
    /**
     * Checks if a given request has access to create a template.
     *
     * @since 5.8.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has access to create items, WP_Error object otherwise.
     */
    public function create_item_permissions_check($request)
    {
    }
    /**
     * Creates a single template.
     *
     * @since 5.8.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function create_item($request)
    {
    }
    /**
     * Checks if a given request has access to delete a single template.
     *
     * @since 5.8.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has delete access for the item, WP_Error object otherwise.
     */
    public function delete_item_permissions_check($request)
    {
    }
    /**
     * Deletes a single template.
     *
     * @since 5.8.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function delete_item($request)
    {
    }
    /**
     * Prepares a single template for create or update.
     *
     * @since 5.8.0
     *
     * @param WP_REST_Request $request Request object.
     * @return stdClass Changes to pass to wp_update_post.
     */
    protected function prepare_item_for_database($request)
    {
    }
    /**
     * Prepare a single template output for response
     *
     * @since 5.8.0
     * @since 5.9.0 Renamed `$template` to `$item` to match parent class for PHP 8 named parameter support.
     * @since 6.3.0 Added `modified` property to the response.
     *
     * @param WP_Block_Template $item    Template instance.
     * @param WP_REST_Request   $request Request object.
     * @return WP_REST_Response Response object.
     */
    public function prepare_item_for_response($item, $request)
    {
    }
    /**
     * Prepares links for the request.
     *
     * @since 5.8.0
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
     * @since 5.8.0
     *
     * @return string[] List of link relations.
     */
    protected function get_available_actions()
    {
    }
    /**
     * Retrieves the query params for the posts collection.
     *
     * @since 5.8.0
     * @since 5.9.0 Added `'area'` and `'post_type'`.
     *
     * @return array Collection parameters.
     */
    public function get_collection_params()
    {
    }
    /**
     * Retrieves the block type' schema, conforming to JSON Schema.
     *
     * @since 5.8.0
     * @since 5.9.0 Added `'area'`.
     *
     * @return array Item schema data.
     */
    public function get_item_schema()
    {
    }
}