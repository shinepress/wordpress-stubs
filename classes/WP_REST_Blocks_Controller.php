<?php


/**
 * Reusable blocks REST API: WP_REST_Blocks_Controller class
 *
 * @package WordPress
 * @subpackage REST_API
 * @since 5.0.0
 */
/**
 * Controller which provides a REST endpoint for the editor to read, create,
 * edit and delete reusable blocks. Blocks are stored as posts with the wp_block
 * post type.
 *
 * @since 5.0.0
 *
 * @see WP_REST_Posts_Controller
 * @see WP_REST_Controller
 */
class WP_REST_Blocks_Controller extends \WP_REST_Posts_Controller
{
    /**
     * Checks if a block can be read.
     *
     * @since 5.0.0
     *
     * @param WP_Post $post Post object that backs the block.
     * @return bool Whether the block can be read.
     */
    public function check_read_permission($post)
    {
    }
    /**
     * Filters a response based on the context defined in the schema.
     *
     * @since 5.0.0
     *
     * @param array  $data    Response data to filter.
     * @param string $context Context defined in the schema.
     * @return array Filtered response.
     */
    public function filter_response_by_context($data, $context)
    {
    }
    /**
     * Retrieves the block's schema, conforming to JSON Schema.
     *
     * @since 5.0.0
     *
     * @return array Item schema data.
     */
    public function get_item_schema()
    {
    }
}