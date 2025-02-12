<?php


/**
 * Converts a value to non-negative integer.
 *
 * @since 2.5.0
 *
 * @param mixed $maybeint Data you wish to have converted to a non-negative integer.
 * @return int A non-negative integer.
 * @phpstan-template T of int
 * @phpstan-param T|scalar|array|resource|null $maybeint
 * @phpstan-return ($maybeint is T&int<0, max> ? T : ($maybeint is int<min, -1> ? int<1, max> : ($maybeint is empty ? 0 : ($maybeint is numeric-string ? int<0, max> : ($maybeint is string ? 0 : ($maybeint is true|non-empty-array ? 1 : ($maybeint is bool ? 0|1 : int<0, max>)))))))
 */
function absint($maybeint)
{
}