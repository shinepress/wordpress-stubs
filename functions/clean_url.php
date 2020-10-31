<?php


/**
 * Checks and cleans a URL.
 *
 * A number of characters are removed from the URL. If the URL is for displaying
 * (the default behaviour) ampersands are also replaced. The 'clean_url' filter
 * is applied to the returned cleaned URL.
 *
 * @since 1.2.0
 * @deprecated 3.0.0 Use esc_url()
 * @see esc_url()
 *
 * @param string $url The URL to be cleaned.
 * @param array $protocols Optional. An array of acceptable protocols.
 * @param string $context Optional. How the URL will be used. Default is 'display'.
 * @return string The cleaned $url after the {@see 'clean_url'} filter is applied.
 */
function clean_url($url, $protocols = \null, $context = 'display')
{
}