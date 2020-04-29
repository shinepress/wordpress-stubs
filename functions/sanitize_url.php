<?php


/**
 * Performs esc_url() for database or redirect usage.
 *
 * @since 2.3.1
 * @deprecated 2.8.0 Use esc_url_raw()
 * @see esc_url_raw()
 *
 * @param string $url The URL to be cleaned.
 * @param array $protocols An array of acceptable protocols.
 * @return string The cleaned URL.
 */
function sanitize_url($url, $protocols = \null)
{
}