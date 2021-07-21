<?php


/**
 * Notify an author (and/or others) of a comment/trackback/pingback on a post.
 *
 * @since 1.0.0
 *
 * @param int|WP_Comment $comment_id Comment ID or WP_Comment object.
 * @param string         $deprecated Not used
 * @return bool True on completion. False if no email addresses were specified.
 */
function wp_notify_postauthor($comment_id, $deprecated = \null)
{
}