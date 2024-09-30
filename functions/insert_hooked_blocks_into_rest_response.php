<?php


/**
 * Hooks into the REST API response for the core/navigation block and adds the first and last inner blocks.
 *
 * @since 6.6.0
 *
 * @param WP_REST_Response $response The response object.
 * @param WP_Post          $post     Post object.
 * @return WP_REST_Response The response object.
 */
function insert_hooked_blocks_into_rest_response($response, $post)
{
}