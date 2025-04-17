<?php

namespace SimplePie;

/**
 * Used to create cache objects
 *
 * This class can be overloaded with {@see SimplePie::set_cache_class()},
 * although the preferred way is to create your own handler
 * via {@see register()}
 *
 * @package SimplePie
 * @subpackage Caching
 * @deprecated since SimplePie 1.8.0, use "SimplePie\SimplePie::set_cache()" instead
 */
class Cache
{
    /**
     * Cache handler classes
     *
     * These receive 3 parameters to their constructor, as documented in
     * {@see register()}
     * @var array
     */
    protected static $handlers = ['mysql' => 'SimplePie\Cache\MySQL', 'memcache' => 'SimplePie\Cache\Memcache', 'memcached' => 'SimplePie\Cache\Memcached', 'redis' => 'SimplePie\Cache\Redis'];
    /**
     * Create a new SimplePie\Cache object
     *
     * @param string $location URL location (scheme is used to determine handler)
     * @param string $filename Unique identifier for cache object
     * @param Base::TYPE_FEED|Base::TYPE_IMAGE $extension 'spi' or 'spc'
     * @return Base Type of object depends on scheme of `$location`
     */
    public static function get_handler($location, $filename, $extension)
    {
    }
    /**
     * Create a new SimplePie\Cache object
     *
     * @deprecated since SimplePie 1.3.1, use {@see get_handler()} instead
     */
    public function create($location, $filename, $extension)
    {
    }
    /**
     * Register a handler
     *
     * @param string $type DSN type to register for
     * @param class-string<Base> $class Name of handler class. Must implement Base
     */
    public static function register($type, $class)
    {
    }
    /**
     * Parse a URL into an array
     *
     * @param string $url
     * @return array
     */
    public static function parse_URL($url)
    {
    }
}