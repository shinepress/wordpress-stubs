<?php


/**
 * Caches data to a MySQL database
 *
 * Registered for URLs with the "mysql" protocol
 *
 * For example, `mysql://root:password@localhost:3306/mydb?prefix=sp_` will
 * connect to the `mydb` database on `localhost` on port 3306, with the user
 * `root` and the password `password`. All tables will be prefixed with `sp_`
 *
 * @package SimplePie
 * @subpackage Caching
 */
class SimplePie_Cache_MySQL extends \SimplePie_Cache_DB
{
    /**
     * PDO instance
     *
     * @var PDO
     */
    protected $mysql;
    /**
     * Options
     *
     * @var array
     */
    protected $options;
    /**
     * Cache ID
     *
     * @var string
     */
    protected $id;
    /**
     * Create a new cache object
     *
     * @param string $location Location string (from SimplePie::$cache_location)
     * @param string $name Unique ID for the cache
     * @param string $type Either TYPE_FEED for SimplePie data, or TYPE_IMAGE for image data
     * @phpstan-return void
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