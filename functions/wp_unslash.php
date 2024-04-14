<?php


/**
 * Remove slashes from a string or array of strings.
 *
 * This should be used to remove slashes from data passed to core API that
 * expects data to be unslashed.
 *
 * @since 3.6.0
 *
 * @param string|array $value String or array of strings to unslash.
 * @return string|array Unslashed $value
 * @phpstan-template T
 * @phpstan-param T $value
 * @phpstan-return T
 */
function wp_unslash($value)
{
}