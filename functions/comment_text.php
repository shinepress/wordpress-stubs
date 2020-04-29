<?php


/**
 * Display the text of the current comment.
 *
 * @since 0.71
 * @since 4.4.0 Added the ability for `$comment_ID` to also accept a WP_Comment object.
 *
 * @see Walker_Comment::comment()
 *
 * @param int|WP_Comment  $comment_ID WP_Comment or ID of the comment for which to print the text.
 *                                    Default current comment.
 * @param array           $args       Optional. An array of arguments. Default empty array. Default empty.
 */
function comment_text($comment_ID = 0, $args = array())
{
}