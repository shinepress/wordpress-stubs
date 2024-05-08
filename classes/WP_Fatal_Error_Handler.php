<?php


/**
 * Error Protection API: WP_Fatal_Error_Handler class
 *
 * @package WordPress
 * @since 5.2.0
 */
/**
 * Core class used as the default shutdown handler for fatal errors.
 *
 * A drop-in 'fatal-error-handler.php' can be used to override the instance of this class and use a custom
 * implementation for the fatal error handler that WordPress registers. The custom class should extend this class and
 * can override its methods individually as necessary. The file must return the instance of the class that should be
 * registered.
 *
 * @since 5.2.0
 */
#[\AllowDynamicProperties]
class WP_Fatal_Error_Handler
{
    /**
     * Runs the shutdown handler.
     *
     * This method is registered via `register_shutdown_function()`.
     *
     * @since 5.2.0
     *
     * @global WP_Locale $wp_locale WordPress date and time locale object.
     * @phpstan-return void
     */
    public function handle()
    {
    }
    /**
     * Detects the error causing the crash if it should be handled.
     *
     * @since 5.2.0
     *
     * @return array|null Error information returned by `error_get_last()`, or null
     *                    if none was recorded or the error should not be handled.
     */
    protected function detect_error()
    {
    }
    /**
     * Determines whether we are dealing with an error that WordPress should handle
     * in order to protect the admin backend against WSODs.
     *
     * @since 5.2.0
     *
     * @param array $error Error information retrieved from `error_get_last()`.
     * @return bool Whether WordPress should handle this error.
     */
    protected function should_handle_error($error)
    {
    }
    /**
     * Displays the PHP error template and sends the HTTP status code, typically 500.
     *
     * A drop-in 'php-error.php' can be used as a custom template. This drop-in should control the HTTP status code and
     * print the HTML markup indicating that a PHP error occurred. Note that this drop-in may potentially be executed
     * very early in the WordPress bootstrap process, so any core functions used that are not part of
     * `wp-includes/load.php` should be checked for before being called.
     *
     * If no such drop-in is available, this will call {@see WP_Fatal_Error_Handler::display_default_error_template()}.
     *
     * @since 5.2.0
     * @since 5.3.0 The `$handled` parameter was added.
     *
     * @param array         $error   Error information retrieved from `error_get_last()`.
     * @param true|WP_Error $handled Whether Recovery Mode handled the fatal error.
     * @phpstan-return void
     */
    protected function display_error_template($error, $handled)
    {
    }
    /**
     * Displays the default PHP error template.
     *
     * This method is called conditionally if no 'php-error.php' drop-in is available.
     *
     * It calls {@see wp_die()} with a message indicating that the site is experiencing technical difficulties and a
     * login link to the admin backend. The {@see 'wp_php_error_message'} and {@see 'wp_php_error_args'} filters can
     * be used to modify these parameters.
     *
     * @since 5.2.0
     * @since 5.3.0 The `$handled` parameter was added.
     *
     * @param array         $error   Error information retrieved from `error_get_last()`.
     * @param true|WP_Error $handled Whether Recovery Mode handled the fatal error.
     */
    protected function display_default_error_template($error, $handled)
    {
    }
}