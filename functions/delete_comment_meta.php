<?php


/**
 * Removes metadata matching criteria from a comment.
 *
 * You can match based on the key, or key and value. Removing based on key and
 * value, will keep from removing duplicate metadata with the same key. It also
 * allows removing all metadata matching key, if needed.
 *
 * @since 2.9.0
 *
 * @link https://developer.wordpress.org/reference/functions/delete_comment_meta/
 *
 * @param int    $comment_id Comment ID.
 * @param string $meta_key   Metadata name.
 * @param mixed  $meta_value Optional. Metadata value. If provided,
 *                           rows will only be removed that match the value.
 *                           Must be serializable if non-scalar. Default empty.
 * @return bool True on success, false on failure.
 */
function delete_comment_meta($comment_id, $meta_key, $meta_value = '')
{
}