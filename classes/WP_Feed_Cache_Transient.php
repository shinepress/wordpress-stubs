<?php


/**
 * Feed API: WP_Feed_Cache_Transient class
 *
 * @package WordPress
 * @subpackage Feed
 * @since 4.7.0
 */
/**
 * Core class used to implement feed cache transients.
 *
 * @since 2.8.0
 */
class WP_Feed_Cache_Transient
{
    /**
     * Holds the transient name.
     *
     * @since 2.8.0
     * @var string
     */
    public $name;
    /**
     * Holds the transient mod name.
     *
     * @since 2.8.0
     * @var string
     */
    public $mod_name;
    /**
     * Holds the cache duration in seconds.
     *
     * Defaults to 43200 seconds (12 hours).
     *
     * @since 2.8.0
     * @var int
     */
    public $lifetime = 43200;
    /**
     * Constructor.
     *
     * @since 2.8.0
     * @since 3.2.0 Updated to use a PHP5 constructor.
     *
     * @param string $location  URL location (scheme is used to determine handler).
     * @param string $filename  Unique identifier for cache object.
     * @param string $extension 'spi' or 'spc'.
     */
    public function __construct($location, $filename, $extension)
    {
    }
    /**
     * Sets the transient.
     *
     * @since 2.8.0
     *
     * @param SimplePie $data Data to save.
     * @return true Always true.
     */
    public function save($data)
    {
    }
    /**
     * Gets the transient.
     *
     * @since 2.8.0
     *
     * @return mixed Transient value.
     */
    public function load()
    {
    }
    /**
     * Gets mod transient.
     *
     * @since 2.8.0
     *
     * @return mixed Transient value.
     */
    public function mtime()
    {
    }
    /**
     * Sets mod transient.
     *
     * @since 2.8.0
     *
     * @return bool False if value was not set and true if value was set.
     */
    public function touch()
    {
    }
    /**
     * Deletes transients.
     *
     * @since 2.8.0
     *
     * @return true Always true.
     */
    public function unlink()
    {
    }
}