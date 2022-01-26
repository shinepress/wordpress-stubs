<?php


/**
 * Compares the lengths of comment data against the maximum character limits.
 *
 * @since 4.7.0
 *
 * @param array $comment_data Array of arguments for inserting a comment.
 * @return WP_Error|true WP_Error when a comment field exceeds the limit,
 *                       otherwise true.
 */
function wp_check_comment_data_max_lengths($comment_data)
{
}