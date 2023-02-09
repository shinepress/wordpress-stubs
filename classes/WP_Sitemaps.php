<?php


/**
 * Sitemaps: WP_Sitemaps class
 *
 * This is the main class integrating all other classes.
 *
 * @package WordPress
 * @subpackage Sitemaps
 * @since 5.5.0
 */
/**
 * Class WP_Sitemaps.
 *
 * @since 5.5.0
 */
#[\AllowDynamicProperties]
class WP_Sitemaps
{
    /**
     * The main index of supported sitemaps.
     *
     * @since 5.5.0
     *
     * @var WP_Sitemaps_Index
     */
    public $index;
    /**
     * The main registry of supported sitemaps.
     *
     * @since 5.5.0
     *
     * @var WP_Sitemaps_Registry
     */
    public $registry;
    /**
     * An instance of the renderer class.
     *
     * @since 5.5.0
     *
     * @var WP_Sitemaps_Renderer
     */
    public $renderer;
    /**
     * WP_Sitemaps constructor.
     *
     * @since 5.5.0
     */
    public function __construct()
    {
    }
    /**
     * Initiates all sitemap functionality.
     *
     * If sitemaps are disabled, only the rewrite rules will be registered
     * by this method, in order to properly send 404s.
     *
     * @since 5.5.0
     */
    public function init()
    {
    }
    /**
     * Determines whether sitemaps are enabled or not.
     *
     * @since 5.5.0
     *
     * @return bool Whether sitemaps are enabled.
     */
    public function sitemaps_enabled()
    {
    }
    /**
     * Registers and sets up the functionality for all supported sitemaps.
     *
     * @since 5.5.0
     */
    public function register_sitemaps()
    {
    }
    /**
     * Registers sitemap rewrite tags and routing rules.
     *
     * @since 5.5.0
     */
    public function register_rewrites()
    {
    }
    /**
     * Renders sitemap templates based on rewrite rules.
     *
     * @since 5.5.0
     *
     * @global WP_Query $wp_query WordPress Query object.
     */
    public function render_sitemaps()
    {
    }
    /**
     * Redirects a URL to the wp-sitemap.xml
     *
     * @since 5.5.0
     *
     * @param bool     $bypass Pass-through of the pre_handle_404 filter value.
     * @param WP_Query $query  The WP_Query object.
     * @return bool Bypass value.
     */
    public function redirect_sitemapxml($bypass, $query)
    {
    }
    /**
     * Adds the sitemap index to robots.txt.
     *
     * @since 5.5.0
     *
     * @param string $output robots.txt output.
     * @param bool   $public Whether the site is public.
     * @return string The robots.txt output.
     */
    public function add_robots($output, $public)
    {
    }
}