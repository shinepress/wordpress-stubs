<?php


/**
 * Upgrader API: Language_Pack_Upgrader_Skin class
 *
 * @package WordPress
 * @subpackage Upgrader
 * @since 4.6.0
 */
/**
 * Translation Upgrader Skin for WordPress Translation Upgrades.
 *
 * @since 3.7.0
 * @since 4.6.0 Moved to its own file from wp-admin/includes/class-wp-upgrader-skins.php.
 *
 * @see WP_Upgrader_Skin
 */
class Language_Pack_Upgrader_Skin extends \WP_Upgrader_Skin
{
    public $language_update = \null;
    public $done_header = \false;
    public $done_footer = \false;
    public $display_footer_actions = \true;
    /**
     * Constructor.
     *
     * Sets up the language pack upgrader skin.
     *
     * @since 3.7.0
     *
     * @param array $args
     */
    public function __construct($args = array())
    {
    }
    /**
     * Performs an action before a language pack update.
     *
     * @since 3.7.0
     */
    public function before()
    {
    }
    /**
     * Displays an error message about the update.
     *
     * @since 3.7.0
     * @since 5.9.0 Renamed `$error` to `$errors` for PHP 8 named parameter support.
     *
     * @param string|WP_Error $errors Errors.
     */
    public function error($errors)
    {
    }
    /**
     * Performs an action following a language pack update.
     *
     * @since 3.7.0
     */
    public function after()
    {
    }
    /**
     * Displays the footer following the bulk update process.
     *
     * @since 3.7.0
     */
    public function bulk_footer()
    {
    }
}