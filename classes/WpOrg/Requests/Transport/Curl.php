<?php

namespace WpOrg\Requests\Transport;

/**
 * cURL HTTP transport
 *
 * @package Requests\Transport
 */
final class Curl implements \WpOrg\Requests\Transport
{
    const CURL_7_10_5 = 0x70a05;
    const CURL_7_16_2 = 0x71002;
    const CURL_7_22_0 = 0x71600;
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
     * @var array cURL information array, see {@link https://www.php.net/curl_getinfo}
     */
    public $info;
    /**
     * cURL version number
     *
     * @var int
     */
    public $version;
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
     * @param string|Stringable $url URL to request
     * @param array $headers Associative array of request headers
     * @param string|array $data Data to send either as the POST body, or as parameters in the URL for a GET/HEAD
     * @param array $options Request options, see {@see \WpOrg\Requests\Requests::response()} for documentation
     * @return string Raw HTTP result
     *
     * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $url argument is not a string or Stringable.
     * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $headers argument is not an array.
     * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $data parameter is not an array or string.
     * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $options argument is not an array.
     * @throws \WpOrg\Requests\Exception       On a cURL error (`curlerror`)
     */
    public function request($url, $headers = [], $data = [], $options = [])
    {
    }
    /**
     * Send multiple requests simultaneously
     *
     * @param array $requests Request data
     * @param array $options Global options
     * @return array Array of \WpOrg\Requests\Response objects (may contain \WpOrg\Requests\Exception or string responses as well)
     *
     * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $requests argument is not an array or iterable object with array access.
     * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $options argument is not an array.
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
     * @param array $options Request options, see {@see \WpOrg\Requests\Requests::response()} for documentation
     * @return resource|\CurlHandle Subrequest's cURL handle
     */
    public function &get_subrequest_handle($url, $headers, $data, $options)
    {
    }
    /**
     * Process a response
     *
     * @param string $response Response data from the body
     * @param array $options Request options
     * @return string|false HTTP response data including headers. False if non-blocking.
     * @throws \WpOrg\Requests\Exception If the request resulted in a cURL error.
     */
    public function process_response($response, $options)
    {
    }
    /**
     * Collect the headers as they are received
     *
     * @param resource|\CurlHandle $handle cURL handle
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
     * @param resource|\CurlHandle $handle cURL handle
     * @param string $data Body data
     * @return integer Length of provided data
     */
    public function stream_body($handle, $data)
    {
    }
    /**
     * Self-test whether the transport can be used.
     *
     * The available capabilities to test for can be found in {@see \WpOrg\Requests\Capability}.
     *
     * @codeCoverageIgnore
     * @param array<string, bool> $capabilities Optional. Associative array of capabilities to test against, i.e. `['<capability>' => true]`.
     * @return bool Whether the transport can be used.
     */
    public static function test($capabilities = [])
    {
    }
}