<?php


/**
 * REST API: WP_REST_Term_Search_Handler class
 *
 * @package WordPress
 * @subpackage REST_API
 * @since 5.6.0
 */
/**
 * Core class representing a search handler for terms in the REST API.
 *
 * @since 5.6.0
 *
 * @see WP_REST_Search_Handler
 */
class WP_REST_Term_Search_Handler extends \WP_REST_Search_Handler
{
    /**
     * Constructor.
     *
     * @since 5.6.0
     */
    public function __construct()
    {
    }
    /**
     * Searches the object type content for a given search request.
     *
     * @since 5.6.0
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
     * @since 5.6.0
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
     * @since 5.6.0
     *
     * @param int $id Item ID.
     * @return array Links for the given item.
     */
    public function prepare_item_links($id)
    {
    }
}