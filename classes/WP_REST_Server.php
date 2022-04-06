<?php


/**
 * REST API: WP_REST_Server class
 *
 * @package WordPress
 * @subpackage REST_API
 * @since 4.4.0
 */
/**
 * Core class used to implement the WordPress REST API server.
 *
 * @since 4.4.0
 */
class WP_REST_Server
{
    /**
     * Alias for GET transport method.
     *
     * @since 4.4.0
     * @var string
     */
    const READABLE = 'GET';
    /**
     * Alias for POST transport method.
     *
     * @since 4.4.0
     * @var string
     */
    const CREATABLE = 'POST';
    /**
     * Alias for POST, PUT, PATCH transport methods together.
     *
     * @since 4.4.0
     * @var string
     */
    const EDITABLE = 'POST, PUT, PATCH';
    /**
     * Alias for DELETE transport method.
     *
     * @since 4.4.0
     * @var string
     */
    const DELETABLE = 'DELETE';
    /**
     * Alias for GET, POST, PUT, PATCH & DELETE transport methods together.
     *
     * @since 4.4.0
     * @var string
     */
    const ALLMETHODS = 'GET, POST, PUT, PATCH, DELETE';
    /**
     * Namespaces registered to the server.
     *
     * @since 4.4.0
     * @var array
     */
    protected $namespaces = array();
    /**
     * Endpoints registered to the server.
     *
     * @since 4.4.0
     * @var array
     */
    protected $endpoints = array();
    /**
     * Options defined for the routes.
     *
     * @since 4.4.0
     * @var array
     */
    protected $route_options = array();
    /**
     * Instantiates the REST server.
     *
     * @since 4.4.0
     */
    public function __construct()
    {
    }
    /**
     * Checks the authentication headers if supplied.
     *
     * @since 4.4.0
     *
     * @return WP_Error|null WP_Error indicates unsuccessful login, null indicates successful
     *                       or no authentication provided
     */
    public function check_authentication()
    {
    }
    /**
     * Converts an error to a response object.
     *
     * This iterates over all error codes and messages to change it into a flat
     * array. This enables simpler client behaviour, as it is represented as a
     * list in JSON rather than an object/map.
     *
     * @since 4.4.0
     *
     * @param WP_Error $error WP_Error instance.
     * @return WP_REST_Response List of associative arrays with code and message keys.
     */
    protected function error_to_response($error)
    {
    }
    /**
     * Retrieves an appropriate error representation in JSON.
     *
     * Note: This should only be used in WP_REST_Server::serve_request(), as it
     * cannot handle WP_Error internally. All callbacks and other internal methods
     * should instead return a WP_Error with the data set to an array that includes
     * a 'status' key, with the value being the HTTP status to send.
     *
     * @since 4.4.0
     *
     * @param string $code    WP_Error-style code.
     * @param string $message Human-readable message.
     * @param int    $status  Optional. HTTP status code to send. Default null.
     * @return string JSON representation of the error
     */
    protected function json_error($code, $message, $status = \null)
    {
    }
    /**
     * Handles serving an API request.
     *
     * Matches the current server URI to a route and runs the first matching
     * callback then outputs a JSON representation of the returned value.
     *
     * @since 4.4.0
     *
     * @see WP_REST_Server::dispatch()
     *
     * @param string $path Optional. The request route. If not set, `$_SERVER['PATH_INFO']` will be used.
     *                     Default null.
     * @return false|null Null if not served and a HEAD request, false otherwise.
     */
    public function serve_request($path = \null)
    {
    }
    /**
     * Converts a response to data to send.
     *
     * @since 4.4.0
     *
     * @param WP_REST_Response $response Response object.
     * @param bool             $embed    Whether links should be embedded.
     * @return array {
     *     Data with sub-requests embedded.
     *
     *     @type array [$_links]    Links.
     *     @type array [$_embedded] Embeddeds.
     * }
     */
    public function response_to_data($response, $embed)
    {
    }
    /**
     * Retrieves links from a response.
     *
     * Extracts the links from a response into a structured hash, suitable for
     * direct output.
     *
     * @since 4.4.0
     *
     * @param WP_REST_Response $response Response to extract links from.
     * @return array Map of link relation to list of link hashes.
     */
    public static function get_response_links($response)
    {
    }
    /**
     * Retrieves the CURIEs (compact URIs) used for relations.
     *
     * Extracts the links from a response into a structured hash, suitable for
     * direct output.
     *
     * @since 4.5.0
     *
     * @param WP_REST_Response $response Response to extract links from.
     * @return array Map of link relation to list of link hashes.
     */
    public static function get_compact_response_links($response)
    {
    }
    /**
     * Embeds the links from the data into the request.
     *
     * @since 4.4.0
     *
     * @param array $data Data from the request.
     * @return array {
     *     Data with sub-requests embedded.
     *
     *     @type array [$_links]    Links.
     *     @type array [$_embedded] Embeddeds.
     * }
     */
    protected function embed_links($data)
    {
    }
    /**
     * Wraps the response in an envelope.
     *
     * The enveloping technique is used to work around browser/client
     * compatibility issues. Essentially, it converts the full HTTP response to
     * data instead.
     *
     * @since 4.4.0
     *
     * @param WP_REST_Response $response Response object.
     * @param bool             $embed    Whether links should be embedded.
     * @return WP_REST_Response New response with wrapped data
     */
    public function envelope_response($response, $embed)
    {
    }
    /**
     * Registers a route to the server.
     *
     * @since 4.4.0
     *
     * @param string $namespace  Namespace.
     * @param string $route      The REST route.
     * @param array  $route_args Route arguments.
     * @param bool   $override   Optional. Whether the route should be overridden if it already exists.
     *                           Default false.
     */
    public function register_route($namespace, $route, $route_args, $override = \false)
    {
    }
    /**
     * Retrieves the route map.
     *
     * The route map is an associative array with path regexes as the keys. The
     * value is an indexed array with the callback function/method as the first
     * item, and a bitmask of HTTP methods as the second item (see the class
     * constants).
     *
     * Each route can be mapped to more than one callback by using an array of
     * the indexed arrays. This allows mapping e.g. GET requests to one callback
     * and POST requests to another.
     *
     * Note that the path regexes (array keys) must have @ escaped, as this is
     * used as the delimiter with preg_match()
     *
     * @since 4.4.0
     *
     * @return array `'/path/regex' => array( $callback, $bitmask )` or
     *               `'/path/regex' => array( array( $callback, $bitmask ), ...)`.
     */
    public function get_routes()
    {
    }
    /**
     * Retrieves namespaces registered on the server.
     *
     * @since 4.4.0
     *
     * @return array List of registered namespaces.
     */
    public function get_namespaces()
    {
    }
    /**
     * Retrieves specified options for a route.
     *
     * @since 4.4.0
     *
     * @param string $route Route pattern to fetch options for.
     * @return array|null Data as an associative array if found, or null if not found.
     */
    public function get_route_options($route)
    {
    }
    /**
     * Matches the request to a callback and call it.
     *
     * @since 4.4.0
     *
     * @param WP_REST_Request $request Request to attempt dispatching.
     * @return WP_REST_Response Response returned by the callback.
     */
    public function dispatch($request)
    {
    }
    /**
     * Returns if an error occurred during most recent JSON encode/decode.
     *
     * Strings to be translated will be in format like
     * "Encoding error: Maximum stack depth exceeded".
     *
     * @since 4.4.0
     *
     * @return bool|string Boolean false or string error message.
     */
    protected function get_json_last_error()
    {
    }
    /**
     * Retrieves the site index.
     *
     * This endpoint describes the capabilities of the site.
     *
     * @since 4.4.0
     *
     * @param array $request {
     *     Request.
     *
     *     @type string $context Context.
     * }
     * @return array Index entity
     * @phpstan-param array{
     *   context?: string,
     * } $request
     */
    public function get_index($request)
    {
    }
    /**
     * Retrieves the index for a namespace.
     *
     * @since 4.4.0
     *
     * @param WP_REST_Request $request REST request instance.
     * @return WP_REST_Response|WP_Error WP_REST_Response instance if the index was found,
     *                                   WP_Error if the namespace isn't set.
     */
    public function get_namespace_index($request)
    {
    }
    /**
     * Retrieves the publicly-visible data for routes.
     *
     * @since 4.4.0
     *
     * @param array  $routes  Routes to get data for.
     * @param string $context Optional. Context for data. Accepts 'view' or 'help'. Default 'view'.
     * @return array Route data to expose in indexes.
     */
    public function get_data_for_routes($routes, $context = 'view')
    {
    }
    /**
     * Retrieves publicly-visible data for the route.
     *
     * @since 4.4.0
     *
     * @param string $route     Route to get data for.
     * @param array  $callbacks Callbacks to convert to data.
     * @param string $context   Optional. Context for the data. Accepts 'view' or 'help'. Default 'view'.
     * @return array|null Data for the route, or null if no publicly-visible data.
     */
    public function get_data_for_route($route, $callbacks, $context = 'view')
    {
    }
    /**
     * Sends an HTTP status code.
     *
     * @since 4.4.0
     *
     * @param int $code HTTP status.
     */
    protected function set_status($code)
    {
    }
    /**
     * Sends an HTTP header.
     *
     * @since 4.4.0
     *
     * @param string $key Header key.
     * @param string $value Header value.
     */
    public function send_header($key, $value)
    {
    }
    /**
     * Sends multiple HTTP headers.
     *
     * @since 4.4.0
     *
     * @param array $headers Map of header name to header value.
     */
    public function send_headers($headers)
    {
    }
    /**
     * Removes an HTTP header from the current response.
     *
     * @since 4.8.0
     *
     * @param string $key Header key.
     */
    public function remove_header($key)
    {
    }
    /**
     * Retrieves the raw request entity (body).
     *
     * @since 4.4.0
     *
     * @global string $HTTP_RAW_POST_DATA Raw post data.
     *
     * @return string Raw request data.
     */
    public static function get_raw_data()
    {
    }
    /**
     * Extracts headers from a PHP-style $_SERVER array.
     *
     * @since 4.4.0
     *
     * @param array $server Associative array similar to `$_SERVER`.
     * @return array Headers extracted from the input.
     */
    public function get_headers($server)
    {
    }
}