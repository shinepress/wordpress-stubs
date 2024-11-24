<?php


/**
 * IXR_Client
 *
 * @package IXR
 * @since 1.5.0
 *
 */
class IXR_Client
{
    var $server;
    var $port;
    var $path;
    var $useragent;
    var $response;
    var $message = \false;
    var $debug = \false;
    var $timeout;
    var $headers = array();
    var $error = \false;
    /**
     * PHP5 constructor.
     */
    function __construct($server, $path = \false, $port = 80, $timeout = 15)
    {
    }
    /**
     * PHP4 constructor.
     */
    public function IXR_Client($server, $path = \false, $port = 80, $timeout = 15)
    {
    }
    /**
     * @since 1.5.0
     * @since 5.5.0 Formalized the existing `...$args` parameter by adding it
     *              to the function signature.
     *
     * @return bool
     */
    function query(...$args)
    {
    }
    function getResponse()
    {
    }
    function isError()
    {
    }
    function getErrorCode()
    {
    }
    function getErrorMessage()
    {
    }
}