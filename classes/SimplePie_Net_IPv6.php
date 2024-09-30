<?php


/**
 * Class to validate and to work with IPv6 addresses.
 *
 * @package SimplePie
 * @subpackage HTTP
 * @copyright 2003-2005 The PHP Group
 * @license http://www.opensource.org/licenses/bsd-license.php
 * @link http://pear.php.net/package/Net_IPv6
 * @author Alexander Merz <alexander.merz@web.de>
 * @author elfrink at introweb dot nl
 * @author Josh Peck <jmp at joshpeck dot org>
 * @author Sam Sneddon <geoffers@gmail.com>
 */
class SimplePie_Net_IPv6
{
    /**
     * Uncompresses an IPv6 address
     *
     * RFC 4291 allows you to compress concecutive zero pieces in an address to
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
     * RFC 4291 allows you to compress concecutive zero pieces in an address to
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
    /**
     * Checks if the given IP is a valid IPv6 address
     *
     * @codeCoverageIgnore
     * @deprecated Use {@see SimplePie_Net_IPv6::check_ipv6()} instead
     * @see check_ipv6
     * @param string $ip An IPv6 address
     * @return bool true if $ip is a valid IPv6 address
     */
    public static function checkIPv6($ip)
    {
    }
}