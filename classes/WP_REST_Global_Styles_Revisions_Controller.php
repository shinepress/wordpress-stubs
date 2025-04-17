<?php


/**
 * Core class used to access global styles revisions via the REST API.
 *
 * @since 6.3.0
 *
 * @see WP_REST_Controller
 */
class WP_REST_Global_Styles_Revisions_Controller extends \WP_REST_Revisions_Controller
{
    /**
     * The base of the parent controller's route.
     *
     * @since 6.3.0
     * @var string
     */
    protected $parent_base;
    /**
     * Parent post type.
     *
     * @since 6.6.0
     * @var string
     */
    protected $parent_post_type;
    /**
     * Constructor.
     *
     * @since 6.3.0
     * @since 6.6.0 Extends class from WP_REST_Revisions_Controller.
     *
     * @param string $parent_post_type Post type of the parent.
     */
    public function __construct($parent_post_type = 'wp_global_styles')
    {
    }
    /**
     * Registers the controller's routes.
     *
     * @since 6.3.0
     * @since 6.6.0 Added route to fetch individual global styles revisions.
     */
    public function register_routes()
    {
    }
    /**
     * Returns decoded JSON from post content string,
     * or a 404 if not found.
     *
     * @since 6.3.0
     *
     * @param string $raw_json Encoded JSON from global styles custom post content.
     * @return Array|WP_Error
     */
    protected function get_decoded_global_styles_json($raw_json)
    {
    }
    /**
     * Returns paginated revisions of the given global styles config custom post type.
     *
     * The bulk of the body is taken from WP_REST_Revisions_Controller->get_items,
     * but global styles does not require as many parameters.
     *
     * @since 6.3.0
     *
     * @param WP_REST_Request $request The request instance.
     * @return WP_REST_Response|WP_Error
     */
    public function get_items($request)
    {
    }
    /**
     * Prepares the revision for the REST response.
     *
     * @since 6.3.0
     * @since 6.6.0 Added resolved URI links to the response.
     *
     * @param WP_Post         $post    Post revision object.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response|WP_Error Response object.
     */
    public function prepare_item_for_response($post, $request)
    {
    }
    /**
     * Retrieves the revision's schema, conforming to JSON Schema.
     *
     * @since 6.3.0
     * @since 6.6.0 Merged parent and parent controller schema data.
     *
     * @return array Item schema data.
     */
    public function get_item_schema()
    {
    }
    /**
     * Retrieves the query params for collections.
     * Removes params that are not supported by global styles revisions.
     *
     * @since 6.6.0
     *
     * @return array Collection parameters.
     */
    public function get_collection_params()
    {
    }
}