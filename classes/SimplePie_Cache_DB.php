<?php


/**
 * Base class for database-based caches
 *
 * @package SimplePie
 * @subpackage Caching
 */
abstract class SimplePie_Cache_DB implements \SimplePie_Cache_Base
{
    /**
     * Helper for database conversion
     *
     * Converts a given {@see SimplePie} object into data to be stored
     *
     * @param SimplePie $data
     * @return array First item is the serialized data for storage, second item is the unique ID for this item
     */
    protected static function prepare_simplepie_object_for_cache($data)
    {
    }
}