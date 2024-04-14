<?php


/**
 * Retrieves the timezone from site settings as a string.
 *
 * Uses the `timezone_string` option to get a proper timezone if available,
 * otherwise falls back to an offset.
 *
 * @since 5.3.0
 *
 * @return string PHP timezone string or a ±HH:MM offset.
 */
function wp_timezone_string()
{
}