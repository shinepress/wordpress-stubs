<?php


/**
 * Updates a post meta field based on the given post ID.
 *
 * Use the `$prev_value` parameter to differentiate between meta fields with the
 * same key and post ID.
 *
 * If the meta field for the post does not exist, it will be added and its ID returned.
 *
 * Can be used in place of add_post_meta().
 *
 * @since 1.5.0
 *
 * @param int    $post_id    Post ID.
 * @param string $meta_key   Metadata key.
 * @param mixed  $meta_value Metadata value. Must be serializable if non-scalar.
 * @param mixed  $prev_value Optional. Previous value to check before updating.
 * @return int|bool The new meta field ID if a field with the given key didn't exist and was
 *                  therefore added, true on successful update, false on failure.
 */
function update_post_meta($post_id, $meta_key, $meta_value, $prev_value = '')
{
}