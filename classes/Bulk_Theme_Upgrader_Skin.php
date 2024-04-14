<?php


/**
 * Upgrader API: Bulk_Plugin_Upgrader_Skin class
 *
 * @package WordPress
 * @subpackage Upgrader
 * @since 4.6.0
 */
/**
 * Bulk Theme Upgrader Skin for WordPress Theme Upgrades.
 *
 * @since 3.0.0
 * @since 4.6.0 Moved to its own file from wp-admin/includes/class-wp-upgrader-skins.php.
 *
 * @see Bulk_Upgrader_Skin
 */
class Bulk_Theme_Upgrader_Skin extends \Bulk_Upgrader_Skin
{
    /**
     * Theme info.
     *
     * The Theme_Upgrader::bulk_upgrade() method will fill this in
     * with info retrieved from the Theme_Upgrader::theme_info() method,
     * which in turn calls the wp_get_theme() function.
     *
     * @var WP_Theme|false The theme's info object, or false.
     */
    public $theme_info = \false;
    public function add_strings()
    {
    }
    /**
     * @param string $title
     */
    public function before($title = '')
    {
    }
    /**
     * @param string $title
     */
    public function after($title = '')
    {
    }
    /**
     */
    public function bulk_footer()
    {
    }
}