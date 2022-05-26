<?php


/**
 * Error Protection API: WP_Recovery_Mode_Email_Link class
 *
 * @package WordPress
 * @since 5.2.0
 */
/**
 * Core class used to send an email with a link to begin Recovery Mode.
 *
 * @since 5.2.0
 */
final class WP_Recovery_Mode_Email_Service
{
    const RATE_LIMIT_OPTION = 'recovery_mode_email_last_sent';
    /**
     * Service to generate recovery mode URLs.
     *
     * @since 5.2.0
     * @var WP_Recovery_Mode_Link_Service
     */
    private $link_service;
    /**
     * WP_Recovery_Mode_Email_Service constructor.
     *
     * @since 5.2.0
     *
     * @param WP_Recovery_Mode_Link_Service $link_service
     */
    public function __construct(\WP_Recovery_Mode_Link_Service $link_service)
    {
    }
    /**
     * Sends the recovery mode email if the rate limit has not been sent.
     *
     * @since 5.2.0
     *
     * @param int   $rate_limit Number of seconds before another email can be sent.
     * @param array $error      Error details from `error_get_last()`.
     * @param array $extension {
     *     The extension that caused the error.
     *
     *     @type string $slug The extension slug. The plugin or theme's directory.
     *     @type string $type The extension type. Either 'plugin' or 'theme'.
     * }
     * @return true|WP_Error True if email sent, WP_Error otherwise.
     * @phpstan-param array{
     *   slug?: string,
     *   type?: string,
     * } $extension
     */
    public function maybe_send_recovery_mode_email($rate_limit, $error, $extension)
    {
    }
    /**
     * Clears the rate limit, allowing a new recovery mode email to be sent immediately.
     *
     * @since 5.2.0
     *
     * @return bool True on success, false on failure.
     */
    public function clear_rate_limit()
    {
    }
    /**
     * Sends the Recovery Mode email to the site admin email address.
     *
     * @since 5.2.0
     *
     * @param int   $rate_limit Number of seconds before another email can be sent.
     * @param array $error      Error details from `error_get_last()`.
     * @param array $extension {
     *     The extension that caused the error.
     *
     *     @type string $slug The extension slug. The directory of the plugin or theme.
     *     @type string $type The extension type. Either 'plugin' or 'theme'.
     * }
     * @return bool Whether the email was sent successfully.
     * @phpstan-param array{
     *   slug?: string,
     *   type?: string,
     * } $extension
     */
    private function send_recovery_mode_email($rate_limit, $error, $extension)
    {
    }
    /**
     * Gets the email address to send the recovery mode link to.
     *
     * @since 5.2.0
     *
     * @return string Email address to send recovery mode link to.
     */
    private function get_recovery_mode_email_address()
    {
    }
    /**
     * Gets the description indicating the possible cause for the error.
     *
     * @since 5.2.0
     *
     * @param array $extension {
     *     The extension that caused the error.
     *
     *     @type string $slug The extension slug. The directory of the plugin or theme.
     *     @type string $type The extension type. Either 'plugin' or 'theme'.
     * }
     * @return string Message about which extension caused the error.
     * @phpstan-param array{
     *   slug?: string,
     *   type?: string,
     * } $extension
     */
    private function get_cause($extension)
    {
    }
    /**
     * Return the details for a single plugin based on the extension data from an error.
     *
     * @since 5.3.0
     *
     * @param array $extension {
     *     The extension that caused the error.
     *
     *     @type string $slug The extension slug. The directory of the plugin or theme.
     *     @type string $type The extension type. Either 'plugin' or 'theme'.
     * }
     * @return array|false A plugin array {@see get_plugins()} or `false` if no plugin was found.
     * @phpstan-param array{
     *   slug?: string,
     *   type?: string,
     * } $extension
     */
    private function get_plugin($extension)
    {
    }
    /**
     * Return debug information in an easy to manipulate format.
     *
     * @since 5.3.0
     *
     * @param array $extension {
     *     The extension that caused the error.
     *
     *     @type string $slug The extension slug. The directory of the plugin or theme.
     *     @type string $type The extension type. Either 'plugin' or 'theme'.
     * }
     * @return array An associative array of debug information.
     * @phpstan-param array{
     *   slug?: string,
     *   type?: string,
     * } $extension
     */
    private function get_debug($extension)
    {
    }
}