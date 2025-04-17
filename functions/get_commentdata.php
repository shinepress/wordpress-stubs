<?php


/**
 * Retrieve an array of comment data about comment $comment_id.
 *
 * @since 0.71
 * @deprecated 2.7.0 Use get_comment()
 * @see get_comment()
 *
 * @param int $comment_id The ID of the comment
 * @param int $no_cache Whether to use the cache (cast to bool)
 * @param bool $include_unapproved Whether to include unapproved comments
 * @return array The comment data
 */
function get_commentdata($comment_id, $no_cache = 0, $include_unapproved = \false)
{
}