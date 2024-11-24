<?php


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
    /**
     * Whether the bulk update process has started.
     *
     * @since 3.0.0
     * @var bool
     */
    public $in_loop = \false;
    /**
     * Stores an error message about the update.
     *
     * @since 3.0.0
     * @var string|false
     */
    public $error = \false;
    /**
     * Constructor.
     *
     * Sets up the generic skin for the Bulk Upgrader classes.
     *
     * @since 3.0.0
     *
     * @param array $args
     */
    public function __construct($args = array())
    {
    }
    /**
     * Sets up the strings used in the update process.
     *
     * @since 3.0.0
     */
    public function add_strings()
    {
    }
    /**
     * Displays a message about the update.
     *
     * @since 3.0.0
     * @since 5.9.0 Renamed `$string` (a PHP reserved keyword) to `$feedback` for PHP 8 named parameter support.
     *
     * @param string $feedback Message data.
     * @param mixed  ...$args  Optional text replacements.
     * @phpstan-return void
     */
    public function feedback($feedback, ...$args)
    {
    }
    /**
     * Displays the header before the update process.
     *
     * @since 3.0.0
     */
    public function header()
    {
    }
    /**
     * Displays the footer following the update process.
     *
     * @since 3.0.0
     */
    public function footer()
    {
    }
    /**
     * Displays an error message about the update.
     *
     * @since 3.0.0
     * @since 5.9.0 Renamed `$error` to `$errors` for PHP 8 named parameter support.
     *
     * @param string|WP_Error $errors Errors.
     */
    public function error($errors)
    {
    }
    /**
     * Displays the header before the bulk update process.
     *
     * @since 3.0.0
     */
    public function bulk_header()
    {
    }
    /**
     * Displays the footer following the bulk update process.
     *
     * @since 3.0.0
     */
    public function bulk_footer()
    {
    }
    /**
     * Performs an action before a bulk update.
     *
     * @since 3.0.0
     *
     * @param string $title
     */
    public function before($title = '')
    {
    }
    /**
     * Performs an action following a bulk update.
     *
     * @since 3.0.0
     *
     * @param string $title
     */
    public function after($title = '')
    {
    }
    /**
     * Resets the properties used in the update process.
     *
     * @since 3.0.0
     */
    public function reset()
    {
    }
    /**
     * Flushes all output buffers.
     *
     * @since 3.0.0
     */
    public function flush_output()
    {
    }
}