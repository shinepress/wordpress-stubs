<?php

namespace WpOrg\Requests\Exception\Http;

/**
 * Exception for unknown status responses
 *
 * @package Requests\Exceptions
 */
final class StatusUnknown extends \WpOrg\Requests\Exception\Http
{
    /**
     * Create a new exception
     *
     * If `$data` is an instance of {@see \WpOrg\Requests\Response}, uses the status
     * code from it. Otherwise, sets as 0
     *
     * @param string|null $reason Reason phrase
     * @param mixed $data Associated data
     */
    public function __construct($reason = null, $data = null)
    {
    }
}