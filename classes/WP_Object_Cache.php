<?php


/**
 * Object Cache API: WP_Object_Cache class
 *
 * @package WordPress
 * @subpackage Cache
 * @since 5.4.0
 */
/**
 * Core class that implements an object cache.
 *
 * The WordPress Object Cache is used to save on trips to the database. The
 * Object Cache stores all of the cache data to memory and makes the cache
 * contents available by using a key, which is used to name and later retrieve
 * the cache contents.
 *
 * The Object Cache can be replaced by other caching mechanisms by placing files
 * in the wp-content folder which is looked at in wp-settings. If that file
 * exists, then this file will not be included.
 *
 * @since 2.0.0
 */
class WP_Object_Cache
{
    /**
     * The amount of times the cache data was already stored in the cache.
     *
     * @since 2.5.0
     * @var int
     */
    public $cache_hits = 0;
    /**
     * Amount of times the cache did not have the request in cache.
     *
     * @since 2.0.0
     * @var int
     */
    public $cache_misses = 0;
    /**
     * List of global cache groups.
     *
     * @since 3.0.0
     * @var array
     */
    protected $global_groups = array();
    /**
     * Sets up object properties; PHP 5 style constructor.
     *
     * @since 2.0.8
     */
    public function __construct()
    {
    }
    /**
     * Makes private properties readable for backward compatibility.
     *
     * @since 4.0.0
     *
     * @param string $name Property to get.
     * @return mixed Property.
     */
    public function __get($name)
    {
    }
    /**
     * Makes private properties settable for backward compatibility.
     *
     * @since 4.0.0
     *
     * @param string $name  Property to set.
     * @param mixed  $value Property value.
     * @return mixed Newly-set property.
     */
    public function __set($name, $value)
    {
    }
    /**
     * Makes private properties checkable for backward compatibility.
     *
     * @since 4.0.0
     *
     * @param string $name Property to check if set.
     * @return bool Whether the property is set.
     */
    public function __isset($name)
    {
    }
    /**
     * Makes private properties un-settable for backward compatibility.
     *
     * @since 4.0.0
     *
     * @param string $name Property to unset.
     */
    public function __unset($name)
    {
    }
    /**
     * Adds data to the cache if it doesn't already exist.
     *
     * @since 2.0.0
     *
     * @uses WP_Object_Cache::_exists() Checks to see if the cache already has data.
     * @uses WP_Object_Cache::set()     Sets the data after the checking the cache
     *                                  contents existence.
     *
     * @param int|string $key    What to call the contents in the cache.
     * @param mixed      $data   The contents to store in the cache.
     * @param string     $group  Optional. Where to group the cache contents. Default 'default'.
     * @param int        $expire Optional. When to expire the cache contents. Default 0 (no expiration).
     * @return bool True on success, false if cache key and group already exist.
     */
    public function add($key, $data, $group = 'default', $expire = 0)
    {
    }
    /**
     * Sets the list of global cache groups.
     *
     * @since 3.0.0
     *
     * @param array $groups List of groups that are global.
     */
    public function add_global_groups($groups)
    {
    }
    /**
     * Decrements numeric cache item's value.
     *
     * @since 3.3.0
     *
     * @param int|string $key    The cache key to decrement.
     * @param int        $offset Optional. The amount by which to decrement the item's value. Default 1.
     * @param string     $group  Optional. The group the key is in. Default 'default'.
     * @return int|false The item's new value on success, false on failure.
     */
    public function decr($key, $offset = 1, $group = 'default')
    {
    }
    /**
     * Removes the contents of the cache key in the group.
     *
     * If the cache key does not exist in the group, then nothing will happen.
     *
     * @since 2.0.0
     *
     * @param int|string $key        What the contents in the cache are called.
     * @param string     $group      Optional. Where the cache contents are grouped. Default 'default'.
     * @param bool       $deprecated Optional. Unused. Default false.
     * @return bool False if the contents weren't deleted and true on success.
     */
    public function delete($key, $group = 'default', $deprecated = \false)
    {
    }
    /**
     * Clears the object cache of all data.
     *
     * @since 2.0.0
     *
     * @return true Always returns true.
     */
    public function flush()
    {
    }
    /**
     * Retrieves the cache contents, if it exists.
     *
     * The contents will be first attempted to be retrieved by searching by the
     * key in the cache group. If the cache is hit (success) then the contents
     * are returned.
     *
     * On failure, the number of cache misses will be incremented.
     *
     * @since 2.0.0
     *
     * @param int|string $key   The key under which the cache contents are stored.
     * @param string     $group Optional. Where the cache contents are grouped. Default 'default'.
     * @param bool       $force Optional. Unused. Whether to force an update of the local cache
     *                          from the persistent cache. Default false.
     * @param bool       $found Optional. Whether the key was found in the cache (passed by reference).
     *                          Disambiguates a return of false, a storable value. Default null.
     * @return mixed|false The cache contents on success, false on failure to retrieve contents.
     */
    public function get($key, $group = 'default', $force = \false, &$found = \null)
    {
    }
    /**
     * Retrieves multiple values from the cache in one call.
     *
     * @since 5.5.0
     *
     * @param array  $keys  Array of keys under which the cache contents are stored.
     * @param string $group Optional. Where the cache contents are grouped. Default 'default'.
     * @param bool   $force Optional. Whether to force an update of the local cache
     *                      from the persistent cache. Default false.
     * @return array Array of values organized into groups.
     */
    public function get_multiple($keys, $group = 'default', $force = \false)
    {
    }
    /**
     * Increments numeric cache item's value.
     *
     * @since 3.3.0
     *
     * @param int|string $key    The cache key to increment
     * @param int        $offset Optional. The amount by which to increment the item's value. Default 1.
     * @param string     $group  Optional. The group the key is in. Default 'default'.
     * @return int|false The item's new value on success, false on failure.
     */
    public function incr($key, $offset = 1, $group = 'default')
    {
    }
    /**
     * Replaces the contents in the cache, if contents already exist.
     *
     * @since 2.0.0
     *
     * @see WP_Object_Cache::set()
     *
     * @param int|string $key    What to call the contents in the cache.
     * @param mixed      $data   The contents to store in the cache.
     * @param string     $group  Optional. Where to group the cache contents. Default 'default'.
     * @param int        $expire Optional. When to expire the cache contents. Default 0 (no expiration).
     * @return bool False if not exists, true if contents were replaced.
     */
    public function replace($key, $data, $group = 'default', $expire = 0)
    {
    }
    /**
     * Resets cache keys.
     *
     * @since 3.0.0
     *
     * @deprecated 3.5.0 Use switch_to_blog()
     * @see switch_to_blog()
     */
    public function reset()
    {
    }
    /**
     * Sets the data contents into the cache.
     *
     * The cache contents are grouped by the $group parameter followed by the
     * $key. This allows for duplicate IDs in unique groups. Therefore, naming of
     * the group should be used with care and should follow normal function
     * naming guidelines outside of core WordPress usage.
     *
     * The $expire parameter is not used, because the cache will automatically
     * expire for each time a page is accessed and PHP finishes. The method is
     * more for cache plugins which use files.
     *
     * @since 2.0.0
     *
     * @param int|string $key    What to call the contents in the cache.
     * @param mixed      $data   The contents to store in the cache.
     * @param string     $group  Optional. Where to group the cache contents. Default 'default'.
     * @param int        $expire Not Used.
     * @return true Always returns true.
     */
    public function set($key, $data, $group = 'default', $expire = 0)
    {
    }
    /**
     * Echoes the stats of the caching.
     *
     * Gives the cache hits, and cache misses. Also prints every cached group,
     * key and the data.
     *
     * @since 2.0.0
     */
    public function stats()
    {
    }
    /**
     * Switches the internal blog ID.
     *
     * This changes the blog ID used to create keys in blog specific groups.
     *
     * @since 3.5.0
     *
     * @param int $blog_id Blog ID.
     */
    public function switch_to_blog($blog_id)
    {
    }
    /**
     * Serves as a utility function to determine whether a key exists in the cache.
     *
     * @since 3.4.0
     *
     * @param int|string $key   Cache key to check for existence.
     * @param string     $group Cache group for the key existence check.
     * @return bool Whether the key exists in the cache for the given group.
     */
    protected function _exists($key, $group)
    {
    }
}