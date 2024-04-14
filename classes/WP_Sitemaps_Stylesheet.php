<?php


/**
 * Sitemaps: WP_Sitemaps_Stylesheet class
 *
 * This class provides the XSL stylesheets to style all sitemaps.
 *
 * @package WordPress
 * @subpackage Sitemaps
 * @since 5.5.0
 */
/**
 * Stylesheet provider class.
 *
 * @since 5.5.0
 */
class WP_Sitemaps_Stylesheet
{
    /**
     * Renders the XSL stylesheet depending on whether it's the sitemap index or not.
     *
     * @param string $type Stylesheet type. Either 'sitemap' or 'index'.
     * @phpstan-param 'sitemap'|'index' $type
     * @phpstan-return never
     */
    public function render_stylesheet($type)
    {
    }
    /**
     * Returns the escaped XSL for all sitemaps, except index.
     *
     * @since 5.5.0
     */
    public function get_sitemap_stylesheet()
    {
    }
    /**
     * Returns the escaped XSL for the index sitemaps.
     *
     * @since 5.5.0
     */
    public function get_sitemap_index_stylesheet()
    {
    }
    /**
     * Gets the CSS to be included in sitemap XSL stylesheets.
     *
     * @since 5.5.0
     *
     * @return string The CSS.
     */
    public function get_stylesheet_css()
    {
    }
}