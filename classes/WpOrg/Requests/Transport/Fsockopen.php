<?php

namespace WpOrg\Requests\Transport;

/**
 * fsockopen HTTP transport
 *
 * @package Requests\Transport
 */
final class Fsockopen implements \WpOrg\Requests\Transport
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
     * @var array Associative array of properties, see {@link https://www.php.net/stream_get_meta_data}
     */
    public $info;
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
     * @throws \WpOrg\Requests\Exception       On failure to connect to socket (`fsockopenerror`)
     * @throws \WpOrg\Requests\Exception       On socket timeout (`timeout`)
     */
    public function request($url, $headers = [], $data = [], $options = [])
    {
    }
    /**
     * Send multiple requests simultaneously
     *
     * @param array $requests Request data (array of 'url', 'headers', 'data', 'options') as per {@see \WpOrg\Requests\Transport::request()}
     * @param array $options Global options, see {@see \WpOrg\Requests\Requests::response()} for documentation
     * @return array Array of \WpOrg\Requests\Response objects (may contain \WpOrg\Requests\Exception or string responses as well)
     *
     * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $requests argument is not an array or iterable object with array access.
     * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $options argument is not an array.
     */
    public function request_multiple($requests, $options)
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
     * @link https://tools.ietf.org/html/rfc2818#section-3.1 RFC2818, Section 3.1
     *
     * @param string $host Host name to verify against
     * @param resource $context Stream context
     * @return bool
     *
     * @throws \WpOrg\Requests\Exception On failure to connect via TLS (`fsockopen.ssl.connect_error`)
     * @throws \WpOrg\Requests\Exception On not obtaining a match for the host (`fsockopen.ssl.no_match`)
     */
    public function verify_certificate_from_context($host, $context)
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