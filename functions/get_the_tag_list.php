<?php


/**
 * Retrieves the tags for a post formatted as a string.
 *
 * @since 2.3.0
 *
 * @param string $before  Optional. String to use before the tags. Default empty.
 * @param string $sep     Optional. String to use between the tags. Default empty.
 * @param string $after   Optional. String to use after the tags. Default empty.
 * @param int    $post_id Optional. Post ID. Defaults to the current post ID.
 * @return string|false|WP_Error A list of tags on success, false if there are no terms,
 *                               WP_Error on failure.
 */
function get_the_tag_list($before = '', $sep = '', $after = '', $post_id = 0)
{
}