<?php


/**
 * Adds any posts from the given IDs to the cache that do not already exist in cache.
 *
 * @since 3.4.0
 * @since 6.1.0 This function is no longer marked as "private".
 *
 * @see update_post_cache()
 * @see update_postmeta_cache()
 * @see update_object_term_cache()
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int[] $ids               ID list.
 * @param bool  $update_term_cache Optional. Whether to update the term cache. Default true.
 * @param bool  $update_meta_cache Optional. Whether to update the meta cache. Default true.
 */
function _prime_post_caches($ids, $update_term_cache = \true, $update_meta_cache = \true)
{
}