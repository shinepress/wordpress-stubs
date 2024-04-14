<?php


/**
 * Retrieves the current time based on specified type.
 *
 * The 'mysql' type will return the time in the format for MySQL DATETIME field.
 * The 'timestamp' type will return the current timestamp or a sum of timestamp
 * and timezone offset, depending on `$gmt`.
 * Other strings will be interpreted as PHP date formats (e.g. 'Y-m-d').
 *
 * If $gmt is set to either '1' or 'true', then both types will use GMT time.
 * if $gmt is false, the output is adjusted with the GMT offset in the WordPress option.
 *
 * @since 1.0.0
 *
 * @param string   $type Type of time to retrieve. Accepts 'mysql', 'timestamp',
 *                       or PHP date format string (e.g. 'Y-m-d').
 * @param int|bool $gmt  Optional. Whether to use GMT timezone. Default false.
 * @return int|string Integer if $type is 'timestamp', string otherwise.
 * @phpstan-return ($type is 'timestamp'|'U' ? int : string)
 */
function current_time($type, $gmt = 0)
{
}