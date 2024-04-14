<?php


/**
 * Retrieves the comment date of the current comment.
 *
 * @since 1.5.0
 * @since 4.4.0 Added the ability for `$comment_id` to also accept a WP_Comment object.
 *
 * @param string         $format     Optional. PHP date format. Defaults to the 'date_format' option.
 * @param int|WP_Comment $comment_id Optional. WP_Comment or ID of the comment for which to get the date.
 *                                   Default current comment.
 * @return string The comment's date.
 */
function get_comment_date($format = '', $comment_id = 0)
{
}