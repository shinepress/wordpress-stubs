<?php


/**
 * Will remove all of the term ids from the cache.
 *
 * @since 2.3.0
 *
 * @global wpdb $wpdb                           WordPress database abstraction object.
 * @global bool $_wp_suspend_cache_invalidation
 *
 * @param int|int[] $ids            Single or array of term IDs.
 * @param string    $taxonomy       Optional. Taxonomy slug. Can be empty, in which case the taxonomies of the passed
 *                                  term IDs will be used. Default empty.
 * @param bool      $clean_taxonomy Optional. Whether to clean taxonomy wide caches (true), or just individual
 *                                  term object caches (false). Default true.
 * @phpstan-return void
 */
function clean_term_cache($ids, $taxonomy = '', $clean_taxonomy = \true)
{
}