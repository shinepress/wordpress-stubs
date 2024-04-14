<?php


/**
 * HTTP API: WP_HTTP_Requests_Response class
 *
 * @package WordPress
 * @subpackage HTTP
 * @since 4.6.0
 */
/**
 * Core wrapper object for a WpOrg\Requests\Response for standardization.
 *
 * @since 4.6.0
 *
 * @see WP_HTTP_Response
 */
class WP_HTTP_Requests_Response extends \WP_HTTP_Response
{
    /**
     * Requests Response object.
     *
     * @since 4.6.0
     * @var \WpOrg\Requests\Response
     */
    protected $response;
    /**
     * Filename the response was saved to.
     *
     * @since 4.6.0
     * @var string|null
     */
    protected $filename;
    /**
     * Constructor.
     *
     * @since 4.6.0
     *
     * @param \WpOrg\Requests\Response $response HTTP response.
     * @param string                   $filename Optional. File name. Default empty.
     */
    public function __construct(\WpOrg\Requests\Response $response, $filename = '')
    {
    }
    /**
     * Retrieves the response object for the request.
     *
     * @since 4.6.0
     *
     * @return WpOrg\Requests\Response HTTP response.
     */
    public function get_response_object()
    {
    }
    /**
     * Retrieves headers associated with the response.
     *
     * @since 4.6.0
     *
     * @return \WpOrg\Requests\Utility\CaseInsensitiveDictionary Map of header name to header value.
     */
    public function get_headers()
    {
    }
    /**
     * Sets all header values.
     *
     * @since 4.6.0
     *
     * @param array $headers Map of header name to header value.
     */
    public function set_headers($headers)
    {
    }
    /**
     * Sets a single HTTP header.
     *
     * @since 4.6.0
     *
     * @param string $key     Header name.
     * @param string $value   Header value.
     * @param bool   $replace Optional. Whether to replace an existing header of the same name.
     *                        Default true.
     */
    public function header($key, $value, $replace = \true)
    {
    }
    /**
     * Retrieves the HTTP return code for the response.
     *
     * @since 4.6.0
     *
     * @return int The 3-digit HTTP status code.
     */
    public function get_status()
    {
    }
    /**
     * Sets the 3-digit HTTP status code.
     *
     * @since 4.6.0
     *
     * @param int $code HTTP status.
     */
    public function set_status($code)
    {
    }
    /**
     * Retrieves the response data.
     *
     * @since 4.6.0
     *
     * @return string Response data.
     */
    public function get_data()
    {
    }
    /**
     * Sets the response data.
     *
     * @since 4.6.0
     *
     * @param string $data Response data.
     */
    public function set_data($data)
    {
    }
    /**
     * Retrieves cookies from the response.
     *
     * @since 4.6.0
     *
     * @return WP_HTTP_Cookie[] List of cookie objects.
     */
    public function get_cookies()
    {
    }
    /**
     * Converts the object to a WP_Http response array.
     *
     * @since 4.6.0
     *
     * @return array WP_Http response array, per WP_Http::request().
     */
    public function to_array()
    {
    }
}