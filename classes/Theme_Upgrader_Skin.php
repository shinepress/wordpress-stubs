<?php


/**
 * Upgrader API: Theme_Upgrader_Skin class
 *
 * @package WordPress
 * @subpackage Upgrader
 * @since 4.6.0
 */
/**
 * Theme Upgrader Skin for WordPress Theme Upgrades.
 *
 * @since 2.8.0
 * @since 4.6.0 Moved to its own file from wp-admin/includes/class-wp-upgrader-skins.php.
 *
 * @see WP_Upgrader_Skin
 */
class Theme_Upgrader_Skin extends \WP_Upgrader_Skin
{
    public $theme = '';
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
    public function after()
    {
    }
}