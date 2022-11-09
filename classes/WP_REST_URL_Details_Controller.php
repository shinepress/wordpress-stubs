<?php


/**
 * REST API: WP_REST_URL_Details_Controller class
 *
 * @package WordPress
 * @subpackage REST_API
 * @since 5.9.0
 */
/**
 * Controller which provides REST endpoint for retrieving information
 * from a remote site's HTML response.
 *
 * @since 5.9.0
 *
 * @see WP_REST_Controller
 */
class WP_REST_URL_Details_Controller extends \WP_REST_Controller
{
    /**
     * Constructs the controller.
     *
     * @since 5.9.0
     */
    public function __construct()
    {
    }
    /**
     * Registers the necessary REST API routes.
     *
     * @since 5.9.0
     */
    public function register_routes()
    {
    }
    /**
     * Retrieves the item's schema, conforming to JSON Schema.
     *
     * @since 5.9.0
     *
     * @return array Item schema data.
     */
    public function get_item_schema()
    {
    }
    /**
     * Retrieves the contents of the title tag from the HTML response.
     *
     * @since 5.9.0
     *
     * @param WP_REST_REQUEST $request Full details about the request.
     * @return WP_REST_Response|WP_Error The parsed details as a response object. WP_Error if there are errors.
     */
    public function parse_url_details($request)
    {
    }
    /**
     * Checks whether a given request has permission to read remote URLs.
     *
     * @since 5.9.0
     *
     * @return WP_Error|bool True if the request has permission, else WP_Error.
     */
    public function permissions_check()
    {
    }
    /**
     * Retrieves the document title from a remote URL.
     *
     * @since 5.9.0
     *
     * @param string $url The website URL whose HTML to access.
     * @return string|WP_Error The HTTP response from the remote URL on success.
     *                         WP_Error if no response or no content.
     */
    private function get_remote_url($url)
    {
    }
    /**
     * Parses the title tag contents from the provided HTML.
     *
     * @since 5.9.0
     *
     * @param string $html The HTML from the remote website at URL.
     * @return string The title tag contents on success. Empty string if not found.
     */
    private function get_title($html)
    {
    }
    /**
     * Parses the site icon from the provided HTML.
     *
     * @since 5.9.0
     *
     * @param string $html The HTML from the remote website at URL.
     * @param string $url  The target website URL.
     * @return string The icon URI on success. Empty string if not found.
     */
    private function get_icon($html, $url)
    {
    }
    /**
     * Parses the meta description from the provided HTML.
     *
     * @since 5.9.0
     *
     * @param array $meta_elements {
     *     A multi-dimensional indexed array on success, else empty array.
     *
     *     @type string[] $0 Meta elements with a content attribute.
     *     @type string[] $1 Content attribute's opening quotation mark.
     *     @type string[] $2 Content attribute's value for each meta element.
     * }
     * @return string The meta description contents on success. Empty string if not found.
     * @phpstan-param array{
     *   0: string[],
     *   1: string[],
     *   2: string[],
     * } $meta_elements
     */
    private function get_description($meta_elements)
    {
    }
    /**
     * Parses the Open Graph (OG) Image from the provided HTML.
     *
     * See: https://ogp.me/.
     *
     * @since 5.9.0
     *
     * @param array  $meta_elements {
     *     A multi-dimensional indexed array on success, else empty array.
     *
     *     @type string[] $0 Meta elements with a content attribute.
     *     @type string[] $1 Content attribute's opening quotation mark.
     *     @type string[] $2 Content attribute's value for each meta element.
     * }
     * @param string $url The target website URL.
     * @return string The OG image on success. Empty string if not found.
     * @phpstan-param array{
     *   0: string[],
     *   1: string[],
     *   2: string[],
     * } $meta_elements
     */
    private function get_image($meta_elements, $url)
    {
    }
    /**
     * Prepares the metadata by:
     *    - stripping all HTML tags and tag entities.
     *    - converting non-tag entities into characters.
     *
     * @since 5.9.0
     *
     * @param string $metadata The metadata content to prepare.
     * @return string The prepared metadata.
     */
    private function prepare_metadata_for_output($metadata)
    {
    }
    /**
     * Utility function to build cache key for a given URL.
     *
     * @since 5.9.0
     *
     * @param string $url The URL for which to build a cache key.
     * @return string The cache key.
     */
    private function build_cache_key_for_url($url)
    {
    }
    /**
     * Utility function to retrieve a value from the cache at a given key.
     *
     * @since 5.9.0
     *
     * @param string $key The cache key.
     * @return mixed The value from the cache.
     */
    private function get_cache($key)
    {
    }
    /**
     * Utility function to cache a given data set at a given cache key.
     *
     * @since 5.9.0
     *
     * @param string $key  The cache key under which to store the value.
     * @param string $data The data to be stored at the given cache key.
     * @return bool True when transient set. False if not set.
     */
    private function set_cache($key, $data = '')
    {
    }
    /**
     * Retrieves the head element section.
     *
     * @since 5.9.0
     *
     * @param string $html The string of HTML to parse.
     * @return string The `<head>..</head>` section on success. Given `$html` if not found.
     */
    private function get_document_head($html)
    {
    }
    /**
     * Gets all the meta tag elements that have a 'content' attribute.
     *
     * @since 5.9.0
     *
     * @param string $html The string of HTML to be parsed.
     * @return array {
     *     A multi-dimensional indexed array on success, else empty array.
     *
     *     @type string[] $0 Meta elements with a content attribute.
     *     @type string[] $1 Content attribute's opening quotation mark.
     *     @type string[] $2 Content attribute's value for each meta element.
     * }
     * @phpstan-return array{
     *   0: string[],
     *   1: string[],
     *   2: string[],
     * }
     */
    private function get_meta_with_content_elements($html)
    {
    }
    /**
     * Gets the metadata from a target meta element.
     *
     * @since 5.9.0
     *
     * @param array  $meta_elements {
     *     A multi-dimensional indexed array on success, else empty array.
     *
     *     @type string[] $0 Meta elements with a content attribute.
     *     @type string[] $1 Content attribute's opening quotation mark.
     *     @type string[] $2 Content attribute's value for each meta element.
     * }
     * @param string $attr       Attribute that identifies the element with the target metadata.
     * @param string $attr_value The attribute's value that identifies the element with the target metadata.
     * @return string The metadata on success. Empty string if not found.
     * @phpstan-param array{
     *   0: string[],
     *   1: string[],
     *   2: string[],
     * } $meta_elements
     */
    private function get_metadata_from_meta_element($meta_elements, $attr, $attr_value)
    {
    }
}