<?php


/**
 * Displays text based on comment reply status.
 *
 * Only affects users with JavaScript disabled.
 *
 * @internal The $comment global must be present to allow template tags access to the current
 *           comment. See https://core.trac.wordpress.org/changeset/36512.
 *
 * @since 2.7.0
 * @since 6.2.0 Added the `$post` parameter.
 *
 * @global WP_Comment $comment Global comment object.
 *
 * @param string|false      $no_reply_text  Optional. Text to display when not replying to a comment.
 *                                          Default false.
 * @param string|false      $reply_text     Optional. Text to display when replying to a comment.
 *                                          Default false. Accepts "%s" for the author of the comment
 *                                          being replied to.
 * @param bool              $link_to_parent Optional. Boolean to control making the author's name a link
 *                                          to their comment. Default true.
 * @param int|WP_Post|null  $post           Optional. The post that the comment form is being displayed for.
 *                                          Defaults to the current global post.
 */
function comment_form_title($no_reply_text = \false, $reply_text = \false, $link_to_parent = \true, $post = \null)
{
}