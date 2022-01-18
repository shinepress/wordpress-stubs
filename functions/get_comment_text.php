<?php


/**
 * Retrieves the text of the current comment.
 *
 * @since 1.5.0
 * @since 4.4.0 Added the ability for `$comment_ID` to also accept a WP_Comment object.
 * @since 5.4.0 Added 'In reply to %s.' prefix to child comments in comments feed.
 *
 * @see Walker_Comment::comment()
 *
 * @param int|WP_Comment $comment_ID WP_Comment or ID of the comment for which to get the text.
 *                                   Default current comment.
 * @param array          $args       Optional. An array of arguments. Default empty array.
 * @return string The comment content.
 */
function get_comment_text($comment_ID = 0, $args = array())
{
}