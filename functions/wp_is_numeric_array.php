<?php


/**
 * Determines if the variable is a numeric-indexed array.
 *
 * @since 4.4.0
 *
 * @param mixed $data Variable to check.
 * @return bool Whether the variable is a list.
 * @template T of mixed
 * @phpstan-param T $data
 * @phpstan-assert-if-true (T is list ? T : array<int, value-of<T>>) $data
 * @phpstan-return (T is array ? (key-of<T> is int ? true : false) : false)
 */
function wp_is_numeric_array($data)
{
}