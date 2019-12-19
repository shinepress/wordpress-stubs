<?php


/**
 * HTTP API: WP_Http_Cookie class
 *
 * @package WordPress
 * @subpackage HTTP
 * @since 4.4.0
 */
/**
 * Core class used to encapsulate a single cookie object for internal use.
 *
 * Returned cookies are represented using this class, and when cookies are set, if they are not
 * already a WP_Http_Cookie() object, then they are turned into one.
 *
 * @todo The WordPress convention is to use underscores instead of camelCase for function and method
 * names. Need to switch to use underscores instead for the methods.
 *
 * @since 2.8.0
 */
class WP_Http_Cookie
{
    /**
     * Cookie name.
     *
     * @since 2.8.0
     * @var string
     */
    public $name;
    /**
     * Cookie value.
     *
     * @since 2.8.0
     * @var string
     */
    public $value;
    /**
     * When the cookie expires. Unix timestamp or formatted date.
     *
     * @since 2.8.0
     * @var string|int|null
     */
    public $expires;
    /**
     * Cookie URL path.
     *
     * @since 2.8.0
     * @var string
     */
    public $path;
    /**
     * Cookie Domain.
     *
     * @since 2.8.0
     * @var string
     */
    public $domain;
    /**
     * host-only flag.
     *
     * @since 5.2.0
     * @var bool
     */
    public $host_only;
    /**
     * Sets up this cookie object.
     *
     * The parameter $data should be either an associative array containing the indices names below
     * or a header string detailing it.
     *
     * @since 2.8.0
     * @since 5.2.0 Added `host_only` to the `$data` parameter.
     *
     * @param string|array $data {
     *     Raw cookie data as header string or data array.
     *
     *     @type string          $name      Cookie name.
     *     @type mixed           $value     Value. Should NOT already be urlencoded.
     *     @type string|int|null $expires   Optional. Unix timestamp or formatted date. Default null.
     *     @type string          $path      Optional. Path. Default '/'.
     *     @type string          $domain    Optional. Domain. Default host of parsed $requested_url.
     *     @type int             $port      Optional. Port. Default null.
     *     @type bool            $host_only Optional. host-only storage flag. Default true.
     * }
     * @param string       $requested_url The URL which the cookie was set on, used for default $domain
     *                                    and $port values.
     */
    public function __construct($data, $requested_url = '')
    {
    }
    /**
     * Confirms that it's OK to send this cookie to the URL checked against.
     *
     * Decision is based on RFC 2109/2965, so look there for details on validity.
     *
     * @since 2.8.0
     *
     * @param string $url URL you intend to send this cookie to
     * @return bool true if allowed, false otherwise.
     */
    public function test($url)
    {
    }
    /**
     * Convert cookie name and value back to header string.
     *
     * @since 2.8.0
     *
     * @return string Header encoded cookie name and value.
     */
    public function getHeaderValue()
    {
    }
    /**
     * Retrieve cookie header for usage in the rest of the WordPress HTTP API.
     *
     * @since 2.8.0
     *
     * @return string
     */
    public function getFullHeader()
    {
    }
    /**
     * Retrieves cookie attributes.
     *
     * @since 4.6.0
     *
     * @return array {
     *    List of attributes.
     *
     *    @type string|int|null $expires When the cookie expires. Unix timestamp or formatted date.
     *    @type string          $path    Cookie URL path.
     *    @type string          $domain  Cookie domain.
     * }
     */
    public function get_attributes()
    {
    }
}