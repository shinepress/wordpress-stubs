<?php


/**
 * Retrieves HTML content for cancel comment reply link.
 *
 * @since 2.7.0
 * @since 6.2.0 Added the `$post` parameter.
 *
 * @param string           $text Optional. Text to display for cancel reply link. If empty,
 *                               defaults to 'Click here to cancel reply'. Default empty.
 * @param int|WP_Post|null $post Optional. The post the comment thread is being
 *                               displayed for. Defaults to the current global post.
 * @return string
 */
function get_cancel_comment_reply_link($text = '', $post = \null)
{
}