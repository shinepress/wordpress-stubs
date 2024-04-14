<?php


/**
 * Checks whether the given cache ID is either an integer or an integer-like string.
 *
 * Both `16` and `"16"` are considered valid, other numeric types and numeric strings
 * (`16.3` and `"16.3"`) are considered invalid.
 *
 * @since 6.3.0
 *
 * @param mixed $object_id The cache ID to validate.
 * @return bool Whether the given $object_id is a valid cache ID.
 */
function _validate_cache_id($object_id)
{
}