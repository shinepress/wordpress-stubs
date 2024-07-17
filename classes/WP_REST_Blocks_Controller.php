<?php


/**
 * Synced patterns REST API: WP_REST_Blocks_Controller class
 *
 * @package WordPress
 * @subpackage REST_API
 * @since 5.0.0
 */
/**
 * Controller which provides a REST endpoint for the editor to read, create,
 * edit, and delete synced patterns (formerly called reusable blocks).
 * Patterns are stored as posts with the wp_block post type.
 *
 * @since 5.0.0
 *
 * @see WP_REST_Posts_Controller
 * @see WP_REST_Controller
 */
class WP_REST_Blocks_Controller extends \WP_REST_Posts_Controller
{
    /**
     * Checks if a pattern can be read.
     *
     * @since 5.0.0
     *
     * @param WP_Post $post Post object that backs the block.
     * @return bool Whether the pattern can be read.
     */
    public function check_read_permission($post)
    {
    }
    /**
     * Filters a response based on the context defined in the schema.
     *
     * @since 5.0.0
     * @since 6.3.0 Adds the `wp_pattern_sync_status` postmeta property to the top level of response.
     *
     * @param array  $data    Response data to filter.
     * @param string $context Context defined in the schema.
     * @return array Filtered response.
     */
    public function filter_response_by_context($data, $context)
    {
    }
    /**
     * Retrieves the pattern's schema, conforming to JSON Schema.
     *
     * @since 5.0.0
     *
     * @return array Item schema data.
     */
    public function get_item_schema()
    {
    }
}