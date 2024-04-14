<?php


/**
 * Checks if two numbers are nearly the same.
 *
 * This is similar to using `round()` but the precision is more fine-grained.
 *
 * @since 5.3.0
 *
 * @param int|float $expected  The expected value.
 * @param int|float $actual    The actual number.
 * @param int|float $precision The allowed variation.
 * @return bool Whether the numbers match within the specified precision.
 */
function wp_fuzzy_number_match($expected, $actual, $precision = 1)
{
}