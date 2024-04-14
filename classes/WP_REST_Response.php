<?php


/**
 * REST API: WP_REST_Response class
 *
 * @package WordPress
 * @subpackage REST_API
 * @since 4.4.0
 */
/**
 * Core class used to implement a REST response object.
 *
 * @since 4.4.0
 *
 * @see WP_HTTP_Response
 */
class WP_REST_Response extends \WP_HTTP_Response
{
    /**
     * Links related to the response.
     *
     * @since 4.4.0
     * @var array
     */
    protected $links = array();
    /**
     * The route that was to create the response.
     *
     * @since 4.4.0
     * @var string
     */
    protected $matched_route = '';
    /**
     * The handler that was used to create the response.
     *
     * @since 4.4.0
     * @var null|array
     */
    protected $matched_handler = \null;
    /**
     * Adds a link to the response.
     *
     * @internal The $rel parameter is first, as this looks nicer when sending multiple.
     *
     * @since 4.4.0
     *
     * @link https://tools.ietf.org/html/rfc5988
     * @link https://www.iana.org/assignments/link-relations/link-relations.xml
     *
     * @param string $rel        Link relation. Either an IANA registered type,
     *                           or an absolute URL.
     * @param string $href       Target URI for the link.
     * @param array  $attributes Optional. Link parameters to send along with the URL. Default empty array.
     */
    public function add_link($rel, $href, $attributes = array())
    {
    }
    /**
     * Removes a link from the response.
     *
     * @since 4.4.0
     *
     * @param  string $rel  Link relation. Either an IANA registered type, or an absolute URL.
     * @param  string $href Optional. Only remove links for the relation matching the given href.
     *                      Default null.
     * @phpstan-return void
     */
    public function remove_link($rel, $href = \null)
    {
    }
    /**
     * Adds multiple links to the response.
     *
     * Link data should be an associative array with link relation as the key.
     * The value can either be an associative array of link attributes
     * (including `href` with the URL for the response), or a list of these
     * associative arrays.
     *
     * @since 4.4.0
     *
     * @param array $links Map of link relation to list of links.
     */
    public function add_links($links)
    {
    }
    /**
     * Retrieves links for the response.
     *
     * @since 4.4.0
     *
     * @return array List of links.
     */
    public function get_links()
    {
    }
    /**
     * Sets a single link header.
     *
     * @internal The $rel parameter is first, as this looks nicer when sending multiple.
     *
     * @since 4.4.0
     *
     * @link https://tools.ietf.org/html/rfc5988
     * @link https://www.iana.org/assignments/link-relations/link-relations.xml
     *
     * @param string $rel   Link relation. Either an IANA registered type, or an absolute URL.
     * @param string $link  Target IRI for the link.
     * @param array  $other Optional. Other parameters to send, as an assocative array.
     *                      Default empty array.
     */
    public function link_header($rel, $link, $other = array())
    {
    }
    /**
     * Retrieves the route that was used.
     *
     * @since 4.4.0
     *
     * @return string The matched route.
     */
    public function get_matched_route()
    {
    }
    /**
     * Sets the route (regex for path) that caused the response.
     *
     * @since 4.4.0
     *
     * @param string $route Route name.
     */
    public function set_matched_route($route)
    {
    }
    /**
     * Retrieves the handler that was used to generate the response.
     *
     * @since 4.4.0
     *
     * @return null|array The handler that was used to create the response.
     */
    public function get_matched_handler()
    {
    }
    /**
     * Sets the handler that was responsible for generating the response.
     *
     * @since 4.4.0
     *
     * @param array $handler The matched handler.
     */
    public function set_matched_handler($handler)
    {
    }
    /**
     * Checks if the response is an error, i.e. >= 400 response code.
     *
     * @since 4.4.0
     *
     * @return bool Whether the response is an error.
     */
    public function is_error()
    {
    }
    /**
     * Retrieves a WP_Error object from the response.
     *
     * @since 4.4.0
     *
     * @return WP_Error|null WP_Error or null on not an errored response.
     */
    public function as_error()
    {
    }
    /**
     * Retrieves the CURIEs (compact URIs) used for relations.
     *
     * @since 4.5.0
     *
     * @return array Compact URIs.
     */
    public function get_curies()
    {
    }
}