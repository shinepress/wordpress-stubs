<?php


/**
 * List Table API: WP_Theme_Install_List_Table class
 *
 * @package WordPress
 * @subpackage Administration
 * @since 3.1.0
 */
/**
 * Core class used to implement displaying themes to install in a list table.
 *
 * @since 3.1.0
 *
 * @see WP_Themes_List_Table
 */
class WP_Theme_Install_List_Table extends \WP_Themes_List_Table
{
    public $features = array();
    /**
     * @return bool
     */
    public function ajax_user_can()
    {
    }
    /**
     * @global array  $tabs
     * @global string $tab
     * @global int    $paged
     * @global string $type
     * @global array  $theme_field_defaults
     */
    public function prepare_items()
    {
    }
    /**
     */
    public function no_items()
    {
    }
    /**
     * @global array $tabs
     * @global string $tab
     * @return array
     */
    protected function get_views()
    {
    }
    /**
     * Displays the theme install table.
     *
     * Overrides the parent display() method to provide a different container.
     *
     * @since 3.1.0
     */
    public function display()
    {
    }
    /**
     */
    public function display_rows()
    {
    }
    /**
     * Prints a theme from the WordPress.org API.
     *
     * @since 3.1.0
     *
     * @global array $themes_allowedtags
     *
     * @param stdClass $theme {
     *     An object that contains theme data returned by the WordPress.org API.
     *
     *     @type string $name           Theme name, e.g. 'Twenty Twenty-One'.
     *     @type string $slug           Theme slug, e.g. 'twentytwentyone'.
     *     @type string $version        Theme version, e.g. '1.1'.
     *     @type string $author         Theme author username, e.g. 'melchoyce'.
     *     @type string $preview_url    Preview URL, e.g. 'https://2021.wordpress.net/'.
     *     @type string $screenshot_url Screenshot URL, e.g. 'https://wordpress.org/themes/twentytwentyone/'.
     *     @type float  $rating         Rating score.
     *     @type int    $num_ratings    The number of ratings.
     *     @type string $homepage       Theme homepage, e.g. 'https://wordpress.org/themes/twentytwentyone/'.
     *     @type string $description    Theme description.
     *     @type string $download_link  Theme ZIP download URL.
     * }
     * @phpstan-param object{
     *   name?: string,
     *   slug?: string,
     *   version?: string,
     *   author?: string,
     *   preview_url?: string,
     *   screenshot_url?: string,
     *   rating?: float,
     *   num_ratings?: int,
     *   homepage?: string,
     *   description?: string,
     *   download_link?: string,
     * } $theme
     */
    public function single_row($theme)
    {
    }
    /**
     * Prints the wrapper for the theme installer.
     */
    public function theme_installer()
    {
    }
    /**
     * Prints the wrapper for the theme installer with a provided theme's data.
     * Used to make the theme installer work for no-js.
     *
     * @param stdClass $theme A WordPress.org Theme API object.
     */
    public function theme_installer_single($theme)
    {
    }
    /**
     * Prints the info for a theme (to be used in the theme installer modal).
     *
     * @global array $themes_allowedtags
     *
     * @param stdClass $theme A WordPress.org Theme API object.
     */
    public function install_theme_info($theme)
    {
    }
    /**
     * Send required variables to JavaScript land
     *
     * @since 3.4.0
     *
     * @global string $tab  Current tab within Themes->Install screen
     * @global string $type Type of search.
     *
     * @param array $extra_args Unused.
     */
    public function _js_vars($extra_args = array())
    {
    }
}