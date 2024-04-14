<?php


/**
 * API for fetching the HTML to embed remote content based on a provided URL
 *
 * Used internally by the WP_Embed class, but is designed to be generic.
 *
 * @link https://wordpress.org/documentation/article/embeds/
 * @link http://oembed.com/
 *
 * @package WordPress
 * @subpackage oEmbed
 */
/**
 * Core class used to implement oEmbed functionality.
 *
 * @since 2.9.0
 */
#[\AllowDynamicProperties]
class WP_oEmbed
{
    /**
     * A list of oEmbed providers.
     *
     * @since 2.9.0
     * @var array
     */
    public $providers = array();
    /**
     * A list of an early oEmbed providers.
     *
     * @since 4.0.0
     * @var array
     */
    public static $early_providers = array();
    /**
     * Constructor.
     *
     * @since 2.9.0
     */
    public function __construct()
    {
    }
    /**
     * Exposes private/protected methods for backward compatibility.
     *
     * @since 4.0.0
     *
     * @param string $name      Method to call.
     * @param array  $arguments Arguments to pass when calling.
     * @return mixed|false Return value of the callback, false otherwise.
     */
    public function __call($name, $arguments)
    {
    }
    /**
     * Takes a URL and returns the corresponding oEmbed provider's URL, if there is one.
     *
     * @since 4.0.0
     *
     * @see WP_oEmbed::discover()
     *
     * @param string       $url  The URL to the content.
     * @param string|array $args {
     *     Optional. Additional provider arguments. Default empty.
     *
     *     @type bool $discover Optional. Determines whether to attempt to discover link tags
     *                          at the given URL for an oEmbed provider when the provider URL
     *                          is not found in the built-in providers list. Default true.
     * }
     * @return string|false The oEmbed provider URL on success, false on failure.
     * @phpstan-param array{
     *   discover?: bool,
     * } $args
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
     * @since 4.0.0
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
     *
     * @param string       $url  The URL to the content that should be attempted to be embedded.
     * @param string|array $args Optional. Additional arguments for retrieving embed HTML.
     *                           See wp_oembed_get() for accepted arguments. Default empty.
     * @return object|false The result in the form of an object on success, false on failure.
     * @phpstan-param array{
     *   width?: int|string,
     *   height?: int|string,
     *   discover?: bool,
     * } $args See wp_oembed_get()
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
     *
     * @param string       $url  The URL to the content that should be attempted to be embedded.
     * @param string|array $args Optional. Additional arguments for retrieving embed HTML.
     *                           See wp_oembed_get() for accepted arguments. Default empty.
     * @return string|false The UNSANITIZED (and potentially unsafe) HTML that should be used to embed
     *                      on success, false on failure.
     * @phpstan-param array{
     *   width?: int|string,
     *   height?: int|string,
     *   discover?: bool,
     * } $args See wp_oembed_get()
     */
    public function get_html($url, $args = '')
    {
    }
    /**
     * Attempts to discover link tags at the given URL for an oEmbed provider.
     *
     * @since 2.9.0
     *
     * @param string $url The URL that should be inspected for discovery `<link>` tags.
     * @return string|false The oEmbed provider URL on success, false on failure.
     */
    public function discover($url)
    {
    }
    /**
     * Connects to a oEmbed provider and returns the result.
     *
     * @since 2.9.0
     *
     * @param string       $provider The URL to the oEmbed provider.
     * @param string       $url      The URL to the content that is desired to be embedded.
     * @param string|array $args     Optional. Additional arguments for retrieving embed HTML.
     *                               See wp_oembed_get() for accepted arguments. Default empty.
     * @return object|false The result in the form of an object on success, false on failure.
     * @phpstan-param array{
     *   width?: int|string,
     *   height?: int|string,
     *   discover?: bool,
     * } $args See wp_oembed_get()
     */
    public function fetch($provider, $url, $args = '')
    {
    }
    /**
     * Converts a data object from WP_oEmbed::fetch() and returns the HTML.
     *
     * @since 2.9.0
     *
     * @param object $data A data object result from an oEmbed provider.
     * @param string $url  The URL to the content that is desired to be embedded.
     * @return string|false The HTML needed to embed on success, false on failure.
     */
    public function data2html($data, $url)
    {
    }
    /**
     * Strips any new lines from the HTML.
     *
     * @since 2.9.0 as strip_scribd_newlines()
     * @since 3.0.0
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