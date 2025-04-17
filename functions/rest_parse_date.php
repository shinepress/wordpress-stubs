<?php


/**
 * Parses an RFC3339 time into a Unix timestamp.
 *
 * Explicitly check for `false` to detect failure, as zero is a valid return
 * value on success.
 *
 * @since 4.4.0
 *
 * @param string $date      RFC3339 timestamp.
 * @param bool   $force_utc Optional. Whether to force UTC timezone instead of using
 *                          the timestamp's timezone. Default false.
 * @return int|false Unix timestamp on success, false on failure.
 */
function rest_parse_date($date, $force_utc = \false)
{
}