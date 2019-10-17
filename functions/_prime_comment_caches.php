<?php


/**
 * Adds any comments from the given IDs to the cache that do not already exist in cache.
 *
 * @since 4.4.0
 * @access private
 *
 * @see update_comment_cache()
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param array $comment_ids       Array of comment IDs.
 * @param bool  $update_meta_cache Optional. Whether to update the meta cache. Default true.
 */
function _prime_comment_caches($comment_ids, $update_meta_cache = \true)
{
}