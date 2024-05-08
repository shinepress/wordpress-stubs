<?php


/**
 * Feed API: WP_SimplePie_File class
 *
 * @package WordPress
 * @subpackage Feed
 * @since 4.7.0
 */
/**
 * Core class for fetching remote files and reading local files with SimplePie.
 *
 * This uses Core's HTTP API to make requests, which gives plugins the ability
 * to hook into the process.
 *
 * @since 2.8.0
 */
#[\AllowDynamicProperties]
class WP_SimplePie_File extends \SimplePie_File
{
    /**
     * Timeout.
     *
     * @var int How long the connection should stay open in seconds.
     */
    public $timeout = 10;
    /**
     * Constructor.
     *
     * @since 2.8.0
     * @since 3.2.0 Updated to use a PHP5 constructor.
     * @since 5.6.1 Multiple headers are concatenated into a comma-separated string,
     *              rather than remaining an array.
     *
     * @param string       $url             Remote file URL.
     * @param int          $timeout         Optional. How long the connection should stay open in seconds.
     *                                      Default 10.
     * @param int          $redirects       Optional. The number of allowed redirects. Default 5.
     * @param string|array $headers         Optional. Array or string of headers to send with the request.
     *                                      Default null.
     * @param string       $useragent       Optional. User-agent value sent. Default null.
     * @param bool         $force_fsockopen Optional. Whether to force opening internet or unix domain socket
     *                                      connection or not. Default false.
     */
    public function __construct($url, $timeout = 10, $redirects = 5, $headers = \null, $useragent = \null, $force_fsockopen = \false)
    {
    }
}