<?php


/**
 * Sitemaps: WP_Sitemaps_Renderer class
 *
 * Responsible for rendering Sitemaps data to XML in accordance with sitemap protocol.
 *
 * @package WordPress
 * @subpackage Sitemaps
 * @since 5.5.0
 */
/**
 * Class WP_Sitemaps_Renderer
 *
 * @since 5.5.0
 */
#[\AllowDynamicProperties]
class WP_Sitemaps_Renderer
{
    /**
     * XSL stylesheet for styling a sitemap for web browsers.
     *
     * @since 5.5.0
     *
     * @var string
     */
    protected $stylesheet = '';
    /**
     * XSL stylesheet for styling a sitemap for web browsers.
     *
     * @since 5.5.0
     *
     * @var string
     */
    protected $stylesheet_index = '';
    /**
     * WP_Sitemaps_Renderer constructor.
     *
     * @since 5.5.0
     */
    public function __construct()
    {
    }
    /**
     * Gets the URL for the sitemap stylesheet.
     *
     * @since 5.5.0
     *
     * @global WP_Rewrite $wp_rewrite WordPress rewrite component.
     *
     * @return string The sitemap stylesheet URL.
     */
    public function get_sitemap_stylesheet_url()
    {
    }
    /**
     * Gets the URL for the sitemap index stylesheet.
     *
     * @since 5.5.0
     *
     * @global WP_Rewrite $wp_rewrite WordPress rewrite component.
     *
     * @return string The sitemap index stylesheet URL.
     */
    public function get_sitemap_index_stylesheet_url()
    {
    }
    /**
     * Renders a sitemap index.
     *
     * @since 5.5.0
     *
     * @param array $sitemaps Array of sitemap URLs.
     */
    public function render_index($sitemaps)
    {
    }
    /**
     * Gets XML for a sitemap index.
     *
     * @since 5.5.0
     *
     * @param array $sitemaps Array of sitemap URLs.
     * @return string|false A well-formed XML string for a sitemap index. False on error.
     */
    public function get_sitemap_index_xml($sitemaps)
    {
    }
    /**
     * Renders a sitemap.
     *
     * @since 5.5.0
     *
     * @param array $url_list Array of URLs for a sitemap.
     */
    public function render_sitemap($url_list)
    {
    }
    /**
     * Gets XML for a sitemap.
     *
     * @since 5.5.0
     *
     * @param array $url_list Array of URLs for a sitemap.
     * @return string|false A well-formed XML string for a sitemap index. False on error.
     */
    public function get_sitemap_xml($url_list)
    {
    }
}