<?php


/**
 * Performs esc_url() for database usage.
 *
 * @since 2.8.0
 *
 * @param string   $url       The URL to be cleaned.
 * @param string[] $protocols Optional. An array of acceptable protocols.
 *                            Defaults to return value of wp_allowed_protocols().
 * @return string The cleaned URL.
 */
function esc_url_raw($url, $protocols = \null)
{
}