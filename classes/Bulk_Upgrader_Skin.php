<?php


/**
 * Upgrader API: Bulk_Upgrader_Skin class
 *
 * @package WordPress
 * @subpackage Upgrader
 * @since 4.6.0
 */
/**
 * Generic Bulk Upgrader Skin for WordPress Upgrades.
 *
 * @since 3.0.0
 * @since 4.6.0 Moved to its own file from wp-admin/includes/class-wp-upgrader-skins.php.
 *
 * @see WP_Upgrader_Skin
 */
class Bulk_Upgrader_Skin extends \WP_Upgrader_Skin
{
    public $in_loop = \false;
    /**
     * @var string|false
     */
    public $error = \false;
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
    public function add_strings()
    {
    }
    /**
     * @param string $string
     */
    public function feedback($string)
    {
    }
    /**
     * @access public
     */
    public function header()
    {
    }
    /**
     * @access public
     */
    public function footer()
    {
    }
    /**
     *
     * @param string|WP_Error $error
     */
    public function error($error)
    {
    }
    /**
     * @access public
     */
    public function bulk_header()
    {
    }
    /**
     * @access public
     */
    public function bulk_footer()
    {
    }
    /**
     *
     * @param string $title
     */
    public function before($title = '')
    {
    }
    /**
     *
     * @param string $title
     */
    public function after($title = '')
    {
    }
    /**
     * @access public
     */
    public function reset()
    {
    }
    /**
     * @access public
     */
    public function flush_output()
    {
    }
}