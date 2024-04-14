<?php


/**
 * Core class used for managing HTTP transports and making HTTP requests.
 *
 * This class is used to consistently make outgoing HTTP requests easy for developers
 * while still being compatible with the many PHP configurations under which
 * WordPress runs.
 *
 * Debugging includes several actions, which pass different variables for debugging the HTTP API.
 *
 * @since 2.7.0
 */
class WP_Http
{
    // Aliases for HTTP response codes.
    const HTTP_CONTINUE = 100;
    const SWITCHING_PROTOCOLS = 101;
    const PROCESSING = 102;
    const EARLY_HINTS = 103;
    const OK = 200;
    const CREATED = 201;
    const ACCEPTED = 202;
    const NON_AUTHORITATIVE_INFORMATION = 203;
    const NO_CONTENT = 204;
    const RESET_CONTENT = 205;
    const PARTIAL_CONTENT = 206;
    const MULTI_STATUS = 207;
    const IM_USED = 226;
    const MULTIPLE_CHOICES = 300;
    const MOVED_PERMANENTLY = 301;
    const FOUND = 302;
    const SEE_OTHER = 303;
    const NOT_MODIFIED = 304;
    const USE_PROXY = 305;
    const RESERVED = 306;
    const TEMPORARY_REDIRECT = 307;
    const PERMANENT_REDIRECT = 308;
    const BAD_REQUEST = 400;
    const UNAUTHORIZED = 401;
    const PAYMENT_REQUIRED = 402;
    const FORBIDDEN = 403;
    const NOT_FOUND = 404;
    const METHOD_NOT_ALLOWED = 405;
    const NOT_ACCEPTABLE = 406;
    const PROXY_AUTHENTICATION_REQUIRED = 407;
    const REQUEST_TIMEOUT = 408;
    const CONFLICT = 409;
    const GONE = 410;
    const LENGTH_REQUIRED = 411;
    const PRECONDITION_FAILED = 412;
    const REQUEST_ENTITY_TOO_LARGE = 413;
    const REQUEST_URI_TOO_LONG = 414;
    const UNSUPPORTED_MEDIA_TYPE = 415;
    const REQUESTED_RANGE_NOT_SATISFIABLE = 416;
    const EXPECTATION_FAILED = 417;
    const IM_A_TEAPOT = 418;
    const MISDIRECTED_REQUEST = 421;
    const UNPROCESSABLE_ENTITY = 422;
    const LOCKED = 423;
    const FAILED_DEPENDENCY = 424;
    const UPGRADE_REQUIRED = 426;
    const PRECONDITION_REQUIRED = 428;
    const TOO_MANY_REQUESTS = 429;
    const REQUEST_HEADER_FIELDS_TOO_LARGE = 431;
    const UNAVAILABLE_FOR_LEGAL_REASONS = 451;
    const INTERNAL_SERVER_ERROR = 500;
    const NOT_IMPLEMENTED = 501;
    const BAD_GATEWAY = 502;
    const SERVICE_UNAVAILABLE = 503;
    const GATEWAY_TIMEOUT = 504;
    const HTTP_VERSION_NOT_SUPPORTED = 505;
    const VARIANT_ALSO_NEGOTIATES = 506;
    const INSUFFICIENT_STORAGE = 507;
    const NOT_EXTENDED = 510;
    const NETWORK_AUTHENTICATION_REQUIRED = 511;
    /**
     * Send an HTTP request to a URI.
     *
     * Please note: The only URI that are supported in the HTTP Transport implementation
     * are the HTTP and HTTPS protocols.
     *
     * @since 2.7.0
     *
     * @param string       $url  The request URL.
     * @param string|array $args {
     *     Optional. Array or string of HTTP request arguments.
     *
     *     @type string       $method              Request method. Accepts 'GET', 'POST', 'HEAD', 'PUT', 'DELETE',
     *                                             'TRACE', 'OPTIONS', or 'PATCH'.
     *                                             Some transports technically allow others, but should not be
     *                                             assumed. Default 'GET'.
     *     @type float        $timeout             How long the connection should stay open in seconds. Default 5.
     *     @type int          $redirection         Number of allowed redirects. Not supported by all transports.
     *                                             Default 5.
     *     @type string       $httpversion         Version of the HTTP protocol to use. Accepts '1.0' and '1.1'.
     *                                             Default '1.0'.
     *     @type string       $user-agent          User-agent value sent.
     *                                             Default 'WordPress/' . get_bloginfo( 'version' ) . '; ' . get_bloginfo( 'url' ).
     *     @type bool         $reject_unsafe_urls  Whether to pass URLs through wp_http_validate_url().
     *                                             Default false.
     *     @type bool         $blocking            Whether the calling code requires the result of the request.
     *                                             If set to false, the request will be sent to the remote server,
     *                                             and processing returned to the calling code immediately, the caller
     *                                             will know if the request succeeded or failed, but will not receive
     *                                             any response from the remote server. Default true.
     *     @type string|array $headers             Array or string of headers to send with the request.
     *                                             Default empty array.
     *     @type array        $cookies             List of cookies to send with the request. Default empty array.
     *     @type string|array $body                Body to send with the request. Default null.
     *     @type bool         $compress            Whether to compress the $body when sending the request.
     *                                             Default false.
     *     @type bool         $decompress          Whether to decompress a compressed response. If set to false and
     *                                             compressed content is returned in the response anyway, it will
     *                                             need to be separately decompressed. Default true.
     *     @type bool         $sslverify           Whether to verify SSL for the request. Default true.
     *     @type string       $sslcertificates     Absolute path to an SSL certificate .crt file.
     *                                             Default ABSPATH . WPINC . '/certificates/ca-bundle.crt'.
     *     @type bool         $stream              Whether to stream to a file. If set to true and no filename was
     *                                             given, it will be dropped it in the WP temp dir and its name will
     *                                             be set using the basename of the URL. Default false.
     *     @type string       $filename            Filename of the file to write to when streaming. $stream must be
     *                                             set to true. Default null.
     *     @type int          $limit_response_size Size in bytes to limit the response to. Default null.
     *
     * }
     * @return array|WP_Error Array containing 'headers', 'body', 'response', 'cookies', 'filename'.
     *                        A WP_Error instance upon error.
     * @phpstan-param array{
     *   method?: string,
     *   timeout?: float,
     *   redirection?: int,
     *   httpversion?: string,
     *   user-agent?: string,
     *   reject_unsafe_urls?: bool,
     *   blocking?: bool,
     *   headers?: string|array,
     *   cookies?: array,
     *   body?: string|array,
     *   compress?: bool,
     *   decompress?: bool,
     *   sslverify?: bool,
     *   sslcertificates?: string,
     *   stream?: bool,
     *   filename?: string,
     *   limit_response_size?: int,
     * } $args
     * @phpstan-return array{headers: \Requests_Utility_CaseInsensitiveDictionary, body: string, response: array{code: int,message: string}, cookies: array<int, \WP_Http_Cookie>, filename: string|null, http_response: \WP_HTTP_Requests_Response}|\WP_Error
     */
    public function request($url, $args = array())
    {
    }
    /**
     * Normalizes cookies for using in Requests.
     *
     * @since 4.6.0
     *
     * @param array $cookies Array of cookies to send with the request.
     * @return Requests_Cookie_Jar Cookie holder object.
     */
    public static function normalize_cookies($cookies)
    {
    }
    /**
     * Match redirect behaviour to browser handling.
     *
     * Changes 302 redirects from POST to GET to match browser handling. Per
     * RFC 7231, user agents can deviate from the strict reading of the
     * specification for compatibility purposes.
     *
     * @since 4.6.0
     *
     * @param string            $location URL to redirect to.
     * @param array             $headers  Headers for the redirect.
     * @param string|array      $data     Body to send with the request.
     * @param array             $options  Redirect request options.
     * @param Requests_Response $original Response object.
     */
    public static function browser_redirect_compatibility($location, $headers, $data, &$options, $original)
    {
    }
    /**
     * Validate redirected URLs.
     *
     * @since 4.7.5
     *
     * @throws Requests_Exception On unsuccessful URL validation.
     * @param string $location URL to redirect to.
     */
    public static function validate_redirects($location)
    {
    }
    /**
     * Tests which transports are capable of supporting the request.
     *
     * @since 3.2.0
     *
     * @param array  $args Request arguments.
     * @param string $url  URL to request.
     * @return string|false Class name for the first transport that claims to support the request.
     *                      False if no transport claims to support the request.
     */
    public function _get_first_available_transport($args, $url = \null)
    {
    }
    /**
     * Uses the POST HTTP method.
     *
     * Used for sending data that is expected to be in the body.
     *
     * @since 2.7.0
     *
     * @param string       $url  The request URL.
     * @param string|array $args Optional. Override the defaults.
     * @return array|WP_Error Array containing 'headers', 'body', 'response', 'cookies', 'filename'.
     *                        A WP_Error instance upon error.
     * @phpstan-return array{headers: \Requests_Utility_CaseInsensitiveDictionary, body: string, response: array{code: int,message: string}, cookies: array<int, \WP_Http_Cookie>, filename: string|null, http_response: \WP_HTTP_Requests_Response}|\WP_Error
     */
    public function post($url, $args = array())
    {
    }
    /**
     * Uses the GET HTTP method.
     *
     * Used for sending data that is expected to be in the body.
     *
     * @since 2.7.0
     *
     * @param string       $url  The request URL.
     * @param string|array $args Optional. Override the defaults.
     * @return array|WP_Error Array containing 'headers', 'body', 'response', 'cookies', 'filename'.
     *                        A WP_Error instance upon error.
     * @phpstan-return array{headers: \Requests_Utility_CaseInsensitiveDictionary, body: string, response: array{code: int,message: string}, cookies: array<int, \WP_Http_Cookie>, filename: string|null, http_response: \WP_HTTP_Requests_Response}|\WP_Error
     */
    public function get($url, $args = array())
    {
    }
    /**
     * Uses the HEAD HTTP method.
     *
     * Used for sending data that is expected to be in the body.
     *
     * @since 2.7.0
     *
     * @param string       $url  The request URL.
     * @param string|array $args Optional. Override the defaults.
     * @return array|WP_Error Array containing 'headers', 'body', 'response', 'cookies', 'filename'.
     *                        A WP_Error instance upon error.
     * @phpstan-return array{headers: \Requests_Utility_CaseInsensitiveDictionary, body: string, response: array{code: int,message: string}, cookies: array<int, \WP_Http_Cookie>, filename: string|null, http_response: \WP_HTTP_Requests_Response}|\WP_Error
     */
    public function head($url, $args = array())
    {
    }
    /**
     * Parses the responses and splits the parts into headers and body.
     *
     * @since 2.7.0
     *
     * @param string $response The full response string.
     * @return array {
     *     Array with response headers and body.
     *
     *     @type string $headers HTTP response headers.
     *     @type string $body    HTTP response body.
     * }
     * @phpstan-return array{
     *   headers: string,
     *   body: string,
     * }
     */
    public static function processResponse($response)
    {
    }
    /**
     * Transforms header string into an array.
     *
     * @since 2.7.0
     *
     * @param string|array $headers The original headers. If a string is passed, it will be converted
     *                              to an array. If an array is passed, then it is assumed to be
     *                              raw header data with numeric keys with the headers as the values.
     *                              No headers must be passed that were already processed.
     * @param string       $url     Optional. The URL that was requested. Default empty.
     * @return array {
     *     Processed string headers. If duplicate headers are encountered,
     *     then a numbered array is returned as the value of that header-key.
     *
     *     @type array            $response {
     *          @type int    $code    The response status code. Default 0.
     *          @type string $message The response message. Default empty.
     *     }
     *     @type array            $newheaders The processed header data as a multidimensional array.
     *     @type WP_Http_Cookie[] $cookies    If the original headers contain the 'Set-Cookie' key,
     *                                        an array containing `WP_Http_Cookie` objects is returned.
     * }
     * @phpstan-return array{
     *   response: array,
     *   newheaders: array,
     *   cookies: WP_Http_Cookie[],
     * }
     */
    public static function processHeaders($headers, $url = '')
    {
    }
    /**
     * Takes the arguments for a ::request() and checks for the cookie array.
     *
     * If it's found, then it upgrades any basic name => value pairs to WP_Http_Cookie instances,
     * which are each parsed into strings and added to the Cookie: header (within the arguments array).
     * Edits the array by reference.
     *
     * @since 2.8.0
     *
     * @param array $r Full array of args passed into ::request()
     */
    public static function buildCookieHeader(&$r)
    {
    }
    /**
     * Decodes chunk transfer-encoding, based off the HTTP 1.1 specification.
     *
     * Based off the HTTP http_encoding_dechunk function.
     *
     * @link https://tools.ietf.org/html/rfc2616#section-19.4.6 Process for chunked decoding.
     *
     * @since 2.7.0
     *
     * @param string $body Body content.
     * @return string Chunked decoded body on success or raw body on failure.
     */
    public static function chunkTransferDecode($body)
    {
    }
    /**
     * Determines whether an HTTP API request to the given URL should be blocked.
     *
     * Those who are behind a proxy and want to prevent access to certain hosts may do so. This will
     * prevent plugins from working and core functionality, if you don't include `api.wordpress.org`.
     *
     * You block external URL requests by defining `WP_HTTP_BLOCK_EXTERNAL` as true in your `wp-config.php`
     * file and this will only allow localhost and your site to make requests. The constant
     * `WP_ACCESSIBLE_HOSTS` will allow additional hosts to go through for requests. The format of the
     * `WP_ACCESSIBLE_HOSTS` constant is a comma separated list of hostnames to allow, wildcard domains
     * are supported, eg `*.wordpress.org` will allow for all subdomains of `wordpress.org` to be contacted.
     *
     * @since 2.8.0
     *
     * @link https://core.trac.wordpress.org/ticket/8927 Allow preventing external requests.
     * @link https://core.trac.wordpress.org/ticket/14636 Allow wildcard domains in WP_ACCESSIBLE_HOSTS
     *
     * @param string $uri URI of url.
     * @return bool True to block, false to allow.
     */
    public function block_request($uri)
    {
    }
    /**
     * Used as a wrapper for PHP's parse_url() function that handles edgecases in < PHP 5.4.7.
     *
     * @deprecated 4.4.0 Use wp_parse_url()
     * @see wp_parse_url()
     *
     * @param string $url The URL to parse.
     * @return bool|array False on failure; Array of URL components on success;
     *                    See parse_url()'s return values.
     */
    protected static function parse_url($url)
    {
    }
    /**
     * Converts a relative URL to an absolute URL relative to a given URL.
     *
     * If an Absolute URL is provided, no processing of that URL is done.
     *
     * @since 3.4.0
     *
     * @param string $maybe_relative_path The URL which might be relative.
     * @param string $url                 The URL which $maybe_relative_path is relative to.
     * @return string An Absolute URL, in a failure condition where the URL cannot be parsed, the relative URL will be returned.
     */
    public static function make_absolute_url($maybe_relative_path, $url)
    {
    }
    /**
     * Handles an HTTP redirect and follows it if appropriate.
     *
     * @since 3.7.0
     *
     * @param string $url      The URL which was requested.
     * @param array  $args     The arguments which were used to make the request.
     * @param array  $response The response of the HTTP request.
     * @return array|false|WP_Error An HTTP API response array if the redirect is successfully followed,
     *                              false if no redirect is present, or a WP_Error object if there's an error.
     */
    public static function handle_redirects($url, $args, $response)
    {
    }
    /**
     * Determines if a specified string represents an IP address or not.
     *
     * This function also detects the type of the IP address, returning either
     * '4' or '6' to represent a IPv4 and IPv6 address respectively.
     * This does not verify if the IP is a valid IP, only that it appears to be
     * an IP address.
     *
     * @link http://home.deds.nl/~aeron/regex/ for IPv6 regex.
     *
     * @since 3.7.0
     *
     * @param string $maybe_ip A suspected IP address.
     * @return int|false Upon success, '4' or '6' to represent a IPv4 or IPv6 address, false upon failure
     */
    public static function is_ip_address($maybe_ip)
    {
    }
}