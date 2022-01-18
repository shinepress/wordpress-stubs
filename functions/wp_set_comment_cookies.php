<?php


/**
 * Sets the cookies used to store an unauthenticated commentator's identity. Typically used
 * to recall previous comments by this commentator that are still held in moderation.
 *
 * @param WP_Comment $comment Comment object.
 * @param object     $user    Comment author's object.
 *
 * @since 3.4.0
 */
function wp_set_comment_cookies($comment, $user)
{
}