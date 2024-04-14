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
    public $theme_info = array();
    // Theme_Upgrader::bulk() will fill this in.
    public function add_strings()
    {
    }
    /**
     *
     * @param string $title
     */
    public function before($title = '')
    {
    }
    /**
     *
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