<?php


/**
 * Comment template functions
 *
 * These functions are meant to live inside of the WordPress loop.
 *
 * @package WordPress
 * @subpackage Template
 */
/**
 * Retrieves the author of the current comment.
 *
 * If the comment has an empty comment_author field, then 'Anonymous' person is
 * assumed.
 *
 * @since 1.5.0
 * @since 4.4.0 Added the ability for `$comment_id` to also accept a WP_Comment object.
 *
 * @param int|WP_Comment $comment_id Optional. WP_Comment or the ID of the comment for which to retrieve the author.
 *                                   Default current comment.
 * @return string The comment author
 */
function get_comment_author($comment_id = 0)
{
}