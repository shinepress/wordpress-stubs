<?php


/**
 * Sitemaps: WP_Sitemaps_Users class
 *
 * Builds the sitemaps for the 'user' object type.
 *
 * @package WordPress
 * @subpackage Sitemaps
 * @since 5.5.0
 */
/**
 * Users XML sitemap provider.
 *
 * @since 5.5.0
 */
class WP_Sitemaps_Users extends \WP_Sitemaps_Provider
{
    /**
     * WP_Sitemaps_Users constructor.
     *
     * @since 5.5.0
     */
    public function __construct()
    {
    }
    /**
     * Gets a URL list for a user sitemap.
     *
     * @since 5.5.0
     *
     * @param int    $page_num       Page of results.
     * @param string $object_subtype Optional. Not applicable for Users but
     *                               required for compatibility with the parent
     *                               provider class. Default empty.
     * @return array[] Array of URL information for a sitemap.
     */
    public function get_url_list($page_num, $object_subtype = '')
    {
    }
    /**
     * Gets the max number of pages available for the object type.
     *
     * @since 5.5.0
     *
     * @see WP_Sitemaps_Provider::max_num_pages
     *
     * @param string $object_subtype Optional. Not applicable for Users but
     *                               required for compatibility with the parent
     *                               provider class. Default empty.
     * @return int Total page count.
     */
    public function get_max_num_pages($object_subtype = '')
    {
    }
    /**
     * Returns the query args for retrieving users to list in the sitemap.
     *
     * @since 5.5.0
     *
     * @return array Array of WP_User_Query arguments.
     */
    protected function get_users_query_args()
    {
    }
}