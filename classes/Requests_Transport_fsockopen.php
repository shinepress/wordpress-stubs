<?php


/**
 * fsockopen HTTP transport
 *
 * @package Requests
 * @subpackage Transport
 */
/**
 * fsockopen HTTP transport
 *
 * @package Requests
 * @subpackage Transport
 */
class Requests_Transport_fsockopen implements \Requests_Transport
{
    /**
     * Second to microsecond conversion
     *
     * @var integer
     */
    const SECOND_IN_MICROSECONDS = 1000000;
    /**
     * Raw HTTP data
     *
     * @var string
     */
    public $headers = '';
    /**
     * Stream metadata
     *
     * @var array Associative array of properties, see {@see https://secure.php.net/stream_get_meta_data}
     */
    public $info;
    /**
     * What's the maximum number of bytes we should keep?
     *
     * @var int|bool Byte count, or false if no limit.
     */
    protected $max_bytes = \false;
    protected $connect_error = '';
    /**
     * Perform a request
     *
     * @throws Requests_Exception On failure to connect to socket (`fsockopenerror`)
     * @throws Requests_Exception On socket timeout (`timeout`)
     *
     * @param string $url URL to request
     * @param array $headers Associative array of request headers
     * @param string|array $data Data to send either as the POST body, or as parameters in the URL for a GET/HEAD
     * @param array $options Request options, see {@see Requests::response()} for documentation
     * @return string Raw HTTP result
     */
    public function request($url, $headers = array(), $data = array(), $options = array())
    {
    }
    /**
     * Send multiple requests simultaneously
     *
     * @param array $requests Request data (array of 'url', 'headers', 'data', 'options') as per {@see Requests_Transport::request}
     * @param array $options Global options, see {@see Requests::response()} for documentation
     * @return array Array of Requests_Response objects (may contain Requests_Exception or string responses as well)
     */
    public function request_multiple($requests, $options)
    {
    }
    /**
     * Retrieve the encodings we can accept
     *
     * @return string Accept-Encoding header value
     */
    protected static function accept_encoding()
    {
    }
    /**
     * Format a URL given GET data
     *
     * @param array $url_parts
     * @param array|object $data Data to build query using, see {@see https://secure.php.net/http_build_query}
     * @return string URL with data
     */
    protected static function format_get($url_parts, $data)
    {
    }
    /**
     * Error handler for stream_socket_client()
     *
     * @param int $errno Error number (e.g. E_WARNING)
     * @param string $errstr Error message
     */
    public function connect_error_handler($errno, $errstr)
    {
    }
    /**
     * Verify the certificate against common name and subject alternative names
     *
     * Unfortunately, PHP doesn't check the certificate against the alternative
     * names, leading things like 'https://www.github.com/' to be invalid.
     * Instead
     *
     * @see https://tools.ietf.org/html/rfc2818#section-3.1 RFC2818, Section 3.1
     *
     * @throws Requests_Exception On failure to connect via TLS (`fsockopen.ssl.connect_error`)
     * @throws Requests_Exception On not obtaining a match for the host (`fsockopen.ssl.no_match`)
     * @param string $host Host name to verify against
     * @param resource $context Stream context
     * @return bool
     */
    public function verify_certificate_from_context($host, $context)
    {
    }
    /**
     * Whether this transport is valid
     *
     * @codeCoverageIgnore
     * @return boolean True if the transport is valid, false otherwise.
     */
    public static function test($capabilities = array())
    {
    }
}