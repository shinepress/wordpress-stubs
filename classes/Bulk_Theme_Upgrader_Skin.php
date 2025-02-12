<?php


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
     * @since 3.0.0
     * @var WP_Theme|false The theme's info object, or false.
     */
    public $theme_info = \false;
    /**
     * Sets up the strings used in the update process.
     *
     * @since 3.0.0
     */
    public function add_strings()
    {
    }
    /**
     * Performs an action before a bulk theme update.
     *
     * @since 3.0.0
     *
     * @param string $title
     */
    public function before($title = '')
    {
    }
    /**
     * Performs an action following a bulk theme update.
     *
     * @since 3.0.0
     *
     * @param string $title
     */
    public function after($title = '')
    {
    }
    /**
     * Displays the footer following the bulk update process.
     *
     * @since 3.0.0
     */
    public function bulk_footer()
    {
    }
}