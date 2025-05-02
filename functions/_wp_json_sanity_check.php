<?php


/**
 * Performs confidence checks on data that shall be encoded to JSON.
 *
 * @ignore
 * @since 4.1.0
 * @access private
 *
 * @see wp_json_encode()
 *
 * @throws Exception If depth limit is reached.
 *
 * @param mixed $value Variable (usually an array or object) to encode as JSON.
 * @param int   $depth Maximum depth to walk through $value. Must be greater than 0.
 * @return mixed The sanitized data that shall be encoded to JSON.
 * @phpstan-template T
 * @phpstan-param T $value
 * @phpstan-param int<1, max> $depth
 * @phpstan-return T
 */
function _wp_json_sanity_check($value, $depth)
{
}