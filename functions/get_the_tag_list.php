<?php


/**
 * Retrieve the tags for a post formatted as a string.
 *
 * @since 2.3.0
 *
 * @param string $before Optional. Before tags.
 * @param string $sep Optional. Between tags.
 * @param string $after Optional. After tags.
 * @param int $id Optional. Post ID. Defaults to the current post.
 * @return string|false|WP_Error A list of tags on success, false if there are no terms, WP_Error on failure.
 */
function get_the_tag_list($before = '', $sep = '', $after = '', $id = 0)
{
}