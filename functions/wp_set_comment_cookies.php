<?php


/**
 * Sets the cookies used to store an unauthenticated commentator's identity. Typically used
 * to recall previous comments by this commentator that are still held in moderation.
 *
 * @since 3.4.0
 * @since 4.9.6 The `$cookies_consent` parameter was added.
 *
 * @param WP_Comment $comment         Comment object.
 * @param WP_User    $user            Comment author's user object. The user may not exist.
 * @param bool       $cookies_consent Optional. Comment author's consent to store cookies. Default true.
 */
function wp_set_comment_cookies($comment, $user, $cookies_consent = \true)
{
}