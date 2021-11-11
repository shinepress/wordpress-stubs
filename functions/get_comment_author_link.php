<?php


/**
 * Retrieve the HTML link to the URL of the author of the current comment.
 *
 * Both get_comment_author_url() and get_comment_author() rely on get_comment(),
 * which falls back to the global comment variable if the $comment_ID argument is empty.
 *
 * @since 1.5.0
 * @since 4.4.0 Added the ability for `$comment_ID` to also accept a WP_Comment object.
 *
 * @param int|WP_Comment $comment_ID Optional. WP_Comment or the ID of the comment for which to get the author's link.
 *                                   Default current comment.
 * @return string The comment author name or HTML link for author's URL.
 */
function get_comment_author_link($comment_ID = 0)
{
}