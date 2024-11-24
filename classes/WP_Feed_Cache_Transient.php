<?php


/**
 * Core class used to implement feed cache transients.
 *
 * @since 2.8.0
 * @since 6.7.0 Now properly implements the SimplePie\Cache\Base interface.
 */
#[\AllowDynamicProperties]
class WP_Feed_Cache_Transient implements \SimplePie\Cache\Base
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
     * Creates a new (transient) cache object.
     *
     * @since 2.8.0
     * @since 3.2.0 Updated to use a PHP5 constructor.
     * @since 6.7.0 Parameter names have been updated to be in line with the `SimplePie\Cache\Base` interface.
     *
     * @param string                           $location URL location (scheme is used to determine handler).
     * @param string                           $name     Unique identifier for cache object.
     * @param Base::TYPE_FEED|Base::TYPE_IMAGE $type     Either `TYPE_FEED` ('spc') for SimplePie data,
     *                                                   or `TYPE_IMAGE` ('spi') for image data.
     */
    public function __construct($location, $name, $type)
    {
    }
    /**
     * Saves data to the transient.
     *
     * @since 2.8.0
     *
     * @param array|SimplePie\SimplePie $data Data to save. If passed a SimplePie object,
     *                                        only cache the `$data` property.
     * @return true Always true.
     */
    public function save($data)
    {
    }
    /**
     * Retrieves the data saved in the transient.
     *
     * @since 2.8.0
     *
     * @return array Data for `SimplePie::$data`.
     */
    public function load()
    {
    }
    /**
     * Gets mod transient.
     *
     * @since 2.8.0
     *
     * @return int Timestamp.
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