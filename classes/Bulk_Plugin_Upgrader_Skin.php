<?php


/**
 * Upgrader API: Bulk_Plugin_Upgrader_Skin class
 *
 * @package WordPress
 * @subpackage Upgrader
 * @since 4.6.0
 */
/**
 * Bulk Plugin Upgrader Skin for WordPress Plugin Upgrades.
 *
 * @since 3.0.0
 * @since 4.6.0 Moved to its own file from wp-admin/includes/class-wp-upgrader-skins.php.
 *
 * @see Bulk_Upgrader_Skin
 */
class Bulk_Plugin_Upgrader_Skin extends \Bulk_Upgrader_Skin
{
    /**
     * Plugin info.
     *
     * The Plugin_Upgrader::bulk_upgrade() method will fill this in
     * with info retrieved from the get_plugin_data() function.
     *
     * @var array Plugin data. Values will be empty if not supplied by the plugin.
     */
    public $plugin_info = array();
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