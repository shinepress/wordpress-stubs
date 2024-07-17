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
    /**
     * Holds the plugin slug in the Plugin Directory.
     *
     * @since 2.8.0
     *
     * @var string
     */
    public $plugin = '';
    /**
     * Whether the plugin is active.
     *
     * @since 2.8.0
     *
     * @var bool
     */
    public $plugin_active = \false;
    /**
     * Whether the plugin is active for the entire network.
     *
     * @since 2.8.0
     *
     * @var bool
     */
    public $plugin_network_active = \false;
    /**
     * Constructor.
     *
     * Sets up the plugin upgrader skin.
     *
     * @since 2.8.0
     *
     * @param array $args Optional. The plugin upgrader skin arguments to
     *                    override default options. Default empty array.
     */
    public function __construct($args = array())
    {
    }
    /**
     * Performs an action following a single plugin update.
     *
     * @since 2.8.0
     */
    public function after()
    {
    }
}