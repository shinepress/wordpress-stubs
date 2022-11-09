<?php


/**
 * Stabilizes a value following JSON Schema semantics.
 *
 * For lists, order is preserved. For objects, properties are reordered alphabetically.
 *
 * @since 5.5.0
 *
 * @param mixed $value The value to stabilize. Must already be sanitized. Objects should have been converted to arrays.
 * @return mixed The stabilized value.
 */
function rest_stabilize_value($value)
{
}