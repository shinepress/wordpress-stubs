<?php

namespace WpOrg\Requests\Exception;

/**
 * Exception for an invalid argument passed.
 *
 * @package Requests\Exceptions
 * @since   2.0.0
 */
final class InvalidArgument extends \InvalidArgumentException
{
    /**
     * Create a new invalid argument exception with a standardized text.
     *
     * @param int    $position The argument position in the function signature. 1-based.
     * @param string $name     The argument name in the function signature.
     * @param string $expected The argument type expected as a string.
     * @param string $received The actual argument type received.
     *
     * @return \WpOrg\Requests\Exception\InvalidArgument
     */
    public static function create($position, $name, $expected, $received)
    {
    }
}