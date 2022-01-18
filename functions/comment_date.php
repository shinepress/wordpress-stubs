<?php


/**
 * Display the comment date of the current comment.
 *
 * @since 0.71
 * @since 4.4.0 Added the ability for `$comment_ID` to also accept a WP_Comment object.
 *
 * @param string         $d          Optional. The format of the date. Default user's settings.
 * @param int|WP_Comment $comment_ID WP_Comment or ID of the comment for which to print the date.
 *                                   Default current comment.
 */
function comment_date($d = '', $comment_ID = 0)
{
}