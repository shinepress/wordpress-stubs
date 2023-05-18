<?php


/**
 * Add slashes to a string or array of strings, in a recursive manner.
 *
 * This should be used when preparing data for core API that expects slashed data.
 * This should not be used to escape data going directly into an SQL query.
 *
 * @since 3.6.0
 * @since 5.5.0 Non-string values are left untouched.
 *
 * @param string|string[] $value String or array of strings to slash.
 * @return string|string[] Slashed $value.
 * @phpstan-template T
 * @phpstan-param T $value
 * @phpstan-return T
 */
function wp_slash($value)
{
}