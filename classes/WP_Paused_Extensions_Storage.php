<?php


/**
 * Error Protection API: WP_Paused_Extensions_Storage class
 *
 * @package WordPress
 * @since 5.2.0
 */
/**
 * Core class used for storing paused extensions.
 *
 * @since 5.2.0
 */
#[\AllowDynamicProperties]
class WP_Paused_Extensions_Storage
{
    /**
     * Type of extension. Used to key extension storage.
     *
     * @since 5.2.0
     * @var string
     */
    protected $type;
    /**
     * Constructor.
     *
     * @since 5.2.0
     *
     * @param string $extension_type Extension type. Either 'plugin' or 'theme'.
     * @phpstan-param 'plugin'|'theme' $extension_type
     */
    public function __construct($extension_type)
    {
    }
    /**
     * Records an extension error.
     *
     * Only one error is stored per extension, with subsequent errors for the same extension overriding the
     * previously stored error.
     *
     * @since 5.2.0
     *
     * @param string $extension Plugin or theme directory name.
     * @param array  $error     {
     *     Error information returned by `error_get_last()`.
     *
     *     @type int    $type    The error type.
     *     @type string $file    The name of the file in which the error occurred.
     *     @type int    $line    The line number in which the error occurred.
     *     @type string $message The error message.
     * }
     * @return bool True on success, false on failure.
     * @phpstan-param array{
     *   type?: int,
     *   file?: string,
     *   line?: int,
     *   message?: string,
     * } $error
     */
    public function set($extension, $error)
    {
    }
    /**
     * Forgets a previously recorded extension error.
     *
     * @since 5.2.0
     *
     * @param string $extension Plugin or theme directory name.
     * @return bool True on success, false on failure.
     */
    public function delete($extension)
    {
    }
    /**
     * Gets the error for an extension, if paused.
     *
     * @since 5.2.0
     *
     * @param string $extension Plugin or theme directory name.
     * @return array|null Error that is stored, or null if the extension is not paused.
     */
    public function get($extension)
    {
    }
    /**
     * Gets the paused extensions with their errors.
     *
     * @since 5.2.0
     *
     * @return array {
     *     Associative array of errors keyed by extension slug.
     *
     *     @type array ...$0 Error information returned by `error_get_last()`.
     * }
     * @phpstan-return array<int|string, array>
     */
    public function get_all()
    {
    }
    /**
     * Remove all paused extensions.
     *
     * @since 5.2.0
     *
     * @return bool
     */
    public function delete_all()
    {
    }
    /**
     * Checks whether the underlying API to store paused extensions is loaded.
     *
     * @since 5.2.0
     *
     * @return bool True if the API is loaded, false otherwise.
     */
    protected function is_api_loaded()
    {
    }
    /**
     * Get the option name for storing paused extensions.
     *
     * @since 5.2.0
     *
     * @return string
     */
    protected function get_option_name()
    {
    }
}