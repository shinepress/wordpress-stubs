<?php

namespace WpOrg\Requests\Proxy;

/**
 * HTTP Proxy connection interface
 *
 * Provides a handler for connection via an HTTP proxy
 *
 * @package Requests\Proxy
 * @since   1.6
 */
final class Http implements \WpOrg\Requests\Proxy
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
     *
     * @param array|string|null $args Proxy as a string or an array of proxy, user and password.
     *                                When passed as an array, must have exactly one (proxy)
     *                                or three elements (proxy, user, password).
     *
     * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed argument is not an array, a string or null.
     * @throws \WpOrg\Requests\Exception\ArgumentCount On incorrect number of arguments (`proxyhttpbadargs`)
     */
    public function __construct($args = null)
    {
    }
    /**
     * Register the necessary callbacks
     *
     * @since 1.6
     * @see \WpOrg\Requests\Proxy\Http::curl_before_send()
     * @see \WpOrg\Requests\Proxy\Http::fsockopen_remote_socket()
     * @see \WpOrg\Requests\Proxy\Http::fsockopen_remote_host_path()
     * @see \WpOrg\Requests\Proxy\Http::fsockopen_header()
     * @param \WpOrg\Requests\Hooks $hooks Hook system
     */
    public function register(\WpOrg\Requests\Hooks $hooks)
    {
    }
    /**
     * Set cURL parameters before the data is sent
     *
     * @since 1.6
     * @param resource|\CurlHandle $handle cURL handle
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