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
    public $url;
    public $overwrite;
    /**
     * @param array $args
     */
    public function __construct($args = array())
    {
    }
    /**
     * Action to perform before installing a plugin.
     *
     * @since 2.8.0
     */
    public function before()
    {
    }
    /**
     * Hides the `process_failed` error when updating a plugin by uploading a zip file.
     *
     * @since 5.5.0
     *
     * @param WP_Error $wp_error WP_Error object.
     * @return bool
     */
    public function hide_process_failed($wp_error)
    {
    }
    /**
     * Action to perform following a plugin install.
     *
     * @since 2.8.0
     * @phpstan-return void
     */
    public function after()
    {
    }
}