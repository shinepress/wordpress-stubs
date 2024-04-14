<?php


/**
 * Class to validate and to work with IPv6 addresses
 *
 * @package Requests
 * @subpackage Utilities
 */
/**
 * Class to validate and to work with IPv6 addresses
 *
 * This was originally based on the PEAR class of the same name, but has been
 * entirely rewritten.
 *
 * @package Requests
 * @subpackage Utilities
 */
class Requests_IPv6
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
     * @license http://www.opensource.org/licenses/bsd-license.php
     * @param string $ip An IPv6 address
     * @return string The uncompressed IPv6 address
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
     * @see uncompress()
     * @param string $ip An IPv6 address
     * @return string The compressed IPv6 address
     */
    public static function compress($ip)
    {
    }
    /**
     * Splits an IPv6 address into the IPv6 and IPv4 representation parts
     *
     * RFC 4291 allows you to represent the last two parts of an IPv6 address
     * using the standard IPv4 representation
     *
     * Example:  0:0:0:0:0:0:13.1.68.3
     *           0:0:0:0:0:FFFF:129.144.52.38
     *
     * @param string $ip An IPv6 address
     * @return string[] [0] contains the IPv6 represented part, and [1] the IPv4 represented part
     */
    protected static function split_v6_v4($ip)
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