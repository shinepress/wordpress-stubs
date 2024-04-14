<?php


/**
 * Adds any posts from the given ids to the cache that do not already exist in cache
 *
 * @since 3.4.0
 * @access private
 *
 * @see update_post_caches()
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param array $ids               ID list.
 * @param bool  $update_term_cache Optional. Whether to update the term cache. Default true.
 * @param bool  $update_meta_cache Optional. Whether to update the meta cache. Default true.
 */
function _prime_post_caches($ids, $update_term_cache = \true, $update_meta_cache = \true)
{
}