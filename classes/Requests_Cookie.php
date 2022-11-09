<?php


/**
 * Cookie storage object
 *
 * @package Requests
 * @subpackage Cookies
 */
/**
 * Cookie storage object
 *
 * @package Requests
 * @subpackage Cookies
 */
class Requests_Cookie
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
     * Valid keys are (currently) path, domain, expires, max-age, secure and
     * httponly.
     *
     * @var Requests_Utility_CaseInsensitiveDictionary|array Array-like object
     */
    public $attributes = array();
    /**
     * Cookie flags
     *
     * Valid keys are (currently) creation, last-access, persistent and
     * host-only.
     *
     * @var array
     */
    public $flags = array();
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
     * @param string $name
     * @param string $value
     * @param array|Requests_Utility_CaseInsensitiveDictionary $attributes Associative array of attribute data
     */
    public function __construct($name, $value, $attributes = array(), $flags = array(), $reference_time = \null)
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
     * @param Requests_IRI $uri URI to check
     * @return boolean Whether the cookie is valid for the given URI
     */
    public function uri_matches(\Requests_IRI $uri)
    {
    }
    /**
     * Check if a cookie is valid for a given domain
     *
     * @param string $string Domain to check
     * @return boolean Whether the cookie is valid for the given domain
     */
    public function domain_matches($string)
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
     * @param string|boolean $value Attribute value (string value, or true if empty/flag)
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
     * Format a cookie for a Cookie header
     *
     * @codeCoverageIgnore
     * @deprecated Use {@see Requests_Cookie::format_for_header}
     * @return string
     */
    public function formatForHeader()
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
     * Format a cookie for a Set-Cookie header
     *
     * @codeCoverageIgnore
     * @deprecated Use {@see Requests_Cookie::format_for_set_cookie}
     * @return string
     */
    public function formatForSetCookie()
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
     * Parse a cookie string into a cookie object
     *
     * Based on Mozilla's parsing code in Firefox and related projects, which
     * is an intentional deviation from RFC 2109 and RFC 2616. RFC 6265
     * specifies some of this handling, but not in a thorough manner.
     *
     * @param string Cookie header value (from a Set-Cookie header)
     * @return Requests_Cookie Parsed cookie object
     */
    public static function parse($string, $name = '', $reference_time = \null)
    {
    }
    /**
     * Parse all Set-Cookie headers from request headers
     *
     * @param Requests_Response_Headers $headers Headers to parse from
     * @param Requests_IRI|null $origin URI for comparing cookie origins
     * @param int|null $time Reference time for expiration calculation
     * @return array
     */
    public static function parse_from_headers(\Requests_Response_Headers $headers, \Requests_IRI $origin = \null, $time = \null)
    {
    }
    /**
     * Parse all Set-Cookie headers from request headers
     *
     * @codeCoverageIgnore
     * @deprecated Use {@see Requests_Cookie::parse_from_headers}
     * @return string
     */
    public static function parseFromHeaders(\Requests_Response_Headers $headers)
    {
    }
}