<?php


/**
 * Upgrader API: Theme_Installer_Skin class
 *
 * @package WordPress
 * @subpackage Upgrader
 * @since 4.6.0
 */
/**
 * Theme Installer Skin for the WordPress Theme Installer.
 *
 * @since 2.8.0
 * @since 4.6.0 Moved to its own file from wp-admin/includes/class-wp-upgrader-skins.php.
 *
 * @see WP_Upgrader_Skin
 */
class Theme_Installer_Skin extends \WP_Upgrader_Skin
{
    public $api;
    public $type;
    public $url;
    public $overwrite;
    private $is_downgrading = \false;
    /**
     * @param array $args
     */
    public function __construct($args = array())
    {
    }
    /**
     * Action to perform before installing a theme.
     *
     * @since 2.8.0
     */
    public function before()
    {
    }
    /**
     * Hides the `process_failed` error when updating a theme by uploading a zip file.
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
     * Action to perform following a single theme install.
     *
     * @since 2.8.0
     */
    public function after()
    {
    }
    /**
     * Check if the theme can be overwritten and output the HTML for overwriting a theme on upload.
     *
     * @since 5.5.0
     *
     * @return bool Whether the theme can be overwritten and HTML was outputted.
     */
    private function do_overwrite()
    {
    }
}