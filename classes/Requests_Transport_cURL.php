<?php


/**
 * cURL HTTP transport
 *
 * @package Requests
 * @subpackage Transport
 */
/**
 * cURL HTTP transport
 *
 * @package Requests
 * @subpackage Transport
 */
class Requests_Transport_cURL implements \Requests_Transport
{
    const CURL_7_10_5 = 0x70a05;
    const CURL_7_16_2 = 0x71002;
    /**
     * Raw HTTP data
     *
     * @var string
     */
    public $headers = '';
    /**
     * Raw body data
     *
     * @var string
     */
    public $response_data = '';
    /**
     * Information on the current request
     *
     * @var array cURL information array, see {@see https://secure.php.net/curl_getinfo}
     */
    public $info;
    /**
     * cURL version number
     *
     * @var int
     */
    public $version;
    /**
     * cURL handle
     *
     * @var resource
     */
    protected $handle;
    /**
     * Hook dispatcher instance
     *
     * @var Requests_Hooks
     */
    protected $hooks;
    /**
     * Have we finished the headers yet?
     *
     * @var boolean
     */
    protected $done_headers = \false;
    /**
     * If streaming to a file, keep the file pointer
     *
     * @var resource
     */
    protected $stream_handle;
    /**
     * How many bytes are in the response body?
     *
     * @var int
     */
    protected $response_bytes;
    /**
     * What's the maximum number of bytes we should keep?
     *
     * @var int|bool Byte count, or false if no limit.
     */
    protected $response_byte_limit;
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Destructor
     */
    public function __destruct()
    {
    }
    /**
     * Perform a request
     *
     * @throws Requests_Exception On a cURL error (`curlerror`)
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
     * @param array $requests Request data
     * @param array $options Global options
     * @return array Array of Requests_Response objects (may contain Requests_Exception or string responses as well)
     */
    public function request_multiple($requests, $options)
    {
    }
    /**
     * Get the cURL handle for use in a multi-request
     *
     * @param string $url URL to request
     * @param array $headers Associative array of request headers
     * @param string|array $data Data to send either as the POST body, or as parameters in the URL for a GET/HEAD
     * @param array $options Request options, see {@see Requests::response()} for documentation
     * @return resource Subrequest's cURL handle
     */
    public function &get_subrequest_handle($url, $headers, $data, $options)
    {
    }
    /**
     * Setup the cURL handle for the given data
     *
     * @param string $url URL to request
     * @param array $headers Associative array of request headers
     * @param string|array $data Data to send either as the POST body, or as parameters in the URL for a GET/HEAD
     * @param array $options Request options, see {@see Requests::response()} for documentation
     */
    protected function setup_handle($url, $headers, $data, $options)
    {
    }
    /**
     * Process a response
     *
     * @param string $response Response data from the body
     * @param array $options Request options
     * @return string|false HTTP response data including headers. False if non-blocking.
     * @throws Requests_Exception
     */
    public function process_response($response, $options)
    {
    }
    /**
     * Collect the headers as they are received
     *
     * @param resource $handle cURL resource
     * @param string $headers Header string
     * @return integer Length of provided header
     */
    public function stream_headers($handle, $headers)
    {
    }
    /**
     * Collect data as it's received
     *
     * @since 1.6.1
     *
     * @param resource $handle cURL resource
     * @param string $data Body data
     * @return integer Length of provided data
     */
    public function stream_body($handle, $data)
    {
    }
    /**
     * Format a URL given GET data
     *
     * @param string $url
     * @param array|object $data Data to build query using, see {@see https://secure.php.net/http_build_query}
     * @return string URL with data
     */
    protected static function format_get($url, $data)
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
    /**
     * Get the correct "Expect" header for the given request data.
     *
     * @param string|array $data Data to send either as the POST body, or as parameters in the URL for a GET/HEAD.
     * @return string The "Expect" header.
     */
    protected function get_expect_header($data)
    {
    }
}