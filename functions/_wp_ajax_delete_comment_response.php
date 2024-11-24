<?php


/**
 * Sends back current comment total and new page links if they need to be updated.
 *
 * Contrary to normal success Ajax response ("1"), die with time() on success.
 *
 * @since 2.7.0
 * @access private
 *
 * @param int $comment_id
 * @param int $delta
 */
function _wp_ajax_delete_comment_response($comment_id, $delta = -1)
{
}