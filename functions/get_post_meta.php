<?php


/**
 * Retrieves a post meta field for the given post ID.
 *
 * @since 1.5.0
 *
 * @param int    $post_id Post ID.
 * @param string $key     Optional. The meta key to retrieve. By default, returns
 *                        data for all keys. Default empty.
 * @param bool   $single  Optional. If true, returns only the first value for the specified meta key.
 *                        This parameter has no effect if $key is not specified. Default false.
 * @return mixed Will be an array if $single is false. Will be value of the meta
 *               field if $single is true.
 */
function get_post_meta($post_id, $key = '', $single = \false)
{
}