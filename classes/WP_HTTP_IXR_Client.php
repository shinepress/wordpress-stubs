<?php


/**
 * WP_HTTP_IXR_Client
 *
 * @package WordPress
 * @since 3.1.0
 *
 */
class WP_HTTP_IXR_Client extends \IXR_Client
{
    public $scheme;
    /**
     * @var IXR_Error
     */
    public $error;
    /**
     * @param string $server
     * @param string|bool $path
     * @param int|bool $port
     * @param int $timeout
     */
    public function __construct($server, $path = \false, $port = \false, $timeout = 15)
    {
    }
    /**
     * @return bool
     */
    public function query()
    {
    }
}