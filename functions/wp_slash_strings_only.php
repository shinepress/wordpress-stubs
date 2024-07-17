<?php


/**
 * Adds slashes to only string values in an array of values.
 *
 * This should be used when preparing data for core APIs that expect slashed data.
 * This should not be used to escape data going directly into an SQL query.
 *
 * @since 5.3.0
 * @deprecated 5.6.0 Use wp_slash()
 *
 * @see wp_slash()
 *
 * @param mixed $value Scalar or array of scalars.
 * @return mixed Slashes $value
 */
function wp_slash_strings_only($value)
{
}