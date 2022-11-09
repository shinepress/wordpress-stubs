<?php


/**
 * Sitemaps: WP_Sitemaps_Provider class
 *
 * This class is a base class for other sitemap providers to extend and contains shared functionality.
 *
 * @package WordPress
 * @subpackage Sitemaps
 * @since 5.5.0
 */
/**
 * Class WP_Sitemaps_Provider.
 *
 * @since 5.5.0
 */
abstract class WP_Sitemaps_Provider
{
    /**
     * Provider name.
     *
     * This will also be used as the public-facing name in URLs.
     *
     * @since 5.5.0
     *
     * @var string
     */
    protected $name = '';
    /**
     * Object type name (e.g. 'post', 'term', 'user').
     *
     * @since 5.5.0
     *
     * @var string
     */
    protected $object_type = '';
    /**
     * Gets a URL list for a sitemap.
     *
     * @since 5.5.0
     *
     * @param int    $page_num       Page of results.
     * @param string $object_subtype Optional. Object subtype name. Default empty.
     * @return array[] Array of URL information for a sitemap.
     */
    abstract public function get_url_list($page_num, $object_subtype = '');
    /**
     * Gets the max number of pages available for the object type.
     *
     * @since 5.5.0
     *
     * @param string $object_subtype Optional. Object subtype. Default empty.
     * @return int Total number of pages.
     */
    abstract public function get_max_num_pages($object_subtype = '');
    /**
     * Gets data about each sitemap type.
     *
     * @since 5.5.0
     *
     * @return array[] Array of sitemap types including object subtype name and number of pages.
     */
    public function get_sitemap_type_data()
    {
    }
    /**
     * Lists sitemap pages exposed by this provider.
     *
     * The returned data is used to populate the sitemap entries of the index.
     *
     * @since 5.5.0
     *
     * @return array[] Array of sitemap entries.
     */
    public function get_sitemap_entries()
    {
    }
    /**
     * Gets the URL of a sitemap entry.
     *
     * @since 5.5.0
     *
     * @global WP_Rewrite $wp_rewrite WordPress rewrite component.
     *
     * @param string $name The name of the sitemap.
     * @param int    $page The page of the sitemap.
     * @return string The composed URL for a sitemap entry.
     */
    public function get_sitemap_url($name, $page)
    {
    }
    /**
     * Returns the list of supported object subtypes exposed by the provider.
     *
     * @since 5.5.0
     *
     * @return array List of object subtypes objects keyed by their name.
     */
    public function get_object_subtypes()
    {
    }
}