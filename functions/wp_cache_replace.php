<?php


/**
 * Replaces the contents of the cache with new data.
 *
 * @since 2.0.0
 *
 * @see WP_Object_Cache::replace()
 * @global WP_Object_Cache $wp_object_cache Object cache global instance.
 *
 * @param int|string $key    The key for the cache data that should be replaced.
 * @param mixed      $data   The new data to store in the cache.
 * @param string     $group  Optional. The group for the cache data that should be replaced.
 *                           Default empty.
 * @param int        $expire Optional. When to expire the cache contents, in seconds.
 *                           Default 0 (no expiration).
 * @return bool False if original value does not exist, true if contents were replaced
 */
function wp_cache_replace($key, $data, $group = '', $expire = 0)
{
}