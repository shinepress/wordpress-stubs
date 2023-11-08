<?php

namespace WpOrg\Requests;

/**
 * Session handler for persistent requests and default parameters
 *
 * Allows various options to be set as default values, and merges both the
 * options and URL properties together. A base URL can be set for all requests,
 * with all subrequests resolved from this. Base options can be set (including
 * a shared cookie jar), then overridden for individual requests.
 *
 * @package Requests\SessionHandler
 */
class Session
{
    /**
     * Base URL for requests
     *
     * URLs will be made absolute using this as the base
     *
     * @var string|null
     */
    public $url = null;
    /**
     * Base headers for requests
     *
     * @var array
     */
    public $headers = [];
    /**
     * Base data for requests
     *
     * If both the base data and the per-request data are arrays, the data will
     * be merged before sending the request.
     *
     * @var array
     */
    public $data = [];
    /**
     * Base options for requests
     *
     * The base options are merged with the per-request data for each request.
     * The only default option is a shared cookie jar between requests.
     *
     * Values here can also be set directly via properties on the Session
     * object, e.g. `$session->useragent = 'X';`
     *
     * @var array
     */
    public $options = [];
    /**
     * Create a new session
     *
     * @param string|Stringable|null $url Base URL for requests
     * @param array $headers Default headers for requests
     * @param array $data Default data for requests
     * @param array $options Default options for requests
     *
     * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $url argument is not a string, Stringable or null.
     * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $headers argument is not an array.
     * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $data argument is not an array.
     * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $options argument is not an array.
     */
    public function __construct($url = null, $headers = [], $data = [], $options = [])
    {
    }
    /**
     * Get a property's value
     *
     * @param string $name Property name.
     * @return mixed|null Property value, null if none found
     */
    public function __get($name)
    {
    }
    /**
     * Set a property's value
     *
     * @param string $name Property name.
     * @param mixed $value Property value
     */
    public function __set($name, $value)
    {
    }
    /**
     * Remove a property's value
     *
     * @param string $name Property name.
     */
    public function __isset($name)
    {
    }
    /**
     * Remove a property's value
     *
     * @param string $name Property name.
     */
    public function __unset($name)
    {
    }
    /**#@+
     * @see \WpOrg\Requests\Session::request()
     * @param string $url
     * @param array $headers
     * @param array $options
     * @return \WpOrg\Requests\Response
     */
    /**
     * Send a GET request
     */
    public function get($url, $headers = [], $options = [])
    {
    }
    /**
     * Send a HEAD request
     */
    public function head($url, $headers = [], $options = [])
    {
    }
    /**
     * Send a DELETE request
     */
    public function delete($url, $headers = [], $options = [])
    {
    }
    /**#@-*/
    /**#@+
     * @see \WpOrg\Requests\Session::request()
     * @param string $url
     * @param array $headers
     * @param array $data
     * @param array $options
     * @return \WpOrg\Requests\Response
     */
    /**
     * Send a POST request
     */
    public function post($url, $headers = [], $data = [], $options = [])
    {
    }
    /**
     * Send a PUT request
     */
    public function put($url, $headers = [], $data = [], $options = [])
    {
    }
    /**
     * Send a PATCH request
     *
     * Note: Unlike {@see \WpOrg\Requests\Session::post()} and {@see \WpOrg\Requests\Session::put()},
     * `$headers` is required, as the specification recommends that should send an ETag
     *
     * @link https://tools.ietf.org/html/rfc5789
     */
    public function patch($url, $headers, $data = [], $options = [])
    {
    }
    /**#@-*/
    /**
     * Main interface for HTTP requests
     *
     * This method initiates a request and sends it via a transport before
     * parsing.
     *
     * @see \WpOrg\Requests\Requests::request()
     *
     * @param string $url URL to request
     * @param array $headers Extra headers to send with the request
     * @param array|null $data Data to send either as a query string for GET/HEAD requests, or in the body for POST requests
     * @param string $type HTTP request type (use \WpOrg\Requests\Requests constants)
     * @param array $options Options for the request (see {@see \WpOrg\Requests\Requests::request()})
     * @return \WpOrg\Requests\Response
     *
     * @throws \WpOrg\Requests\Exception On invalid URLs (`nonhttp`)
     */
    public function request($url, $headers = [], $data = [], $type = \WpOrg\Requests\Requests::GET, $options = [])
    {
    }
    /**
     * Send multiple HTTP requests simultaneously
     *
     * @see \WpOrg\Requests\Requests::request_multiple()
     *
     * @param array $requests Requests data (see {@see \WpOrg\Requests\Requests::request_multiple()})
     * @param array $options Global and default options (see {@see \WpOrg\Requests\Requests::request()})
     * @return array Responses (either \WpOrg\Requests\Response or a \WpOrg\Requests\Exception object)
     *
     * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $requests argument is not an array or iterable object with array access.
     * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $options argument is not an array.
     */
    public function request_multiple($requests, $options = [])
    {
    }
    public function __wakeup()
    {
    }
    /**
     * Merge a request's data with the default data
     *
     * @param array $request Request data (same form as {@see \WpOrg\Requests\Session::request_multiple()})
     * @param boolean $merge_options Should we merge options as well?
     * @return array Request data
     */
    protected function merge_request($request, $merge_options = true)
    {
    }
}