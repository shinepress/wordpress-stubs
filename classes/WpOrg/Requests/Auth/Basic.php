<?php

namespace WpOrg\Requests\Auth;

/**
 * Basic Authentication provider
 *
 * Provides a handler for Basic HTTP authentication via the Authorization
 * header.
 *
 * @package Requests\Authentication
 */
class Basic implements \WpOrg\Requests\Auth
{
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
     * Constructor
     *
     * @since 2.0 Throws an `InvalidArgument` exception.
     * @since 2.0 Throws an `ArgumentCount` exception instead of the Requests base `Exception.
     *
     * @param array|null $args Array of user and password. Must have exactly two elements
     *
     * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed argument is not an array or null.
     * @throws \WpOrg\Requests\Exception\ArgumentCount   On incorrect number of array elements (`authbasicbadargs`).
     */
    public function __construct($args = null)
    {
    }
    /**
     * Register the necessary callbacks
     *
     * @see \WpOrg\Requests\Auth\Basic::curl_before_send()
     * @see \WpOrg\Requests\Auth\Basic::fsockopen_header()
     * @param \WpOrg\Requests\Hooks $hooks Hook system
     */
    public function register(\WpOrg\Requests\Hooks $hooks)
    {
    }
    /**
     * Set cURL parameters before the data is sent
     *
     * @param resource|\CurlHandle $handle cURL handle
     */
    public function curl_before_send(&$handle)
    {
    }
    /**
     * Add extra headers to the request before sending
     *
     * @param string $out HTTP header string
     */
    public function fsockopen_header(&$out)
    {
    }
    /**
     * Get the authentication string (user:pass)
     *
     * @return string
     */
    public function getAuthString()
    {
    }
}