<?php


/**
 * Retrieves the comment type of the current comment.
 *
 * @since 1.5.0
 * @since 4.4.0 Added the ability for `$comment_id` to also accept a WP_Comment object.
 *
 * @param int|WP_Comment $comment_id Optional. WP_Comment or ID of the comment for which to get the type.
 *                                   Default current comment.
 * @return string The comment type.
 */
function get_comment_type($comment_id = 0)
{
}