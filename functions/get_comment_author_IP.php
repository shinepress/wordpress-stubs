<?php


/**
 * Retrieves the IP address of the author of the current comment.
 *
 * @since 1.5.0
 * @since 4.4.0 Added the ability for `$comment_ID` to also accept a WP_Comment object.
 *
 * @param int|WP_Comment $comment_ID Optional. WP_Comment or the ID of the comment for which to get the author's IP address.
 *                                   Default current comment.
 * @return string Comment author's IP address, or an empty string if it's not available.
 */
function get_comment_author_IP($comment_ID = 0)
{
}