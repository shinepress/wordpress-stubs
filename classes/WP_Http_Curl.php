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
 */
#[\AllowDynamicProperties]
class WP_Http_Curl
{
    /**
     * Temporary header storage for during requests.
     *
     * @since 3.2.0
     * @var string
     */
    private $headers = '';
    /**
     * Temporary body storage for during requests.
     *
     * @since 3.6.0
     * @var string
     */
    private $body = '';
    /**
     * The maximum amount of data to receive from the remote server.
     *
     * @since 3.6.0
     * @var int|false
     */
    private $max_body_length = \false;
    /**
     * The file resource used for streaming to file.
     *
     * @since 3.6.0
     * @var resource|false
     */
    private $stream_handle = \false;
    /**
     * The total bytes written in the current request.
     *
     * @since 4.1.0
     * @var int
     */
    private $bytes_written_total = 0;
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
     * Grabs the headers of the cURL request.
     *
     * Each header is sent individually to this callback, so we append to the `$header` property
     * for temporary storage
     *
     * @since 3.2.0
     *
     * @param resource $handle  cURL handle.
     * @param string   $headers cURL request headers.
     * @return int Length of the request headers.
     */
    private function stream_headers($handle, $headers)
    {
    }
    /**
     * Grabs the body of the cURL request.
     *
     * The contents of the document are passed in chunks, so we append to the `$body`
     * property for temporary storage. Returning a length shorter than the length of
     * `$data` passed in will cause cURL to abort the request with `CURLE_WRITE_ERROR`.
     *
     * @since 3.6.0
     *
     * @param resource $handle  cURL handle.
     * @param string   $data    cURL request body.
     * @return int Total bytes of data written.
     */
    private function stream_body($handle, $data)
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