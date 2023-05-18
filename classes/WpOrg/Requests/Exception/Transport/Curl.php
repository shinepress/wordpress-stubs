<?php

namespace WpOrg\Requests\Exception\Transport;

/**
 * CURL Transport Exception.
 *
 * @package Requests\Exceptions
 */
final class Curl extends \WpOrg\Requests\Exception\Transport
{
    const EASY = 'cURLEasy';
    const MULTI = 'cURLMulti';
    const SHARE = 'cURLShare';
    /**
     * Create a new exception.
     *
     * @param string $message Exception message.
     * @param string $type    Exception type.
     * @param mixed  $data    Associated data, if applicable.
     * @param int    $code    Exception numerical code, if applicable.
     */
    public function __construct($message, $type, $data = null, $code = 0)
    {
    }
    /**
     * Get the error message.
     *
     * @return string
     */
    public function getReason()
    {
    }
}