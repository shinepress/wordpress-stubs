<?php


/**
 * REST API: WP_REST_Template_Revisions_Controller class
 *
 * @package WordPress
 * @subpackage REST_API
 * @since 6.4.0
 */
/**
 * Core class used to access template revisions via the REST API.
 *
 * @since 6.4.0
 *
 * @see WP_REST_Controller
 */
class WP_REST_Template_Revisions_Controller extends \WP_REST_Revisions_Controller
{
    /**
     * Constructor.
     *
     * @since 6.4.0
     *
     * @param string $parent_post_type Post type of the parent.
     */
    public function __construct($parent_post_type)
    {
    }
    /**
     * Registers the routes for revisions based on post types supporting revisions.
     *
     * @since 6.4.0
     *
     * @see register_rest_route()
     */
    public function register_routes()
    {
    }
    /**
     * Gets the parent post, if the ID is valid.
     *
     * @since 6.4.0
     *
     * @param int $parent_post_id Supplied ID.
     * @return WP_Post|WP_Error Post object if ID is valid, WP_Error otherwise.
     */
    protected function get_parent($parent_post_id)
    {
    }
    /**
     * Prepares the item for the REST response.
     *
     * @since 6.4.0
     *
     * @param WP_Post         $item    Post revision object.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response Response object.
     */
    public function prepare_item_for_response($item, $request)
    {
    }
    /**
     * Checks if a given request has access to delete a revision.
     *
     * @since 6.4.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has access to delete the item, WP_Error object otherwise.
     */
    public function delete_item_permissions_check($request)
    {
    }
    /**
     * Prepares links for the request.
     *
     * @since 6.4.0
     *
     * @param WP_Block_Template $template Template.
     * @return array Links for the given post.
     */
    protected function prepare_links($template)
    {
    }
    /**
     * Retrieves the item's schema, conforming to JSON Schema.
     *
     * @since 6.4.0
     *
     * @return array Item schema data.
     */
    public function get_item_schema()
    {
    }
}