<?php


/**
 * Retrieve a specific component from a parsed URL array.
 *
 * @internal
 *
 * @since 4.7.0
 * @access private
 *
 * @link https://www.php.net/manual/en/function.parse-url.php
 *
 * @param array|false $url_parts The parsed URL. Can be false if the URL failed to parse.
 * @param int         $component The specific component to retrieve. Use one of the PHP
 *                               predefined constants to specify which one.
 *                               Defaults to -1 (= return all parts as an array).
 * @return mixed False on parse failure; Array of URL components on success;
 *               When a specific component has been requested: null if the component
 *               doesn't exist in the given URL; a string or - in the case of
 *               PHP_URL_PORT - integer when it does. See parse_url()'s return values.
 */
function _get_component_from_parsed_url_array($url_parts, $component = -1)
{
}