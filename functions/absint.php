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
 * @phpstan-return ($maybeint is T&non-negative-int ? T : ($maybeint is negative-int ? positive-int : ($maybeint is empty ? 0 : ($maybeint is numeric-string ? non-negative-int : ($maybeint is string ? 0 : ($maybeint is true|non-empty-array ? 1 : ($maybeint is bool ? 0|1 : non-negative-int)))))))
 */
function absint($maybeint)
{
}