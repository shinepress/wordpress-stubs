<?php


/**
 * Used to create cache objects
 *
 * This class can be overloaded with {@see SimplePie::set_cache_class()},
 * although the preferred way is to create your own handler
 * via {@see register()}
 *
 * @package SimplePie
 * @subpackage Caching
 */
class SimplePie_Cache
{
    /**
     * Cache handler classes
     *
     * These receive 3 parameters to their constructor, as documented in
     * {@see register()}
     * @var array
     */
    protected static $handlers = array('mysql' => 'SimplePie_Cache_MySQL', 'memcache' => 'SimplePie_Cache_Memcache', 'memcached' => 'SimplePie_Cache_Memcached', 'redis' => 'SimplePie_Cache_Redis');
    /**
     * Create a new SimplePie_Cache object
     *
     * @param string $location URL location (scheme is used to determine handler)
     * @param string $filename Unique identifier for cache object
     * @param string $extension 'spi' or 'spc'
     * @return SimplePie_Cache_Base Type of object depends on scheme of `$location`
     */
    public static function get_handler($location, $filename, $extension)
    {
    }
    /**
     * Create a new SimplePie_Cache object
     *
     * @deprecated Use {@see get_handler} instead
     */
    public function create($location, $filename, $extension)
    {
    }
    /**
     * Register a handler
     *
     * @param string $type DSN type to register for
     * @param string $class Name of handler class. Must implement SimplePie_Cache_Base
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