<?php


/**
 * Upgrader API: Plugin_Upgrader_Skin class
 *
 * @package WordPress
 * @subpackage Upgrader
 * @since 4.6.0
 */
/**
 * Plugin Upgrader Skin for WordPress Plugin Upgrades.
 *
 * @since 2.8.0
 * @since 4.6.0 Moved to its own file from wp-admin/includes/class-wp-upgrader-skins.php.
 *
 * @see WP_Upgrader_Skin
 */
class Plugin_Upgrader_Skin extends \WP_Upgrader_Skin
{
    public $plugin = '';
    public $plugin_active = \false;
    public $plugin_network_active = \false;
    /**
     *
     * @param array $args
     */
    public function __construct($args = array())
    {
    }
    /**
     */
    public function after()
    {
    }
}