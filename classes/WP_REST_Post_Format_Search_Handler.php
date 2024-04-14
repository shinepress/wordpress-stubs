<?php


/**
 * REST API: WP_REST_Post_Format_Search_Handler class
 *
 * @package WordPress
 * @subpackage REST_API
 * @since 5.6.0
 */
/**
 * Core class representing a search handler for post formats in the REST API.
 *
 * @since 5.6.0
 *
 * @see WP_REST_Search_Handler
 */
class WP_REST_Post_Format_Search_Handler extends \WP_REST_Search_Handler
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
     * Searches the post formats for a given search request.
     *
     * @since 5.6.0
     *
     * @param WP_REST_Request $request Full REST request.
     * @return array {
     *     Associative array containing found IDs and total count for the matching search results.
     *
     *     @type string[] $ids   Array containing slugs for the matching post formats.
     *     @type int      $total Total count for the matching search results.
     * }
     * @phpstan-return array{
     *   ids: string[],
     *   total: int,
     * }
     */
    public function search_items(\WP_REST_Request $request)
    {
    }
    /**
     * Prepares the search result for a given post format.
     *
     * @since 5.6.0
     *
     * @param string $id     Item ID, the post format slug.
     * @param array  $fields Fields to include for the item.
     * @return array {
     *     Associative array containing fields for the post format based on the `$fields` parameter.
     *
     *     @type string $id    Optional. Post format slug.
     *     @type string $title Optional. Post format name.
     *     @type string $url   Optional. Post format permalink URL.
     *     @type string $type  Optional. String 'post-format'.
     *}
     * @phpstan-return array{
     *   id: string,
     *   title: string,
     *   url: string,
     *   type: string,
     * }
     */
    public function prepare_item($id, array $fields)
    {
    }
    /**
     * Prepares links for the search result.
     *
     * @since 5.6.0
     *
     * @param string $id Item ID, the post format slug.
     * @return array Links for the given item.
     */
    public function prepare_item_links($id)
    {
    }
}