<?php


/**
 * Sanitize a value based on a schema.
 *
 * @since 4.7.0
 * @since 5.5.0 Added the `$param` parameter.
 * @since 5.6.0 Support the "anyOf" and "oneOf" keywords.
 *
 * @param mixed  $value The value to sanitize.
 * @param array  $args  Schema array to use for sanitization.
 * @param string $param The parameter name, used in error messages.
 * @return mixed|WP_Error The sanitized value or a WP_Error instance if the value cannot be safely sanitized.
 */
function rest_sanitize_value_from_schema($value, $args, $param = '')
{
}