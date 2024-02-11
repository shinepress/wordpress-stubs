<?php


/**
 * HTTP API: WP_Http_Curl class
 *
 * @package WordPress
 * @subpackage HTTP
 * @since 4.4.0
 */
/**
 * Core class used to integrate Curl as an HTTP transport.
 *
 * HTTP request method uses Curl extension to retrieve the url.
 *
 * Requires the Curl extension to be installed.
 *
 * @since 2.7.0
 * @deprecated 6.4.0 Use WP_Http
 * @see WP_Http
 */
#[\AllowDynamicProperties]
class WP_Http_Curl
{
    /**
     * Send a HTTP request to a URI using cURL extension.
     *
     * @since 2.7.0
     *
     * @param string       $url  The request URL.
     * @param string|array $args Optional. Override the defaults.
     * @return array|WP_Error Array containing 'headers', 'body', 'response', 'cookies', 'filename'. A WP_Error instance upon error
     */
    public function request($url, $args = array())
    {
    }
    /**
     * Determines whether this class can be used for retrieving a URL.
     *
     * @since 2.7.0
     *
     * @param array $args Optional. Array of request arguments. Default empty array.
     * @return bool False means this class can not be used, true means it can.
     */
    public static function test($args = array())
    {
    }
}