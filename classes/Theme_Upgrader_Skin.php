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
    /**
     * Holds the theme slug in the Theme Directory.
     *
     * @since 2.8.0
     *
     * @var string
     */
    public $theme = '';
    /**
     * Constructor.
     *
     * Sets up the theme upgrader skin.
     *
     * @since 2.8.0
     *
     * @param array $args Optional. The theme upgrader skin arguments to
     *                    override default options. Default empty array.
     */
    public function __construct($args = array())
    {
    }
    /**
     * Action to perform following a single theme update.
     *
     * @since 2.8.0
     */
    public function after()
    {
    }
}