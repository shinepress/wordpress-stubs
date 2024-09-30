<?php


/**
 * Core class used to set, validate, and clear cookies that identify a Recovery Mode session.
 *
 * @since 5.2.0
 */
#[\AllowDynamicProperties]
final class WP_Recovery_Mode_Cookie_Service
{
    /**
     * Checks whether the recovery mode cookie is set.
     *
     * @since 5.2.0
     *
     * @return bool True if the cookie is set, false otherwise.
     */
    public function is_cookie_set()
    {
    }
    /**
     * Sets the recovery mode cookie.
     *
     * This must be immediately followed by exiting the request.
     *
     * @since 5.2.0
     */
    public function set_cookie()
    {
    }
    /**
     * Clears the recovery mode cookie.
     *
     * @since 5.2.0
     */
    public function clear_cookie()
    {
    }
    /**
     * Validates the recovery mode cookie.
     *
     * @since 5.2.0
     *
     * @param string $cookie Optionally specify the cookie string.
     *                       If omitted, it will be retrieved from the super global.
     * @return true|WP_Error True on success, error object on failure.
     */
    public function validate_cookie($cookie = '')
    {
    }
    /**
     * Gets the session identifier from the cookie.
     *
     * The cookie should be validated before calling this API.
     *
     * @since 5.2.0
     *
     * @param string $cookie Optionally specify the cookie string.
     *                       If omitted, it will be retrieved from the super global.
     * @return string|WP_Error Session ID on success, or error object on failure.
     */
    public function get_session_id_from_cookie($cookie = '')
    {
    }
}