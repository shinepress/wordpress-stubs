<?php


/**
 * REST API: WP_REST_Template_Autosaves_Controller class.
 *
 * @package WordPress
 * @subpackage REST_API
 * @since 6.4.0
 */
/**
 * Core class used to access template autosaves via the REST API.
 *
 * @since 6.4.0
 *
 * @see WP_REST_Autosaves_Controller
 */
class WP_REST_Template_Autosaves_Controller extends \WP_REST_Autosaves_Controller
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
     * Registers the routes for autosaves.
     *
     * @since 6.4.0
     *
     * @see register_rest_route()
     */
    public function register_routes()
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
     * Gets the autosave, if the ID is valid.
     *
     * @since 6.4.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Post|WP_Error Autosave post object if ID is valid, WP_Error otherwise.
     */
    public function get_item($request)
    {
    }
    /**
     * Get the parent post.
     *
     * @since 6.4.0
     *
     * @param int $parent_id Supplied ID.
     * @return WP_Post|WP_Error Post object if ID is valid, WP_Error otherwise.
     */
    protected function get_parent($parent_id)
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
     * Retrieves the autosave's schema, conforming to JSON Schema.
     *
     * @since 6.4.0
     *
     * @return array Item schema data.
     */
    public function get_item_schema()
    {
    }
}