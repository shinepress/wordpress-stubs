<?php


/**
 * Will clean the page in the cache.
 *
 * Clean (read: delete) page from cache that matches $id. Will also clean cache
 * associated with 'all_page_ids' and 'get_pages'.
 *
 * @since 2.0.0
 * @deprecated 3.4.0 Use clean_post_cache
 * @see clean_post_cache()
 *
 * @param int $id Page ID to clean
 */
function clean_page_cache($id)
{
}