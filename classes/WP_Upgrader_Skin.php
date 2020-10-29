<?php


/**
 * Generated stub declarations for WordPress.
 * @see https://wordpress.org
 * @see https://github.com/php-stubs/wordpress-stubs
 */
/**
 * Upgrader API: WP_Upgrader_Skin class
 *
 * @package WordPress
 * @subpackage Upgrader
 * @since 4.6.0
 */
/**
 * Generic Skin for the WordPress Upgrader classes. This skin is designed to be extended for specific purposes.
 *
 * @since 2.8.0
 * @since 4.6.0 Moved to its own file from wp-admin/includes/class-wp-upgrader-skins.php.
 */
class WP_Upgrader_Skin
{
    public $upgrader;
    public $done_header = \false;
    public $done_footer = \false;
    /**
     * Holds the result of an upgrade.
     *
     * @since 2.8.0
     * @access public
     * @var string|bool|WP_Error
     */
    public $result = \false;
    public $options = array();
    /**
     *
     * @param array $args
     */
    public function __construct($args = array())
    {
    }
    /**
     * @param WP_Upgrader $upgrader
     */
    public function set_upgrader(&$upgrader)
    {
    }
    /**
     * @access public
     */
    public function add_strings()
    {
    }
    /**
     * Sets the result of an upgrade.
     *
     * @since 2.8.0
     * @access public
     *
     * @param string|bool|WP_Error $result The result of an upgrade.
     */
    public function set_result($result)
    {
    }
    /**
     * Displays a form to the user to request for their FTP/SSH details in order
     * to connect to the filesystem.
     *
     * @since 2.8.0
     * @since 4.6.0 The `$context` parameter default changed from `false` to an empty string.
     *
     * @see request_filesystem_credentials()
     *
     * @param bool   $error                        Optional. Whether the current request has failed to connect.
     *                                             Default false.
     * @param string $context                      Optional. Full path to the directory that is tested
     *                                             for being writable. Default empty.
     * @param bool   $allow_relaxed_file_ownership Optional. Whether to allow Group/World writable. Default false.
     * @return bool False on failure, true on success.
     */
    public function request_filesystem_credentials($error = \false, $context = '', $allow_relaxed_file_ownership = \false)
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
     * @param string|WP_Error $errors
     */
    public function error($errors)
    {
    }
    /**
     *
     * @param string $string
     */
    public function feedback($string)
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
    /**
     * Output JavaScript that calls function to decrement the update counts.
     *
     * @since 3.9.0
     *
     * @param string $type Type of update count to decrement. Likely values include 'plugin',
     *                     'theme', 'translation', etc.
     */
    protected function decrement_update_count($type)
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
}