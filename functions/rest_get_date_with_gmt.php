<?php


/**
 * Parses a date into both its local and UTC equivalent, in MySQL datetime format.
 *
 * @since 4.4.0
 *
 * @see rest_parse_date()
 *
 * @param string $date   RFC3339 timestamp.
 * @param bool   $is_utc Whether the provided date should be interpreted as UTC. Default false.
 * @return array|null Local and UTC datetime strings, in MySQL datetime format (Y-m-d H:i:s),
 *                    null on failure.
 */
function rest_get_date_with_gmt($date, $is_utc = \false)
{
}