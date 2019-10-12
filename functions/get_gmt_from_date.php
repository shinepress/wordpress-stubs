<?php


/**
 * Returns a date in the GMT equivalent.
 *
 * Requires and returns a date in the Y-m-d H:i:s format. If there is a
 * timezone_string available, the date is assumed to be in that timezone,
 * otherwise it simply subtracts the value of the 'gmt_offset' option. Return
 * format can be overridden using the $format parameter.
 *
 * @since 1.2.0
 *
 * @param string $string The date to be converted.
 * @param string $format The format string for the returned date (default is Y-m-d H:i:s)
 * @return string GMT version of the date provided.
 */
function get_gmt_from_date($string, $format = 'Y-m-d H:i:s')
{
}