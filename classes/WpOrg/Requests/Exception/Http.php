<?php

namespace WpOrg\Requests\Exception;

/**
 * Exception based on HTTP response
 *
 * @package Requests\Exceptions
 */
class Http extends \WpOrg\Requests\Exception
{
    /**
     * HTTP status code
     *
     * @var integer
     */
    protected $code = 0;
    /**
     * Reason phrase
     *
     * @var string
     */
    protected $reason = 'Unknown';
    /**
     * Create a new exception
     *
     * There is no mechanism to pass in the status code, as this is set by the
     * subclass used. Reason phrases can vary, however.
     *
     * @param string|null $reason Reason phrase
     * @param mixed $data Associated data
     */
    public function __construct($reason = null, $data = null)
    {
    }
    /**
     * Get the status message.
     *
     * @return string
     */
    public function getReason()
    {
    }
    /**
     * Get the correct exception class for a given error code
     *
     * @param int|bool $code HTTP status code, or false if unavailable
     * @return string Exception class name to use
     */
    public static function get_class($code)
    {
    }
}