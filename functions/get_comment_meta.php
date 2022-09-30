<?php


/**
 * Retrieve comment meta field for a comment.
 *
 * @since 2.9.0
 * @link https://codex.wordpress.org/Function_Reference/get_comment_meta
 *
 * @param int $comment_id Comment ID.
 * @param string $key Optional. The meta key to retrieve. By default, returns data for all keys.
 * @param bool $single Whether to return a single value.
 * @return mixed Will be an array if $single is false. Will be value of meta data field if $single
 *  is true.
 */
function get_comment_meta($comment_id, $key = '', $single = \false)
{
}