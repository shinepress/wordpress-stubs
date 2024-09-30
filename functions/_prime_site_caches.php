<?php


/**
 * Adds any sites from the given IDs to the cache that do not already exist in cache.
 *
 * @since 4.6.0
 * @since 5.1.0 Introduced the `$update_meta_cache` parameter.
 * @since 6.1.0 This function is no longer marked as "private".
 * @since 6.3.0 Use wp_lazyload_site_meta() for lazy-loading of site meta.
 *
 * @see update_site_cache()
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param array $ids               ID list.
 * @param bool  $update_meta_cache Optional. Whether to update the meta cache. Default true.
 */
function _prime_site_caches($ids, $update_meta_cache = \true)
{
}