<?php


/**
 * Retrieves multiple values from the cache in one call.
 *
 * @since 5.5.0
 *
 * @see WP_Object_Cache::get_multiple()
 * @global WP_Object_Cache $wp_object_cache Object cache global instance.
 *
 * @param array  $keys  Array of keys under which the cache contents are stored.
 * @param string $group Optional. Where the cache contents are grouped. Default empty.
 * @param bool   $force Optional. Whether to force an update of the local cache
 *                      from the persistent cache. Default false.
 * @return array Array of values organized into groups.
 */
function wp_cache_get_multiple($keys, $group = '', $force = \false)
{
}