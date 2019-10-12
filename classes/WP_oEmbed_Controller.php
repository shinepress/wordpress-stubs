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
     * Callback for the API endpoint.
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
}