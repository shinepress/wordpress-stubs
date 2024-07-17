<?php


/**
 * Performs esc_url() for database or redirect usage.
 *
 * This function is an alias for esc_url_raw().
 *
 * @since 2.3.1
 * @since 2.8.0 Deprecated in favor of esc_url_raw().
 * @since 5.9.0 Restored (un-deprecated).
 *
 * @see esc_url_raw()
 *
 * @param string   $url       The URL to be cleaned.
 * @param string[] $protocols Optional. An array of acceptable protocols.
 *                            Defaults to return value of wp_allowed_protocols().
 * @return string The cleaned URL after esc_url() is run with the 'db' context.
 */
function sanitize_url($url, $protocols = \null)
{
}