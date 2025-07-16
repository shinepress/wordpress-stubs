<?php

namespace SimplePie\HTTP;

/**
 * HTTP Response Parser
 *
 * @package SimplePie
 * @subpackage HTTP
 */
class Parser
{
    /**
     * HTTP Version
     *
     * @var float
     */
    public $http_version = 0.0;
    /**
     * Status code
     *
     * @var int
     */
    public $status_code = 0;
    /**
     * Reason phrase
     *
     * @var string
     */
    public $reason = '';
    /**
     * Key/value pairs of the headers
     *
     * @var array
     */
    public $headers = [];
    /**
     * Body of the response
     *
     * @var string
     */
    public $body = '';
    /**
     * Current state of the state machine
     *
     * @var self::STATE_*
     */
    protected $state = self::STATE_HTTP_VERSION;
    /**
     * Input data
     *
     * @var string
     */
    protected $data = '';
    /**
     * Input data length (to avoid calling strlen() everytime this is needed)
     *
     * @var int
     */
    protected $data_length = 0;
    /**
     * Current position of the pointer
     *
     * @var int
     */
    protected $position = 0;
    /**
     * Name of the hedaer currently being parsed
     *
     * @var string
     */
    protected $name = '';
    /**
     * Value of the hedaer currently being parsed
     *
     * @var string
     */
    protected $value = '';
    /**
     * Create an instance of the class with the input data
     *
     * @param string $data Input data
     */
    public function __construct($data)
    {
    }
    /**
     * Parse the input data
     *
     * @return bool true on success, false on failure
     */
    public function parse()
    {
    }
    /**
     * Check whether there is data beyond the pointer
     *
     * @return bool true if there is further data, false if not
     */
    protected function has_data()
    {
    }
    /**
     * See if the next character is LWS
     *
     * @return bool true if the next character is LWS, false if not
     */
    protected function is_linear_whitespace()
    {
    }
    /**
     * Parse the HTTP version
     */
    protected function http_version()
    {
    }
    /**
     * Parse the status code
     */
    protected function status()
    {
    }
    /**
     * Parse the reason phrase
     */
    protected function reason()
    {
    }
    /**
     * Deal with a new line, shifting data around as needed
     */
    protected function new_line()
    {
    }
    /**
     * Parse a header name
     */
    protected function name()
    {
    }
    /**
     * Parse LWS, replacing consecutive LWS characters with a single space
     */
    protected function linear_whitespace()
    {
    }
    /**
     * See what state to move to while within non-quoted header values
     */
    protected function value()
    {
    }
    /**
     * Parse a header value while outside quotes
     */
    protected function value_char()
    {
    }
    /**
     * See what state to move to while within quoted header values
     */
    protected function quote()
    {
    }
    /**
     * Parse a header value while within quotes
     */
    protected function quote_char()
    {
    }
    /**
     * Parse an escaped character within quotes
     */
    protected function quote_escaped()
    {
    }
    /**
     * Parse the body
     */
    protected function body()
    {
    }
    /**
     * Parsed a "Transfer-Encoding: chunked" body
     * @phpstan-return void
     */
    protected function chunked()
    {
    }
    /**
     * Prepare headers (take care of proxies headers)
     *
     * @param string  $headers Raw headers
     * @param integer $count   Redirection count. Default to 1.
     *
     * @return string
     */
    public static function prepareHeaders($headers, $count = 1)
    {
    }
}