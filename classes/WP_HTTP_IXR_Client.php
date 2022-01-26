<?php


/**
 * WP_HTTP_IXR_Client
 *
 * @package WordPress
 * @since 3.1.0
 */
class WP_HTTP_IXR_Client extends \IXR_Client
{
    public $scheme;
    /**
     * @var IXR_Error
     */
    public $error;
    /**
     * @param string       $server
     * @param string|false $path
     * @param int|false    $port
     * @param int          $timeout
     */
    public function __construct($server, $path = \false, $port = \false, $timeout = 15)
    {
    }
    /**
     * @since 3.1.0
     * @since 5.5.0 Formalized the existing `...$args` parameter by adding it
     *              to the function signature.
     *
     * @return bool
     */
    public function query(...$args)
    {
    }
}