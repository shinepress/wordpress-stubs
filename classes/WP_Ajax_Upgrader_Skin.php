<?php


/**
 * Upgrader API: WP_Ajax_Upgrader_Skin class
 *
 * @package WordPress
 * @subpackage Upgrader
 * @since 4.6.0
 */
/**
 * Upgrader Skin for Ajax WordPress upgrades.
 *
 * This skin is designed to be used for Ajax updates.
 *
 * @since 4.6.0
 *
 * @see Automatic_Upgrader_Skin
 */
class WP_Ajax_Upgrader_Skin extends \Automatic_Upgrader_Skin
{
    /**
     * Holds the WP_Error object.
     *
     * @since 4.6.0
     * @var null|WP_Error
     */
    protected $errors = \null;
    /**
     * Constructor.
     *
     * @since 4.6.0
     *
     * @param array $args Options for the upgrader, see WP_Upgrader_Skin::__construct().
     */
    public function __construct($args = array())
    {
    }
    /**
     * Retrieves the list of errors.
     *
     * @since 4.6.0
     *
     * @return WP_Error Errors during an upgrade.
     */
    public function get_errors()
    {
    }
    /**
     * Retrieves a string for error messages.
     *
     * @since 4.6.0
     *
     * @return string Error messages during an upgrade.
     */
    public function get_error_messages()
    {
    }
    /**
     * Stores a log entry for an error.
     *
     * @since 4.6.0
     * @since 5.3.0 Formalized the existing `...$args` parameter by adding it
     *              to the function signature.
     *
     * @param string|WP_Error $errors  Errors.
     * @param mixed           ...$args Optional text replacements.
     */
    public function error($errors, ...$args)
    {
    }
    /**
     * Stores a log entry.
     *
     * @since 4.6.0
     * @since 5.3.0 Formalized the existing `...$args` parameter by adding it
     *              to the function signature.
     *
     * @param string|array|WP_Error $data    Log entry data.
     * @param mixed                 ...$args Optional text replacements.
     */
    public function feedback($data, ...$args)
    {
    }
}