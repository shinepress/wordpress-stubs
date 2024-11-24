<?php


/**
 * Callback function for `stripslashes_deep()` which strips slashes from strings.
 *
 * @since 4.4.0
 *
 * @param mixed $value The array or string to be stripped.
 * @return mixed The stripped value.
 * @phpstan-template T
 * @phpstan-param T $value
 * @phpstan-return T
 */
function stripslashes_from_strings_only($value)
{
}