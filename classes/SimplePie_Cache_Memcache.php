<?php


/**
 * Caches data to memcache
 *
 * Registered for URLs with the "memcache" protocol
 *
 * For example, `memcache://localhost:11211/?timeout=3600&prefix=sp_` will
 * connect to memcache on `localhost` on port 11211. All tables will be
 * prefixed with `sp_` and data will expire after 3600 seconds
 *
 * @package SimplePie
 * @subpackage Caching
 * @uses Memcache
 */
class SimplePie_Cache_Memcache implements \SimplePie_Cache_Base
{
    /**
     * Memcache instance
     *
     * @var Memcache
     */
    protected $cache;
    /**
     * Options
     *
     * @var array
     */
    protected $options;
    /**
     * Cache name
     *
     * @var string
     */
    protected $name;
    /**
     * Create a new cache object
     *
     * @param string $location Location string (from SimplePie::$cache_location)
     * @param string $name Unique ID for the cache
     * @param string $type Either TYPE_FEED for SimplePie data, or TYPE_IMAGE for image data
     */
    public function __construct($location, $name, $type)
    {
    }
    /**
     * Save data to the cache
     *
     * @param array|SimplePie $data Data to store in the cache. If passed a SimplePie object, only cache the $data property
     * @return bool Successfulness
     */
    public function save($data)
    {
    }
    /**
     * Retrieve the data saved to the cache
     *
     * @return array Data for SimplePie::$data
     */
    public function load()
    {
    }
    /**
     * Retrieve the last modified time for the cache
     *
     * @return int Timestamp
     */
    public function mtime()
    {
    }
    /**
     * Set the last modified time to the current time
     *
     * @return bool Success status
     */
    public function touch()
    {
    }
    /**
     * Remove the cache
     *
     * @return bool Success status
     */
    public function unlink()
    {
    }
}