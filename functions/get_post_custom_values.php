<?php


/**
 * Retrieve values for a custom post field.
 *
 * The parameters must not be considered optional. All of the post meta fields
 * will be retrieved and only the meta field key values returned.
 *
 * @since 1.2.0
 *
 * @param string $key     Optional. Meta field key. Default empty.
 * @param int    $post_id Optional. Post ID. Default is the ID of the global `$post`.
 * @return array|null Meta field values.
 */
function get_post_custom_values($key = '', $post_id = 0)
{
}