<?php


/**
 * HTTP Proxy connection interface
 *
 * @package Requests
 * @subpackage Proxy
 * @since 1.6
 */
/**
 * HTTP Proxy connection interface
 *
 * Provides a handler for connection via an HTTP proxy
 *
 * @package Requests
 * @subpackage Proxy
 * @since 1.6
 */
class Requests_Proxy_HTTP implements \Requests_Proxy
{
    /**
     * Proxy host and port
     *
     * Notation: "host:port" (eg 127.0.0.1:8080 or someproxy.com:3128)
     *
     * @var string
     */
    public $proxy;
    /**
     * Username
     *
     * @var string
     */
    public $user;
    /**
     * Password
     *
     * @var string
     */
    public $pass;
    /**
     * Do we need to authenticate? (ie username & password have been provided)
     *
     * @var boolean
     */
    public $use_authentication;
    /**
     * Constructor
     *
     * @since 1.6
     * @throws Requests_Exception On incorrect number of arguments (`authbasicbadargs`)
     * @param array|null $args Array of user and password. Must have exactly two elements
     */
    public function __construct($args = \null)
    {
    }
    /**
     * Register the necessary callbacks
     *
     * @since 1.6
     * @see curl_before_send
     * @see fsockopen_remote_socket
     * @see fsockopen_remote_host_path
     * @see fsockopen_header
     * @param Requests_Hooks $hooks Hook system
     */
    public function register(\Requests_Hooks $hooks)
    {
    }
    /**
     * Set cURL parameters before the data is sent
     *
     * @since 1.6
     * @param resource $handle cURL resource
     */
    public function curl_before_send(&$handle)
    {
    }
    /**
     * Alter remote socket information before opening socket connection
     *
     * @since 1.6
     * @param string $remote_socket Socket connection string
     */
    public function fsockopen_remote_socket(&$remote_socket)
    {
    }
    /**
     * Alter remote path before getting stream data
     *
     * @since 1.6
     * @param string $path Path to send in HTTP request string ("GET ...")
     * @param string $url Full URL we're requesting
     */
    public function fsockopen_remote_host_path(&$path, $url)
    {
    }
    /**
     * Add extra headers to the request before sending
     *
     * @since 1.6
     * @param string $out HTTP header string
     */
    public function fsockopen_header(&$out)
    {
    }
    /**
     * Get the authentication string (user:pass)
     *
     * @since 1.6
     * @return string
     */
    public function get_auth_string()
    {
    }
}