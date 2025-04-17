<?php

namespace SimplePie\Cache;

/**
 * Caches data to redis
 *
 * Registered for URLs with the "redis" protocol
 *
 * For example, `redis://localhost:6379/?timeout=3600&prefix=sp_&dbIndex=0` will
 * connect to redis on `localhost` on port 6379. All tables will be
 * prefixed with `simple_primary-` and data will expire after 3600 seconds
 *
 * @package SimplePie
 * @subpackage Caching
 * @uses Redis
 * @deprecated since SimplePie 1.8.0, use implementation of "Psr\SimpleCache\CacheInterface" instead
 */
class Redis implements \SimplePie\Cache\Base
{
    /**
     * Redis instance
     *
     * @var NativeRedis
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
     * @param Base::TYPE_FEED|Base::TYPE_IMAGE $type Either TYPE_FEED for SimplePie data, or TYPE_IMAGE for image data
     */
    public function __construct($location, $name, $options = null)
    {
    }
    /**
     * @param NativeRedis $cache
     */
    public function setRedisClient(\Redis $cache)
    {
    }
    /**
     * Save data to the cache
     *
     * @param array|\SimplePie\SimplePie $data Data to store in the cache. If passed a SimplePie object, only cache the $data property
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