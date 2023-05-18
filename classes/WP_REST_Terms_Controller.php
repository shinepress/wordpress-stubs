<?php


/**
 * REST API: WP_REST_Terms_Controller class
 *
 * @package WordPress
 * @subpackage REST_API
 * @since 4.7.0
 */
/**
 * Core class used to managed terms associated with a taxonomy via the REST API.
 *
 * @since 4.7.0
 *
 * @see WP_REST_Controller
 */
class WP_REST_Terms_Controller extends \WP_REST_Controller
{
    /**
     * Taxonomy key.
     *
     * @since 4.7.0
     * @var string
     */
    protected $taxonomy;
    /**
     * Instance of a term meta fields object.
     *
     * @since 4.7.0
     * @var WP_REST_Term_Meta_Fields
     */
    protected $meta;
    /**
     * Column to have the terms be sorted by.
     *
     * @since 4.7.0
     * @var string
     */
    protected $sort_column;
    /**
     * Number of terms that were found.
     *
     * @since 4.7.0
     * @var int
     */
    protected $total_terms;
    /**
     * Constructor.
     *
     * @since 4.7.0
     *
     * @param string $taxonomy Taxonomy key.
     */
    public function __construct($taxonomy)
    {
    }
    /**
     * Registers the routes for the objects of the controller.
     *
     * @since 4.7.0
     *
     * @see register_rest_route()
     */
    public function register_routes()
    {
    }
    /**
     * Checks if the terms for a post can be read.
     *
     * @since 6.0.3
     *
     * @param WP_Post         $post    Post object.
     * @param WP_REST_Request $request Full details about the request.
     * @return bool Whether the terms for the post can be read.
     */
    public function check_read_terms_permission_for_post($post, $request)
    {
    }
    /**
     * Checks if a request has access to read terms in the specified taxonomy.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return bool|WP_Error True if the request has read access, otherwise false or WP_Error object.
     */
    public function get_items_permissions_check($request)
    {
    }
    /**
     * Retrieves terms associated with a taxonomy.
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
     * Get the term, if the ID is valid.
     *
     * @since 4.7.2
     *
     * @param int $id Supplied ID.
     * @return WP_Term|WP_Error Term object if ID is valid, WP_Error otherwise.
     */
    protected function get_term($id)
    {
    }
    /**
     * Checks if a request has access to read or edit the specified term.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return bool|WP_Error True if the request has read access for the item, otherwise false or WP_Error object.
     */
    public function get_item_permissions_check($request)
    {
    }
    /**
     * Gets a single term from a taxonomy.
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
     * Checks if a request has access to create a term.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return bool|WP_Error True if the request has access to create items, false or WP_Error object otherwise.
     */
    public function create_item_permissions_check($request)
    {
    }
    /**
     * Creates a single term in a taxonomy.
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
     * Checks if a request has access to update the specified term.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return bool|WP_Error True if the request has access to update the item, false or WP_Error object otherwise.
     */
    public function update_item_permissions_check($request)
    {
    }
    /**
     * Updates a single term from a taxonomy.
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
     * Checks if a request has access to delete the specified term.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return bool|WP_Error True if the request has access to delete the item, otherwise false or WP_Error object.
     */
    public function delete_item_permissions_check($request)
    {
    }
    /**
     * Deletes a single term from a taxonomy.
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
     * Prepares a single term for create or update.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Request object.
     * @return object Term object.
     */
    public function prepare_item_for_database($request)
    {
    }
    /**
     * Prepares a single term output for response.
     *
     * @since 4.7.0
     *
     * @param WP_Term         $item    Term object.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response Response object.
     */
    public function prepare_item_for_response($item, $request)
    {
    }
    /**
     * Prepares links for the request.
     *
     * @since 4.7.0
     *
     * @param WP_Term $term Term object.
     * @return array Links for the given term.
     */
    protected function prepare_links($term)
    {
    }
    /**
     * Retrieves the term's schema, conforming to JSON Schema.
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
    /**
     * Checks that the taxonomy is valid.
     *
     * @since 4.7.0
     *
     * @param string $taxonomy Taxonomy to check.
     * @return bool Whether the taxonomy is allowed for REST management.
     */
    protected function check_is_taxonomy_allowed($taxonomy)
    {
    }
}