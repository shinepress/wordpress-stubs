<?php


/**
 * REST API: WP_REST_Post_Search_Handler class
 *
 * @package WordPress
 * @subpackage REST_API
 * @since 5.0.0
 */
/**
 * Core class representing a search handler for posts in the REST API.
 *
 * @since 5.0.0
 *
 * @see WP_REST_Search_Handler
 */
class WP_REST_Post_Search_Handler extends \WP_REST_Search_Handler
{
    /**
     * Constructor.
     *
     * @since 5.0.0
     */
    public function __construct()
    {
    }
    /**
     * Searches the object type content for a given search request.
     *
     * @since 5.0.0
     *
     * @param WP_REST_Request $request Full REST request.
     * @return array Associative array containing an `WP_REST_Search_Handler::RESULT_IDS` containing
     *               an array of found IDs and `WP_REST_Search_Handler::RESULT_TOTAL` containing the
     *               total count for the matching search results.
     */
    public function search_items(\WP_REST_Request $request)
    {
    }
    /**
     * Prepares the search result for a given ID.
     *
     * @since 5.0.0
     *
     * @param int   $id     Item ID.
     * @param array $fields Fields to include for the item.
     * @return array Associative array containing all fields for the item.
     */
    public function prepare_item($id, array $fields)
    {
    }
    /**
     * Prepares links for the search result of a given ID.
     *
     * @since 5.0.0
     *
     * @param int $id Item ID.
     * @return array Links for the given item.
     */
    public function prepare_item_links($id)
    {
    }
    /**
     * Overwrites the default protected title format.
     *
     * By default, WordPress will show password protected posts with a title of
     * "Protected: %s". As the REST API communicates the protected status of a post
     * in a machine readable format, we remove the "Protected: " prefix.
     *
     * @since 5.0.0
     *
     * @return string Protected title format.
     */
    public function protected_title_format()
    {
    }
    /**
     * Attempts to detect the route to access a single item.
     *
     * @since 5.0.0
     * @deprecated 5.5.0 Use rest_get_route_for_post()
     * @see rest_get_route_for_post()
     *
     * @param WP_Post $post Post object.
     * @return string REST route relative to the REST base URI, or empty string if unknown.
     */
    protected function detect_rest_item_route($post)
    {
    }
}