<?php


/**
 * API for fetching the HTML to embed remote content based on a provided URL
 *
 * Used internally by the WP_Embed class, but is designed to be generic.
 *
 * @link https://codex.wordpress.org/oEmbed oEmbed Codex Article
 * @link http://oembed.com/ oEmbed Homepage
 *
 * @package WordPress
 * @subpackage oEmbed
 */
/**
 * Core class used to implement oEmbed functionality.
 *
 * @since 2.9.0
 */
class WP_oEmbed
{
    /**
     * A list of oEmbed providers.
     *
     * @since 2.9.0
     * @access public
     * @var array
     */
    public $providers = array();
    /**
     * A list of an early oEmbed providers.
     *
     * @since 4.0.0
     * @access public
     * @static
     * @var array
     */
    public static $early_providers = array();
    /**
     * A list of private/protected methods, used for backward compatibility.
     *
     * @since 4.2.0
     * @access private
     * @var array
     */
    private $compat_methods = array('_fetch_with_format', '_parse_json', '_parse_xml', '_parse_xml_body');
    /**
     * Constructor.
     *
     * @since 2.9.0
     * @access public
     */
    public function __construct()
    {
    }
    /**
     * Exposes private/protected methods for backward compatibility.
     *
     * @since 4.0.0
     * @access public
     *
     * @param callable $name      Method to call.
     * @param array    $arguments Arguments to pass when calling.
     * @return mixed|bool Return value of the callback, false otherwise.
     */
    public function __call($name, $arguments)
    {
    }
    /**
     * Takes a URL and returns the corresponding oEmbed provider's URL, if there is one.
     *
     * @since 4.0.0
     * @access public
     *
     * @see WP_oEmbed::discover()
     *
     * @param string        $url  The URL to the content.
     * @param string|array  $args Optional provider arguments.
     * @return false|string False on failure, otherwise the oEmbed provider URL.
     */
    public function get_provider($url, $args = '')
    {
    }
    /**
     * Adds an oEmbed provider.
     *
     * The provider is added just-in-time when wp_oembed_add_provider() is called before
     * the {@see 'plugins_loaded'} hook.
     *
     * The just-in-time addition is for the benefit of the {@see 'oembed_providers'} filter.
     *
     * @static
     * @since 4.0.0
     * @access public
     *
     * @see wp_oembed_add_provider()
     *
     * @param string $format   Format of URL that this provider can handle. You can use
     *                         asterisks as wildcards.
     * @param string $provider The URL to the oEmbed provider..
     * @param bool   $regex    Optional. Whether the $format parameter is in a regex format.
     *                         Default false.
     */
    public static function _add_provider_early($format, $provider, $regex = \false)
    {
    }
    /**
     * Removes an oEmbed provider.
     *
     * The provider is removed just-in-time when wp_oembed_remove_provider() is called before
     * the {@see 'plugins_loaded'} hook.
     *
     * The just-in-time removal is for the benefit of the {@see 'oembed_providers'} filter.
     *
     * @since 4.0.0
     * @access public
     * @static
     *
     * @see wp_oembed_remove_provider()
     *
     * @param string $format The format of URL that this provider can handle. You can use
     *                       asterisks as wildcards.
     */
    public static function _remove_provider_early($format)
    {
    }
    /**
     * Takes a URL and attempts to return the oEmbed data.
     *
     * @see WP_oEmbed::fetch()
     *
     * @since 4.8.0
     * @access public
     *
     * @param string       $url  The URL to the content that should be attempted to be embedded.
     * @param array|string $args Optional. Arguments, usually passed from a shortcode. Default empty.
     * @return false|object False on failure, otherwise the result in the form of an object.
     */
    public function get_data($url, $args = '')
    {
    }
    /**
     * The do-it-all function that takes a URL and attempts to return the HTML.
     *
     * @see WP_oEmbed::fetch()
     * @see WP_oEmbed::data2html()
     *
     * @since 2.9.0
     * @access public
     *
     * @param string       $url  The URL to the content that should be attempted to be embedded.
     * @param array|string $args Optional. Arguments, usually passed from a shortcode. Default empty.
     * @return false|string False on failure, otherwise the UNSANITIZED (and potentially unsafe) HTML that should be used to embed.
     */
    public function get_html($url, $args = '')
    {
    }
    /**
     * Attempts to discover link tags at the given URL for an oEmbed provider.
     *
     * @since 2.9.0
     * @access public
     *
     * @param string $url The URL that should be inspected for discovery `<link>` tags.
     * @return false|string False on failure, otherwise the oEmbed provider URL.
     */
    public function discover($url)
    {
    }
    /**
     * Connects to a oEmbed provider and returns the result.
     *
     * @since 2.9.0
     * @access public
     *
     * @param string       $provider The URL to the oEmbed provider.
     * @param string       $url      The URL to the content that is desired to be embedded.
     * @param array|string $args     Optional. Arguments, usually passed from a shortcode. Default empty.
     * @return false|object False on failure, otherwise the result in the form of an object.
     */
    public function fetch($provider, $url, $args = '')
    {
    }
    /**
     * Fetches result from an oEmbed provider for a specific format and complete provider URL
     *
     * @since 3.0.0
     * @access private
     *
     * @param string $provider_url_with_args URL to the provider with full arguments list (url, maxheight, etc.)
     * @param string $format Format to use
     * @return false|object|WP_Error False on failure, otherwise the result in the form of an object.
     */
    private function _fetch_with_format($provider_url_with_args, $format)
    {
    }
    /**
     * Parses a json response body.
     *
     * @since 3.0.0
     * @access private
     *
     * @param string $response_body
     * @return object|false
     */
    private function _parse_json($response_body)
    {
    }
    /**
     * Parses an XML response body.
     *
     * @since 3.0.0
     * @access private
     *
     * @param string $response_body
     * @return object|false
     */
    private function _parse_xml($response_body)
    {
    }
    /**
     * Serves as a helper function for parsing an XML response body.
     *
     * @since 3.6.0
     * @access private
     *
     * @param string $response_body
     * @return stdClass|false
     */
    private function _parse_xml_body($response_body)
    {
    }
    /**
     * Converts a data object from WP_oEmbed::fetch() and returns the HTML.
     *
     * @since 2.9.0
     * @access public
     *
     * @param object $data A data object result from an oEmbed provider.
     * @param string $url The URL to the content that is desired to be embedded.
     * @return false|string False on error, otherwise the HTML needed to embed.
     */
    public function data2html($data, $url)
    {
    }
    /**
     * Strips any new lines from the HTML.
     *
     * @since 2.9.0 as strip_scribd_newlines()
     * @since 3.0.0
     * @access public
     *
     * @param string $html Existing HTML.
     * @param object $data Data object from WP_oEmbed::data2html()
     * @param string $url The original URL passed to oEmbed.
     * @return string Possibly modified $html
     */
    public function _strip_newlines($html, $data, $url)
    {
    }
}