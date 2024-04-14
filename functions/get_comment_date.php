<?php


/**
 * Retrieve the comment date of the current comment.
 *
 * @since 1.5.0
 * @since 4.4.0 Added the ability for `$comment_ID` to also accept a WP_Comment object.
 *
 * @param string          $d          Optional. The format of the date. Default user's setting.
 * @param int|WP_Comment  $comment_ID WP_Comment or ID of the comment for which to get the date.
 *                                    Default current comment.
 * @return string The comment's date.
 */
function get_comment_date($d = '', $comment_ID = 0)
{
}