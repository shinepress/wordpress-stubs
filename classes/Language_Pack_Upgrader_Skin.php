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
     * @param array $args
     */
    public function __construct($args = array())
    {
    }
    /**
     */
    public function before()
    {
    }
    /**
     * @param string|WP_Error $error
     */
    public function error($error)
    {
    }
    /**
     */
    public function after()
    {
    }
    /**
     */
    public function bulk_footer()
    {
    }
}