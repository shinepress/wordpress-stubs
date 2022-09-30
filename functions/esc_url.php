<?php


/**
 * Checks and cleans a URL.
 *
 * A number of characters are removed from the URL. If the URL is for displaying
 * (the default behaviour) ampersands are also replaced. The {@see 'clean_url'} filter
 * is applied to the returned cleaned URL.
 *
 * @since 2.8.0
 *
 * @param string   $url       The URL to be cleaned.
 * @param string[] $protocols Optional. An array of acceptable protocols.
 *                            Defaults to return value of wp_allowed_protocols()
 * @param string   $_context  Private. Use esc_url_raw() for database usage.
 * @return string The cleaned $url after the {@see 'clean_url'} filter is applied.
 */
function esc_url($url, $protocols = \null, $_context = 'display')
{
}