<?php


/**
 * REST API: WP_REST_Global_Styles_Revisions_Controller class
 *
 * @package WordPress
 * @subpackage REST_API
 * @since 6.3.0
 */
/**
 * Core class used to access global styles revisions via the REST API.
 *
 * @since 6.3.0
 *
 * @see WP_REST_Controller
 */
class WP_REST_Global_Styles_Revisions_Controller extends \WP_REST_Controller
{
    /**
     * Parent post type.
     *
     * @since 6.3.0
     * @var string
     */
    protected $parent_post_type;
    /**
     * The base of the parent controller's route.
     *
     * @since 6.3.0
     * @var string
     */
    protected $parent_base;
    /**
     * Constructor.
     *
     * @since 6.3.0
     */
    public function __construct()
    {
    }
    /**
     * Registers the controller's routes.
     *
     * @since 6.3.0
     */
    public function register_routes()
    {
    }
    /**
     * Retrieves the query params for collections.
     *
     * Inherits from WP_REST_Controller::get_collection_params(),
     * also reflects changes to return value WP_REST_Revisions_Controller::get_collection_params().
     *
     * @since 6.3.0
     *
     * @return array Collection parameters.
     */
    public function get_collection_params()
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
     * Checks the post_date_gmt or modified_gmt and prepare any post or
     * modified date for single post output.
     *
     * Duplicate of WP_REST_Revisions_Controller::prepare_date_response.
     *
     * @since 6.3.0
     *
     * @param string      $date_gmt GMT publication time.
     * @param string|null $date     Optional. Local publication time. Default null.
     * @return string|null ISO8601/RFC3339 formatted datetime, otherwise null.
     */
    protected function prepare_date_response($date_gmt, $date = \null)
    {
    }
    /**
     * Prepares the revision for the REST response.
     *
     * @since 6.3.0
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
     *
     * @return array Item schema data.
     */
    public function get_item_schema()
    {
    }
    /**
     * Checks if a given request has access to read a single global style.
     *
     * @since 6.3.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has read access, WP_Error object otherwise.
     */
    public function get_item_permissions_check($request)
    {
    }
    /**
     * Gets the parent post, if the ID is valid.
     *
     * Duplicate of WP_REST_Revisions_Controller::get_parent.
     *
     * @since 6.3.0
     *
     * @param int $parent_post_id Supplied ID.
     * @return WP_Post|WP_Error Post object if ID is valid, WP_Error otherwise.
     */
    protected function get_parent($parent_post_id)
    {
    }
}