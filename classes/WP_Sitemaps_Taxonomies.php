<?php


/**
 * Sitemaps: WP_Sitemaps_Taxonomies class
 *
 * Builds the sitemaps for the 'taxonomy' object type.
 *
 * @package WordPress
 * @subpackage Sitemaps
 * @since 5.5.0
 */
/**
 * Taxonomies XML sitemap provider.
 *
 * @since 5.5.0
 */
class WP_Sitemaps_Taxonomies extends \WP_Sitemaps_Provider
{
    /**
     * WP_Sitemaps_Taxonomies constructor.
     *
     * @since 5.5.0
     */
    public function __construct()
    {
    }
    /**
     * Returns all public, registered taxonomies.
     *
     * @since 5.5.0
     *
     * @return WP_Taxonomy[] Array of registered taxonomy objects keyed by their name.
     */
    public function get_object_subtypes()
    {
    }
    /**
     * Gets a URL list for a taxonomy sitemap.
     *
     * @since 5.5.0
     *
     * @param int    $page_num Page of results.
     * @param string $taxonomy Optional. Taxonomy name. Default empty.
     * @return array Array of URLs for a sitemap.
     */
    public function get_url_list($page_num, $taxonomy = '')
    {
    }
    /**
     * Gets the max number of pages available for the object type.
     *
     * @since 5.5.0
     *
     * @param string $taxonomy Taxonomy name.
     * @return int Total number of pages.
     */
    public function get_max_num_pages($taxonomy = '')
    {
    }
    /**
     * Returns the query args for retrieving taxonomy terms to list in the sitemap.
     *
     * @since 5.5.0
     *
     * @param string $taxonomy Taxonomy name.
     * @return array Array of WP_Term_Query arguments.
     */
    protected function get_taxonomies_query_args($taxonomy)
    {
    }
}