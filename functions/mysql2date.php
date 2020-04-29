<?php


/**
 * Convert given MySQL date string into a different format.
 *
 * `$format` should be a PHP date format string.
 * 'U' and 'G' formats will return a sum of timestamp with timezone offset.
 * `$date` is expected to be local time in MySQL format (`Y-m-d H:i:s`).
 *
 * Historically UTC time could be passed to the function to produce Unix timestamp.
 *
 * If `$translate` is true then the given date and format string will
 * be passed to `wp_date()` for translation.
 *
 * @since 0.71
 *
 * @param string $format    Format of the date to return.
 * @param string $date      Date string to convert.
 * @param bool   $translate Whether the return date should be translated. Default true.
 * @return string|int|false Formatted date string or sum of Unix timestamp and timezone offset.
 *                          False on failure.
 */
function mysql2date($format, $date, $translate = \true)
{
}