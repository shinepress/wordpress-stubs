<?php


/**
 * Add slashes to a string or array of strings.
 *
 * This should be used when preparing data for core API that expects slashed data.
 * This should not be used to escape data going directly into an SQL query.
 *
 * @since 3.6.0
 *
 * @param string|array $value String or array of strings to slash.
 * @return string|array Slashed $value
 * @phpstan-template T
 * @phpstan-param T $value
 * @phpstan-return T
 */
function wp_slash($value)
{
}