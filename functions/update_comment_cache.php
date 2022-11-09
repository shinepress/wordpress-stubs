<?php


/**
 * Updates the comment cache of given comments.
 *
 * Will add the comments in $comments to the cache. If comment ID already exists
 * in the comment cache then it will not be updated. The comment is added to the
 * cache using the comment group with the key using the ID of the comments.
 *
 * @since 2.3.0
 * @since 4.4.0 Introduced the `$update_meta_cache` parameter.
 *
 * @param array $comments          Array of comment row objects
 * @param bool  $update_meta_cache Whether to update commentmeta cache. Default true.
 */
function update_comment_cache($comments, $update_meta_cache = \true)
{
}