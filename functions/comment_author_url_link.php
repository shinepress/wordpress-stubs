<?php


/**
 * Displays the HTML link of the URL of the author of the current comment.
 *
 * @since 0.71
 * @since 4.6.0 Added the `$comment` parameter.
 *
 * @param string         $link_text Optional. Text to display instead of the comment author's
 *                                  email address. Default empty.
 * @param string         $before    Optional. Text or HTML to display before the email link.
 *                                  Default empty.
 * @param string         $after     Optional. Text or HTML to display after the email link.
 *                                  Default empty.
 * @param int|WP_Comment $comment   Optional. Comment ID or WP_Comment object.
 *                                  Default is the current comment.
 */
function comment_author_url_link($link_text = '', $before = '', $after = '', $comment = 0)
{
}