<?php


/**
 * Upgrader API: Automatic_Upgrader_Skin class
 *
 * @package WordPress
 * @subpackage Upgrader
 * @since 4.6.0
 */
/**
 * Upgrader Skin for Automatic WordPress Upgrades.
 *
 * This skin is designed to be used when no output is intended, all output
 * is captured and stored for the caller to process and log/email/discard.
 *
 * @since 3.7.0
 * @since 4.6.0 Moved to its own file from wp-admin/includes/class-wp-upgrader-skins.php.
 *
 * @see Bulk_Upgrader_Skin
 */
class Automatic_Upgrader_Skin extends \WP_Upgrader_Skin
{
    protected $messages = array();
    /**
     * Determines whether the upgrader needs FTP/SSH details in order to connect
     * to the filesystem.
     *
     * @since 3.7.0
     * @since 4.6.0 The `$context` parameter default changed from `false` to an empty string.
     *
     * @see request_filesystem_credentials()
     *
     * @param bool|WP_Error $error                        Optional. Whether the current request has failed to connect,
     *                                                    or an error object. Default false.
     * @param string        $context                      Optional. Full path to the directory that is tested
     *                                                    for being writable. Default empty.
     * @param bool          $allow_relaxed_file_ownership Optional. Whether to allow Group/World writable. Default false.
     * @return bool True on success, false on failure.
     */
    public function request_filesystem_credentials($error = \false, $context = '', $allow_relaxed_file_ownership = \false)
    {
    }
    /**
     * Retrieves the upgrade messages.
     *
     * @since 3.7.0
     *
     * @return string[] Messages during an upgrade.
     */
    public function get_upgrade_messages()
    {
    }
    /**
     * Stores a message about the upgrade.
     *
     * @since 3.7.0
     *
     * @param string|array|WP_Error $data    Message data.
     * @param mixed                 ...$args Optional text replacements.
     */
    public function feedback($data, ...$args)
    {
    }
    /**
     * Creates a new output buffer.
     *
     * @since 3.7.0
     */
    public function header()
    {
    }
    /**
     * Retrieves the buffered content, deletes the buffer, and processes the output.
     *
     * @since 3.7.0
     */
    public function footer()
    {
    }
}