<?php

namespace SimplePie\Cache;

/**
 * Base class for database-based caches
 *
 * @package SimplePie
 * @subpackage Caching
 * @deprecated since SimplePie 1.8.0, use implementation of "Psr\SimpleCache\CacheInterface" instead
 */
abstract class DB implements \SimplePie\Cache\Base
{
    /**
     * Helper for database conversion
     *
     * Converts a given {@see SimplePie} object into data to be stored
     *
     * @param \SimplePie\SimplePie $data
     * @return array First item is the serialized data for storage, second item is the unique ID for this item
     */
    protected static function prepare_simplepie_object_for_cache($data)
    {
    }
}