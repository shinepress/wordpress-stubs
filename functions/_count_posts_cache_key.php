<?php


/**
 * Return the cache key for wp_count_posts() based on the passed arguments.
 *
 * @since 3.9.0
 *
 * @param string $type Optional. Post type to retrieve count Default 'post'.
 * @param string $perm Optional. 'readable' or empty. Default empty.
 * @return string The cache key.
 */
function _count_posts_cache_key($type = 'post', $perm = '')
{
}