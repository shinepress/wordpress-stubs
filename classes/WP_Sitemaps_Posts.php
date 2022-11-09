<?php


/**
 * Sitemaps: WP_Sitemaps_Posts class
 *
 * Builds the sitemaps for the 'post' object type.
 *
 * @package WordPress
 * @subpackage Sitemaps
 * @since 5.5.0
 */
/**
 * Posts XML sitemap provider.
 *
 * @since 5.5.0
 */
class WP_Sitemaps_Posts extends \WP_Sitemaps_Provider
{
    /**
     * WP_Sitemaps_Posts constructor.
     *
     * @since 5.5.0
     */
    public function __construct()
    {
    }
    /**
     * Returns the public post types, which excludes nav_items and similar types.
     * Attachments are also excluded. This includes custom post types with public = true.
     *
     * @since 5.5.0
     *
     * @return WP_Post_Type[] Array of registered post type objects keyed by their name.
     */
    public function get_object_subtypes()
    {
    }
    /**
     * Gets a URL list for a post type sitemap.
     *
     * @since 5.5.0
     *
     * @param int    $page_num  Page of results.
     * @param string $post_type Optional. Post type name. Default empty.
     * @return array Array of URLs for a sitemap.
     */
    public function get_url_list($page_num, $post_type = '')
    {
    }
    /**
     * Gets the max number of pages available for the object type.
     *
     * @since 5.5.0
     *
     * @param string $post_type Optional. Post type name. Default empty.
     * @return int Total number of pages.
     */
    public function get_max_num_pages($post_type = '')
    {
    }
    /**
     * Returns the query args for retrieving posts to list in the sitemap.
     *
     * @since 5.5.0
     *
     * @param string $post_type Post type name.
     * @return array Array of WP_Query arguments.
     */
    protected function get_posts_query_args($post_type)
    {
    }
}