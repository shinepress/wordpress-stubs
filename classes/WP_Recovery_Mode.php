<?php


/**
 * Error Protection API: WP_Recovery_Mode class
 *
 * @package WordPress
 * @since   5.2.0
 */
/**
 * Core class used to implement Recovery Mode.
 *
 * @since 5.2.0
 */
class WP_Recovery_Mode
{
    const EXIT_ACTION = 'exit_recovery_mode';
    /**
     * WP_Recovery_Mode constructor.
     *
     * @since 5.2.0
     */
    public function __construct()
    {
    }
    /**
     * Initialize recovery mode for the current request.
     *
     * @since 5.2.0
     * @phpstan-return void
     */
    public function initialize()
    {
    }
    /**
     * Checks whether recovery mode is active.
     *
     * This will not change after recovery mode has been initialized. {@see WP_Recovery_Mode::run()}.
     *
     * @since 5.2.0
     *
     * @return bool True if recovery mode is active, false otherwise.
     */
    public function is_active()
    {
    }
    /**
     * Gets the recovery mode session ID.
     *
     * @since 5.2.0
     *
     * @return string The session ID if recovery mode is active, empty string otherwise.
     */
    public function get_session_id()
    {
    }
    /**
     * Checks whether recovery mode has been initialized.
     *
     * Recovery mode should not be used until this point. Initialization happens immediately before loading plugins.
     *
     * @since 5.2.0
     *
     * @return bool
     */
    public function is_initialized()
    {
    }
    /**
     * Handles a fatal error occurring.
     *
     * The calling API should immediately die() after calling this function.
     *
     * @since 5.2.0
     *
     * @param array $error Error details from {@see error_get_last()}
     * @return true|WP_Error True if the error was handled and headers have already been sent.
     *                       Or the request will exit to try and catch multiple errors at once.
     *                       WP_Error if an error occurred preventing it from being handled.
     */
    public function handle_error(array $error)
    {
    }
    /**
     * Ends the current recovery mode session.
     *
     * @since 5.2.0
     *
     * @return bool True on success, false on failure.
     */
    public function exit_recovery_mode()
    {
    }
    /**
     * Handles a request to exit Recovery Mode.
     *
     * @since 5.2.0
     * @phpstan-return void
     */
    public function handle_exit_recovery_mode()
    {
    }
    /**
     * Cleans any recovery mode keys that have expired according to the link TTL.
     *
     * Executes on a daily cron schedule.
     *
     * @since 5.2.0
     */
    public function clean_expired_keys()
    {
    }
    /**
     * Handles checking for the recovery mode cookie and validating it.
     *
     * @since 5.2.0
     */
    protected function handle_cookie()
    {
    }
    /**
     * Gets the rate limit between sending new recovery mode email links.
     *
     * @since 5.2.0
     *
     * @return int Rate limit in seconds.
     */
    protected function get_email_rate_limit()
    {
    }
    /**
     * Gets the number of seconds the recovery mode link is valid for.
     *
     * @since 5.2.0
     *
     * @return int Interval in seconds.
     */
    protected function get_link_ttl()
    {
    }
    /**
     * Gets the extension that the error occurred in.
     *
     * @since 5.2.0
     *
     * @global array $wp_theme_directories
     *
     * @param array  $error Error that was triggered.
     *
     * @return array|false {
     *      @type string  $slug  The extension slug. This is the plugin or theme's directory.
     *      @type string  $type  The extension type. Either 'plugin' or 'theme'.
     * }
     */
    protected function get_extension_for_error($error)
    {
    }
    /**
     * Checks whether the given extension a network activated plugin.
     *
     * @since 5.2.0
     *
     * @param array $extension Extension data.
     * @return bool True if network plugin, false otherwise.
     */
    protected function is_network_plugin($extension)
    {
    }
    /**
     * Stores the given error so that the extension causing it is paused.
     *
     * @since 5.2.0
     *
     * @param array $error Error that was triggered.
     * @return bool True if the error was stored successfully, false otherwise.
     */
    protected function store_error($error)
    {
    }
    /**
     * Redirects the current request to allow recovering multiple errors in one go.
     *
     * The redirection will only happen when on a protected endpoint.
     *
     * It must be ensured that this method is only called when an error actually occurred and will not occur on the
     * next request again. Otherwise it will create a redirect loop.
     *
     * @since 5.2.0
     * @phpstan-return never
     */
    protected function redirect_protected()
    {
    }
}