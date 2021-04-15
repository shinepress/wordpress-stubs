<?php


/**
 * Display text based on comment reply status.
 *
 * Only affects users with JavaScript disabled.
 *
 * @internal The $comment global must be present to allow template tags access to the current
 *           comment. See https://core.trac.wordpress.org/changeset/36512.
 *
 * @since 2.7.0
 *
 * @global WP_Comment $comment Global comment object.
 *
 * @param string $noreplytext  Optional. Text to display when not replying to a comment.
 *                             Default false.
 * @param string $replytext    Optional. Text to display when replying to a comment.
 *                             Default false. Accepts "%s" for the author of the comment
 *                             being replied to.
 * @param string $linktoparent Optional. Boolean to control making the author's name a link
 *                             to their comment. Default true.
 */
function comment_form_title($noreplytext = \false, $replytext = \false, $linktoparent = \true)
{
}