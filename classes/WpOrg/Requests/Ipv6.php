<?php

namespace WpOrg\Requests;

/**
 * Class to validate and to work with IPv6 addresses
 *
 * This was originally based on the PEAR class of the same name, but has been
 * entirely rewritten.
 *
 * @package Requests\Utilities
 */
final class Ipv6
{
    /**
     * Uncompresses an IPv6 address
     *
     * RFC 4291 allows you to compress consecutive zero pieces in an address to
     * '::'. This method expects a valid IPv6 address and expands the '::' to
     * the required number of zero pieces.
     *
     * Example:  FF01::101   ->  FF01:0:0:0:0:0:0:101
     *           ::1         ->  0:0:0:0:0:0:0:1
     *
     * @author Alexander Merz <alexander.merz@web.de>
     * @author elfrink at introweb dot nl
     * @author Josh Peck <jmp at joshpeck dot org>
     * @copyright 2003-2005 The PHP Group
     * @license https://opensource.org/licenses/bsd-license.php
     *
     * @param string|Stringable $ip An IPv6 address
     * @return string The uncompressed IPv6 address
     *
     * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed argument is not a string or a stringable object.
     */
    public static function uncompress($ip)
    {
    }
    /**
     * Compresses an IPv6 address
     *
     * RFC 4291 allows you to compress consecutive zero pieces in an address to
     * '::'. This method expects a valid IPv6 address and compresses consecutive
     * zero pieces to '::'.
     *
     * Example:  FF01:0:0:0:0:0:0:101   ->  FF01::101
     *           0:0:0:0:0:0:0:1        ->  ::1
     *
     * @see \WpOrg\Requests\Ipv6::uncompress()
     *
     * @param string $ip An IPv6 address
     * @return string The compressed IPv6 address
     */
    public static function compress($ip)
    {
    }
    /**
     * Checks an IPv6 address
     *
     * Checks if the given IP is a valid IPv6 address
     *
     * @param string $ip An IPv6 address
     * @return bool true if $ip is a valid IPv6 address
     */
    public static function check_ipv6($ip)
    {
    }
}