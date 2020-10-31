<?php


//
// Comment meta functions
//
/**
 * Add meta data field to a comment.
 *
 * @since 2.9.0
 * @link https://developer.wordpress.org/reference/functions/add_comment_meta/
 *
 * @param int $comment_id Comment ID.
 * @param string $meta_key Metadata name.
 * @param mixed $meta_value Metadata value.
 * @param bool $unique Optional, default is false. Whether the same key should not be added.
 * @return int|bool Meta ID on success, false on failure.
 */
function add_comment_meta($comment_id, $meta_key, $meta_value, $unique = \false)
{
}