<?php


/**
 * Upgrader API: Plugin_Installer_Skin class
 *
 * @package WordPress
 * @subpackage Upgrader
 * @since 4.6.0
 */
/**
 * Plugin Installer Skin for WordPress Plugin Installer.
 *
 * @since 2.8.0
 * @since 4.6.0 Moved to its own file from wp-admin/includes/class-wp-upgrader-skins.php.
 *
 * @see WP_Upgrader_Skin
 */
class Plugin_Installer_Skin extends \WP_Upgrader_Skin
{
    public $api;
    public $type;
    /**
     *
     * @param array $args
     */
    public function __construct($args = array())
    {
    }
    /**
     * @access public
     */
    public function before()
    {
    }
    /**
     * @access public
     */
    public function after()
    {
    }
}