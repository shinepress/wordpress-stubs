<?php


/**
 * Retrieve the excerpt of the current comment.
 *
 * Will cut each word and only output the first 20 words with '&hellip;' at the end.
 * If the word count is less than 20, then no truncating is done and no '&hellip;'
 * will appear.
 *
 * @since 1.5.0
 * @since 4.4.0 Added the ability for `$comment_ID` to also accept a WP_Comment object.
 *
 * @param int|WP_Comment $comment_ID  WP_Comment or ID of the comment for which to get the excerpt.
 *                                    Default current comment.
 * @return string The maybe truncated comment with 20 words or less.
 */
function get_comment_excerpt($comment_ID = 0)
{
}