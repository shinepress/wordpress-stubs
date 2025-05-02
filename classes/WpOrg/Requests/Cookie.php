<?php

namespace WpOrg\Requests;

/**
 * Cookie storage object
 *
 * @package Requests\Cookies
 */
class Cookie
{
    /**
     * Cookie name.
     *
     * @var string
     */
    public $name;
    /**
     * Cookie value.
     *
     * @var string
     */
    public $value;
    /**
     * Cookie attributes
     *
     * Valid keys are `'path'`, `'domain'`, `'expires'`, `'max-age'`, `'secure'` and
     * `'httponly'`.
     *
     * @var \WpOrg\Requests\Utility\CaseInsensitiveDictionary|array Array-like object
     */
    public $attributes = [];
    /**
     * Cookie flags
     *
     * Valid keys are `'creation'`, `'last-access'`, `'persistent'` and `'host-only'`.
     *
     * @var array
     */
    public $flags = [];
    /**
     * Reference time for relative calculations
     *
     * This is used in place of `time()` when calculating Max-Age expiration and
     * checking time validity.
     *
     * @var int
     */
    public $reference_time = 0;
    /**
     * Create a new cookie object
     *
     * @param string                                                  $name           The name of the cookie.
     * @param string                                                  $value          The value for the cookie.
     * @param array|\WpOrg\Requests\Utility\CaseInsensitiveDictionary $attributes Associative array of attribute data
     * @param array                                                   $flags          The flags for the cookie.
     *                                                                                Valid keys are `'creation'`, `'last-access'`,
     *                                                                                `'persistent'` and `'host-only'`.
     * @param int|null                                                $reference_time Reference time for relative calculations.
     *
     * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $name argument is not a string.
     * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $value argument is not a string.
     * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $attributes argument is not an array or iterable object with array access.
     * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $flags argument is not an array.
     * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $reference_time argument is not an integer or null.
     */
    public function __construct($name, $value, $attributes = [], $flags = [], $reference_time = null)
    {
    }
    /**
     * Get the cookie value
     *
     * Attributes and other data can be accessed via methods.
     */
    public function __toString()
    {
    }
    /**
     * Check if a cookie is expired.
     *
     * Checks the age against $this->reference_time to determine if the cookie
     * is expired.
     *
     * @return boolean True if expired, false if time is valid.
     */
    public function is_expired()
    {
    }
    /**
     * Check if a cookie is valid for a given URI
     *
     * @param \WpOrg\Requests\Iri $uri URI to check
     * @return boolean Whether the cookie is valid for the given URI
     */
    public function uri_matches(\WpOrg\Requests\Iri $uri)
    {
    }
    /**
     * Check if a cookie is valid for a given domain
     *
     * @param string $domain Domain to check
     * @return boolean Whether the cookie is valid for the given domain
     */
    public function domain_matches($domain)
    {
    }
    /**
     * Check if a cookie is valid for a given path
     *
     * From the path-match check in RFC 6265 section 5.1.4
     *
     * @param string $request_path Path to check
     * @return boolean Whether the cookie is valid for the given path
     */
    public function path_matches($request_path)
    {
    }
    /**
     * Normalize cookie and attributes
     *
     * @return boolean Whether the cookie was successfully normalized
     */
    public function normalize()
    {
    }
    /**
     * Parse an individual cookie attribute
     *
     * Handles parsing individual attributes from the cookie values.
     *
     * @param string $name Attribute name
     * @param string|int|bool $value Attribute value (string/integer value, or true if empty/flag)
     * @return mixed Value if available, or null if the attribute value is invalid (and should be skipped)
     */
    protected function normalize_attribute($name, $value)
    {
    }
    /**
     * Format a cookie for a Cookie header
     *
     * This is used when sending cookies to a server.
     *
     * @return string Cookie formatted for Cookie header
     */
    public function format_for_header()
    {
    }
    /**
     * Format a cookie for a Set-Cookie header
     *
     * This is used when sending cookies to clients. This isn't really
     * applicable to client-side usage, but might be handy for debugging.
     *
     * @return string Cookie formatted for Set-Cookie header
     */
    public function format_for_set_cookie()
    {
    }
    /**
     * Parse a cookie string into a cookie object
     *
     * Based on Mozilla's parsing code in Firefox and related projects, which
     * is an intentional deviation from RFC 2109 and RFC 2616. RFC 6265
     * specifies some of this handling, but not in a thorough manner.
     *
     * @param string $cookie_header Cookie header value (from a Set-Cookie header)
     * @param string $name
     * @param int|null $reference_time
     * @return \WpOrg\Requests\Cookie Parsed cookie object
     *
     * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $cookie_header argument is not a string.
     * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $name argument is not a string.
     */
    public static function parse($cookie_header, $name = '', $reference_time = null)
    {
    }
    /**
     * Parse all Set-Cookie headers from request headers
     *
     * @param \WpOrg\Requests\Response\Headers $headers Headers to parse from
     * @param \WpOrg\Requests\Iri|null $origin URI for comparing cookie origins
     * @param int|null $time Reference time for expiration calculation
     * @return array
     *
     * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $origin argument is not null or an instance of the Iri class.
     */
    public static function parse_from_headers(\WpOrg\Requests\Response\Headers $headers, $origin = null, $time = null)
    {
    }
}