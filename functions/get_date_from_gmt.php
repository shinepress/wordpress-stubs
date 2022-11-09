<?php


/**
 * Converts a GMT date into the correct format for the blog.
 *
 * Requires and returns a date in the Y-m-d H:i:s format.
 * Return format can be overridden using the $format parameter.
 *
 * @since 1.2.0
 *
 * @param string $string The date to be converted.
 * @param string $format The format string for the returned date. Default 'Y-m-d H:i:s'.
 * @return string Formatted date relative to the timezone.
 */
function get_date_from_gmt($string, $format = 'Y-m-d H:i:s')
{
}