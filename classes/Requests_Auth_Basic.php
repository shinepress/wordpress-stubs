<?php


/**
 * Basic Authentication provider
 *
 * @package Requests
 * @subpackage Authentication
 */
/**
 * Basic Authentication provider
 *
 * Provides a handler for Basic HTTP authentication via the Authorization
 * header.
 *
 * @package Requests
 * @subpackage Authentication
 */
class Requests_Auth_Basic implements \Requests_Auth
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
     * @throws Requests_Exception On incorrect number of arguments (`authbasicbadargs`)
     * @param array|null $args Array of user and password. Must have exactly two elements
     */
    public function __construct($args = \null)
    {
    }
    /**
     * Register the necessary callbacks
     *
     * @see curl_before_send
     * @see fsockopen_header
     * @param Requests_Hooks $hooks Hook system
     */
    public function register(\Requests_Hooks $hooks)
    {
    }
    /**
     * Set cURL parameters before the data is sent
     *
     * @param resource $handle cURL resource
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