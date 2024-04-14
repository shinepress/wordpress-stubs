<?php


/**
 * Adds any terms from the given IDs to the cache that do not already exist in cache.
 *
 * @since 4.6.0
 * @since 6.1.0 This function is no longer marked as "private".
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param array $term_ids          Array of term IDs.
 * @param bool  $update_meta_cache Optional. Whether to update the meta cache. Default true.
 */
function _prime_term_caches($term_ids, $update_meta_cache = \true)
{
}