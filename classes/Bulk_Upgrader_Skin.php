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
     * @param array $args
     */
    public function __construct($args = array())
    {
    }
    /**
     */
    public function add_strings()
    {
    }
    /**
     * @since 5.9.0 Renamed `$string` (a PHP reserved keyword) to `$feedback` for PHP 8 named parameter support.
     *
     * @param string $feedback Message data.
     * @param mixed  ...$args  Optional text replacements.
     */
    public function feedback($feedback, ...$args)
    {
    }
    /**
     */
    public function header()
    {
    }
    /**
     */
    public function footer()
    {
    }
    /**
     * @since 5.9.0 Renamed `$error` to `$errors` for PHP 8 named parameter support.
     *
     * @param string|WP_Error $errors Errors.
     */
    public function error($errors)
    {
    }
    /**
     */
    public function bulk_header()
    {
    }
    /**
     */
    public function bulk_footer()
    {
    }
    /**
     * @param string $title
     */
    public function before($title = '')
    {
    }
    /**
     * @param string $title
     */
    public function after($title = '')
    {
    }
    /**
     */
    public function reset()
    {
    }
    /**
     */
    public function flush_output()
    {
    }
}