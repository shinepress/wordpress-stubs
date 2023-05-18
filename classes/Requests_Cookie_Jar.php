<?php


/**
 * Cookie holder object
 *
 * @package Requests
 * @subpackage Cookies
 */
/**
 * Cookie holder object
 *
 * @package Requests
 * @subpackage Cookies
 */
class Requests_Cookie_Jar implements \ArrayAccess, \IteratorAggregate
{
    /**
     * Actual item data
     *
     * @var array
     */
    protected $cookies = array();
    /**
     * Create a new jar
     *
     * @param array $cookies Existing cookie values
     */
    public function __construct($cookies = array())
    {
    }
    /**
     * Normalise cookie data into a Requests_Cookie
     *
     * @param string|Requests_Cookie $cookie
     * @return Requests_Cookie
     */
    public function normalize_cookie($cookie, $key = \null)
    {
    }
    /**
     * Normalise cookie data into a Requests_Cookie
     *
     * @codeCoverageIgnore
     * @deprecated Use {@see Requests_Cookie_Jar::normalize_cookie}
     * @return Requests_Cookie
     */
    public function normalizeCookie($cookie, $key = \null)
    {
    }
    /**
     * Check if the given item exists
     *
     * @param string $key Item key
     * @return boolean Does the item exist?
     */
    #[ReturnTypeWillChange]
    public function offsetExists($key)
    {
    }
    /**
     * Get the value for the item
     *
     * @param string $key Item key
     * @return string Item value
     */
    #[ReturnTypeWillChange]
    public function offsetGet($key)
    {
    }
    /**
     * Set the given item
     *
     * @throws Requests_Exception On attempting to use dictionary as list (`invalidset`)
     *
     * @param string $key Item name
     * @param string $value Item value
     */
    #[ReturnTypeWillChange]
    public function offsetSet($key, $value)
    {
    }
    /**
     * Unset the given header
     *
     * @param string $key
     */
    #[ReturnTypeWillChange]
    public function offsetUnset($key)
    {
    }
    /**
     * Get an iterator for the data
     *
     * @return ArrayIterator
     */
    #[ReturnTypeWillChange]
    public function getIterator()
    {
    }
    /**
     * Register the cookie handler with the request's hooking system
     *
     * @param Requests_Hooker $hooks Hooking system
     */
    public function register(\Requests_Hooker $hooks)
    {
    }
    /**
     * Add Cookie header to a request if we have any
     *
     * As per RFC 6265, cookies are separated by '; '
     *
     * @param string $url
     * @param array $headers
     * @param array $data
     * @param string $type
     * @param array $options
     */
    public function before_request($url, &$headers, &$data, &$type, &$options)
    {
    }
    /**
     * Parse all cookies from a response and attach them to the response
     *
     * @var Requests_Response $response
     */
    public function before_redirect_check(\Requests_Response &$return)
    {
    }
}