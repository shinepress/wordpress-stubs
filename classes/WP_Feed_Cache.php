<?php


/**
 * Core class used to implement a feed cache.
 *
 * @since 2.8.0
 *
 * @see SimplePie_Cache
 */
#[\AllowDynamicProperties]
class WP_Feed_Cache extends \SimplePie_Cache
{
    /**
     * Creates a new SimplePie_Cache object.
     *
     * @since 2.8.0
     *
     * @param string $location  URL location (scheme is used to determine handler).
     * @param string $filename  Unique identifier for cache object.
     * @param string $extension 'spi' or 'spc'.
     * @return WP_Feed_Cache_Transient Feed cache handler object that uses transients.
     */
    public function create($location, $filename, $extension)
    {
    }
}