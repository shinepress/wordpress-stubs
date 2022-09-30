<?php


/**
 * REST API: WP_REST_Request class
 *
 * @package WordPress
 * @subpackage REST_API
 * @since 4.4.0
 */
/**
 * Core class used to implement a REST request object.
 *
 * Contains data from the request, to be passed to the callback.
 *
 * Note: This implements ArrayAccess, and acts as an array of parameters when
 * used in that manner. It does not use ArrayObject (as we cannot rely on SPL),
 * so be aware it may have non-array behaviour in some cases.
 *
 * Note: When using features provided by ArrayAccess, be aware that WordPress deliberately
 * does not distinguish between arguments of the same name for different request methods.
 * For instance, in a request with `GET id=1` and `POST id=2`, `$request['id']` will equal
 * 2 (`POST`) not 1 (`GET`). For more precision between request methods, use
 * WP_REST_Request::get_body_params(), WP_REST_Request::get_url_params(), etc.
 *
 * @since 4.4.0
 *
 * @link https://www.php.net/manual/en/class.arrayaccess.php
 */
class WP_REST_Request implements \ArrayAccess
{
    /**
     * HTTP method.
     *
     * @since 4.4.0
     * @var string
     */
    protected $method = '';
    /**
     * Parameters passed to the request.
     *
     * These typically come from the `$_GET`, `$_POST` and `$_FILES`
     * superglobals when being created from the global scope.
     *
     * @since 4.4.0
     * @var array Contains GET, POST and FILES keys mapping to arrays of data.
     */
    protected $params;
    /**
     * HTTP headers for the request.
     *
     * @since 4.4.0
     * @var array Map of key to value. Key is always lowercase, as per HTTP specification.
     */
    protected $headers = array();
    /**
     * Body data.
     *
     * @since 4.4.0
     * @var string Binary data from the request.
     */
    protected $body = \null;
    /**
     * Route matched for the request.
     *
     * @since 4.4.0
     * @var string
     */
    protected $route;
    /**
     * Attributes (options) for the route that was matched.
     *
     * This is the options array used when the route was registered, typically
     * containing the callback as well as the valid methods for the route.
     *
     * @since 4.4.0
     * @var array Attributes for the request.
     */
    protected $attributes = array();
    /**
     * Used to determine if the JSON data has been parsed yet.
     *
     * Allows lazy-parsing of JSON data where possible.
     *
     * @since 4.4.0
     * @var bool
     */
    protected $parsed_json = \false;
    /**
     * Used to determine if the body data has been parsed yet.
     *
     * @since 4.4.0
     * @var bool
     */
    protected $parsed_body = \false;
    /**
     * Constructor.
     *
     * @since 4.4.0
     *
     * @param string $method     Optional. Request method. Default empty.
     * @param string $route      Optional. Request route. Default empty.
     * @param array  $attributes Optional. Request attributes. Default empty array.
     */
    public function __construct($method = '', $route = '', $attributes = array())
    {
    }
    /**
     * Retrieves the HTTP method for the request.
     *
     * @since 4.4.0
     *
     * @return string HTTP method.
     */
    public function get_method()
    {
    }
    /**
     * Sets HTTP method for the request.
     *
     * @since 4.4.0
     *
     * @param string $method HTTP method.
     */
    public function set_method($method)
    {
    }
    /**
     * Retrieves all headers from the request.
     *
     * @since 4.4.0
     *
     * @return array Map of key to value. Key is always lowercase, as per HTTP specification.
     */
    public function get_headers()
    {
    }
    /**
     * Canonicalizes the header name.
     *
     * Ensures that header names are always treated the same regardless of
     * source. Header names are always case insensitive.
     *
     * Note that we treat `-` (dashes) and `_` (underscores) as the same
     * character, as per header parsing rules in both Apache and nginx.
     *
     * @link https://stackoverflow.com/q/18185366
     * @link https://www.nginx.com/resources/wiki/start/topics/tutorials/config_pitfalls/#missing-disappearing-http-headers
     * @link https://nginx.org/en/docs/http/ngx_http_core_module.html#underscores_in_headers
     *
     * @since 4.4.0
     *
     * @param string $key Header name.
     * @return string Canonicalized name.
     */
    public static function canonicalize_header_name($key)
    {
    }
    /**
     * Retrieves the given header from the request.
     *
     * If the header has multiple values, they will be concatenated with a comma
     * as per the HTTP specification. Be aware that some non-compliant headers
     * (notably cookie headers) cannot be joined this way.
     *
     * @since 4.4.0
     *
     * @param string $key Header name, will be canonicalized to lowercase.
     * @return string|null String value if set, null otherwise.
     */
    public function get_header($key)
    {
    }
    /**
     * Retrieves header values from the request.
     *
     * @since 4.4.0
     *
     * @param string $key Header name, will be canonicalized to lowercase.
     * @return array|null List of string values if set, null otherwise.
     */
    public function get_header_as_array($key)
    {
    }
    /**
     * Sets the header on request.
     *
     * @since 4.4.0
     *
     * @param string $key   Header name.
     * @param string $value Header value, or list of values.
     */
    public function set_header($key, $value)
    {
    }
    /**
     * Appends a header value for the given header.
     *
     * @since 4.4.0
     *
     * @param string $key   Header name.
     * @param string $value Header value, or list of values.
     */
    public function add_header($key, $value)
    {
    }
    /**
     * Removes all values for a header.
     *
     * @since 4.4.0
     *
     * @param string $key Header name.
     */
    public function remove_header($key)
    {
    }
    /**
     * Sets headers on the request.
     *
     * @since 4.4.0
     *
     * @param array $headers  Map of header name to value.
     * @param bool  $override If true, replace the request's headers. Otherwise, merge with existing.
     */
    public function set_headers($headers, $override = \true)
    {
    }
    /**
     * Retrieves the content-type of the request.
     *
     * @since 4.4.0
     *
     * @return array|null Map containing 'value' and 'parameters' keys
     *                    or null when no valid content-type header was
     *                    available.
     */
    public function get_content_type()
    {
    }
    /**
     * Checks if the request has specified a JSON content-type.
     *
     * @since 5.6.0
     *
     * @return bool True if the content-type header is JSON.
     */
    public function is_json_content_type()
    {
    }
    /**
     * Retrieves the parameter priority order.
     *
     * Used when checking parameters in WP_REST_Request::get_param().
     *
     * @since 4.4.0
     *
     * @return string[] Array of types to check, in order of priority.
     */
    protected function get_parameter_order()
    {
    }
    /**
     * Retrieves a parameter from the request.
     *
     * @since 4.4.0
     *
     * @param string $key Parameter name.
     * @return mixed|null Value if set, null otherwise.
     */
    public function get_param($key)
    {
    }
    /**
     * Checks if a parameter exists in the request.
     *
     * This allows distinguishing between an omitted parameter,
     * and a parameter specifically set to null.
     *
     * @since 5.3.0
     *
     * @param string $key Parameter name.
     * @return bool True if a param exists for the given key.
     */
    public function has_param($key)
    {
    }
    /**
     * Sets a parameter on the request.
     *
     * If the given parameter key exists in any parameter type an update will take place,
     * otherwise a new param will be created in the first parameter type (respecting
     * get_parameter_order()).
     *
     * @since 4.4.0
     *
     * @param string $key   Parameter name.
     * @param mixed  $value Parameter value.
     */
    public function set_param($key, $value)
    {
    }
    /**
     * Retrieves merged parameters from the request.
     *
     * The equivalent of get_param(), but returns all parameters for the request.
     * Handles merging all the available values into a single array.
     *
     * @since 4.4.0
     *
     * @return array Map of key to value.
     */
    public function get_params()
    {
    }
    /**
     * Retrieves parameters from the route itself.
     *
     * These are parsed from the URL using the regex.
     *
     * @since 4.4.0
     *
     * @return array Parameter map of key to value.
     */
    public function get_url_params()
    {
    }
    /**
     * Sets parameters from the route.
     *
     * Typically, this is set after parsing the URL.
     *
     * @since 4.4.0
     *
     * @param array $params Parameter map of key to value.
     */
    public function set_url_params($params)
    {
    }
    /**
     * Retrieves parameters from the query string.
     *
     * These are the parameters you'd typically find in `$_GET`.
     *
     * @since 4.4.0
     *
     * @return array Parameter map of key to value
     */
    public function get_query_params()
    {
    }
    /**
     * Sets parameters from the query string.
     *
     * Typically, this is set from `$_GET`.
     *
     * @since 4.4.0
     *
     * @param array $params Parameter map of key to value.
     */
    public function set_query_params($params)
    {
    }
    /**
     * Retrieves parameters from the body.
     *
     * These are the parameters you'd typically find in `$_POST`.
     *
     * @since 4.4.0
     *
     * @return array Parameter map of key to value.
     */
    public function get_body_params()
    {
    }
    /**
     * Sets parameters from the body.
     *
     * Typically, this is set from `$_POST`.
     *
     * @since 4.4.0
     *
     * @param array $params Parameter map of key to value.
     */
    public function set_body_params($params)
    {
    }
    /**
     * Retrieves multipart file parameters from the body.
     *
     * These are the parameters you'd typically find in `$_FILES`.
     *
     * @since 4.4.0
     *
     * @return array Parameter map of key to value
     */
    public function get_file_params()
    {
    }
    /**
     * Sets multipart file parameters from the body.
     *
     * Typically, this is set from `$_FILES`.
     *
     * @since 4.4.0
     *
     * @param array $params Parameter map of key to value.
     */
    public function set_file_params($params)
    {
    }
    /**
     * Retrieves the default parameters.
     *
     * These are the parameters set in the route registration.
     *
     * @since 4.4.0
     *
     * @return array Parameter map of key to value
     */
    public function get_default_params()
    {
    }
    /**
     * Sets default parameters.
     *
     * These are the parameters set in the route registration.
     *
     * @since 4.4.0
     *
     * @param array $params Parameter map of key to value.
     */
    public function set_default_params($params)
    {
    }
    /**
     * Retrieves the request body content.
     *
     * @since 4.4.0
     *
     * @return string Binary data from the request body.
     */
    public function get_body()
    {
    }
    /**
     * Sets body content.
     *
     * @since 4.4.0
     *
     * @param string $data Binary data from the request body.
     */
    public function set_body($data)
    {
    }
    /**
     * Retrieves the parameters from a JSON-formatted body.
     *
     * @since 4.4.0
     *
     * @return array Parameter map of key to value.
     */
    public function get_json_params()
    {
    }
    /**
     * Parses the JSON parameters.
     *
     * Avoids parsing the JSON data until we need to access it.
     *
     * @since 4.4.0
     * @since 4.7.0 Returns error instance if value cannot be decoded.
     * @return true|WP_Error True if the JSON data was passed or no JSON data was provided, WP_Error if invalid JSON was passed.
     */
    protected function parse_json_params()
    {
    }
    /**
     * Parses the request body parameters.
     *
     * Parses out URL-encoded bodies for request methods that aren't supported
     * natively by PHP. In PHP 5.x, only POST has these parsed automatically.
     *
     * @since 4.4.0
     */
    protected function parse_body_params()
    {
    }
    /**
     * Retrieves the route that matched the request.
     *
     * @since 4.4.0
     *
     * @return string Route matching regex.
     */
    public function get_route()
    {
    }
    /**
     * Sets the route that matched the request.
     *
     * @since 4.4.0
     *
     * @param string $route Route matching regex.
     */
    public function set_route($route)
    {
    }
    /**
     * Retrieves the attributes for the request.
     *
     * These are the options for the route that was matched.
     *
     * @since 4.4.0
     *
     * @return array Attributes for the request.
     */
    public function get_attributes()
    {
    }
    /**
     * Sets the attributes for the request.
     *
     * @since 4.4.0
     *
     * @param array $attributes Attributes for the request.
     */
    public function set_attributes($attributes)
    {
    }
    /**
     * Sanitizes (where possible) the params on the request.
     *
     * This is primarily based off the sanitize_callback param on each registered
     * argument.
     *
     * @since 4.4.0
     *
     * @return true|WP_Error True if parameters were sanitized, WP_Error if an error occurred during sanitization.
     */
    public function sanitize_params()
    {
    }
    /**
     * Checks whether this request is valid according to its attributes.
     *
     * @since 4.4.0
     *
     * @return true|WP_Error True if there are no parameters to validate or if all pass validation,
     *                       WP_Error if required parameters are missing.
     */
    public function has_valid_params()
    {
    }
    /**
     * Checks if a parameter is set.
     *
     * @since 4.4.0
     *
     * @param string $offset Parameter name.
     * @return bool Whether the parameter is set.
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
    }
    /**
     * Retrieves a parameter from the request.
     *
     * @since 4.4.0
     *
     * @param string $offset Parameter name.
     * @return mixed|null Value if set, null otherwise.
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
    }
    /**
     * Sets a parameter on the request.
     *
     * @since 4.4.0
     *
     * @param string $offset Parameter name.
     * @param mixed  $value  Parameter value.
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
    }
    /**
     * Removes a parameter from the request.
     *
     * @since 4.4.0
     *
     * @param string $offset Parameter name.
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
    }
    /**
     * Retrieves a WP_REST_Request object from a full URL.
     *
     * @since 4.5.0
     *
     * @param string $url URL with protocol, domain, path and query args.
     * @return WP_REST_Request|false WP_REST_Request object on success, false on failure.
     */
    public static function from_url($url)
    {
    }
}