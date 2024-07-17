<?php

namespace WpOrg\Requests\Cookie;

/**
 * Cookie holder object
 *
 * @package Requests\Cookies
 */
class Jar implements \ArrayAccess, \IteratorAggregate
{
    /**
     * Actual item data
     *
     * @var array
     */
    protected $cookies = [];
    /**
     * Create a new jar
     *
     * @param array $cookies Existing cookie values
     *
     * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed argument is not an array.
     */
    public function __construct($cookies = [])
    {
    }
    /**
     * Normalise cookie data into a \WpOrg\Requests\Cookie
     *
     * @param string|\WpOrg\Requests\Cookie $cookie Cookie header value, possibly pre-parsed (object).
     * @param string                        $key    Optional. The name for this cookie.
     * @return \WpOrg\Requests\Cookie
     */
    public function normalize_cookie($cookie, $key = '')
    {
    }
    /**
     * Check if the given item exists
     *
     * @param string $offset Item key
     * @return boolean Does the item exist?
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
    }
    /**
     * Get the value for the item
     *
     * @param string $offset Item key
     * @return string|null Item value (null if offsetExists is false)
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
    }
    /**
     * Set the given item
     *
     * @param string $offset Item name
     * @param string $value Item value
     *
     * @throws \WpOrg\Requests\Exception On attempting to use dictionary as list (`invalidset`)
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
    }
    /**
     * Unset the given header
     *
     * @param string $offset The key for the item to unset.
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
    }
    /**
     * Get an iterator for the data
     *
     * @return \ArrayIterator
     */
    #[\ReturnTypeWillChange]
    public function getIterator()
    {
    }
    /**
     * Register the cookie handler with the request's hooking system
     *
     * @param \WpOrg\Requests\HookManager $hooks Hooking system
     */
    public function register(\WpOrg\Requests\HookManager $hooks)
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
     * @param \WpOrg\Requests\Response $response Response as received.
     */
    public function before_redirect_check(\WpOrg\Requests\Response $response)
    {
    }
}