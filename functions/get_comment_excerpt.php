<?php


/**
 * Retrieves the excerpt of the given comment.
 *
 * Returns a maximum of 20 words with an ellipsis appended if necessary.
 *
 * @since 1.5.0
 * @since 4.4.0 Added the ability for `$comment_id` to also accept a WP_Comment object.
 *
 * @param int|WP_Comment $comment_id Optional. WP_Comment or ID of the comment for which to get the excerpt.
 *                                   Default current comment.
 * @return string The possibly truncated comment excerpt.
 */
function get_comment_excerpt($comment_id = 0)
{
}