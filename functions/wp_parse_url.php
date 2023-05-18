<?php


/**
 * A wrapper for PHP's parse_url() function that handles consistency in the return
 * values across PHP versions.
 *
 * PHP 5.4.7 expanded parse_url()'s ability to handle non-absolute url's, including
 * schemeless and relative url's with :// in the path. This function works around
 * those limitations providing a standard output on PHP 5.2~5.4+.
 *
 * Secondly, across various PHP versions, schemeless URLs starting containing a ":"
 * in the query are being handled inconsistently. This function works around those
 * differences as well.
 *
 * Error suppression is used as prior to PHP 5.3.3, an E_WARNING would be generated
 * when URL parsing failed.
 *
 * @since 4.4.0
 * @since 4.7.0 The `$component` parameter was added for parity with PHP's `parse_url()`.
 *
 * @link https://secure.php.net/manual/en/function.parse-url.php
 *
 * @param string $url       The URL to parse.
 * @param int    $component The specific component to retrieve. Use one of the PHP
 *                          predefined constants to specify which one.
 *                          Defaults to -1 (= return all parts as an array).
 * @return mixed False on parse failure; Array of URL components on success;
 *               When a specific component has been requested: null if the component
 *               doesn't exist in the given URL; a string or - in the case of
 *               PHP_URL_PORT - integer when it does. See parse_url()'s return values.
 */
function wp_parse_url($url, $component = -1)
{
}