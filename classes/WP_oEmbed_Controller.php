<?php


/**
 * WP_oEmbed_Controller class, used to provide an oEmbed endpoint.
 *
 * @package WordPress
 * @subpackage Embeds
 * @since 4.4.0
 */
/**
 * oEmbed API endpoint controller.
 *
 * Registers the API route and delivers the response data.
 * The output format (XML or JSON) is handled by the REST API.
 *
 * @since 4.4.0
 */
final class WP_oEmbed_Controller
{
    /**
     * Register the oEmbed REST API route.
     *
     * @since 4.4.0
     * @access public
     */
    public function register_routes()
    {
    }
    /**
     * Callback for the embed API endpoint.
     *
     * Returns the JSON object for the post.
     *
     * @since 4.4.0
     * @access public
     *
     * @param WP_REST_Request $request Full data about the request.
     * @return WP_Error|array oEmbed response data or WP_Error on failure.
     */
    public function get_item($request)
    {
    }
    /**
     * Checks if current user can make a proxy oEmbed request.
     *
     * @since 4.8.0
     * @access public
     *
     * @return true|WP_Error True if the request has read access, WP_Error object otherwise.
     */
    public function get_proxy_item_permissions_check()
    {
    }
    /**
     * Callback for the proxy API endpoint.
     *
     * Returns the JSON object for the proxied item.
     *
     * @since 4.8.0
     * @access public
     *
     * @see WP_oEmbed::get_html()
     * @param WP_REST_Request $request Full data about the request.
     * @return object|WP_Error oEmbed response data or WP_Error on failure.
     */
    public function get_proxy_item($request)
    {
    }
}