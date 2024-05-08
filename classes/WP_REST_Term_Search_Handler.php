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
     * Searches terms for a given search request.
     *
     * @since 5.6.0
     *
     * @param WP_REST_Request $request Full REST request.
     * @return array {
     *     Associative array containing found IDs and total count for the matching search results.
     *
     *     @type int[]               $ids   Found term IDs.
     *     @type string|int|WP_Error $total Numeric string containing the number of terms in that
     *                                      taxonomy, 0 if there are no results, or WP_Error if
     *                                      the requested taxonomy does not exist.
     * }
     * @phpstan-return array{
     *   ids: int[],
     *   total: string|int|WP_Error,
     * }
     */
    public function search_items(\WP_REST_Request $request)
    {
    }
    /**
     * Prepares the search result for a given term ID.
     *
     * @since 5.6.0
     *
     * @param int   $id     Term ID.
     * @param array $fields Fields to include for the term.
     * @return array {
     *     Associative array containing fields for the term based on the `$fields` parameter.
     *
     *     @type int    $id    Optional. Term ID.
     *     @type string $title Optional. Term name.
     *     @type string $url   Optional. Term permalink URL.
     *     @type string $type  Optional. Term taxonomy name.
     * }
     * @phpstan-return array{
     *   id: int,
     *   title: string,
     *   url: string,
     *   type: string,
     * }
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
     * @return array[] Array of link arrays for the given item.
     */
    public function prepare_item_links($id)
    {
    }
}