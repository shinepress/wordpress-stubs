<?php


/**
 * Validate a value based on a schema.
 *
 * @since 4.7.0
 * @since 4.9.0 Support the "object" type.
 * @since 5.2.0 Support validating "additionalProperties" against a schema.
 * @since 5.3.0 Support multiple types.
 * @since 5.4.0 Convert an empty string to an empty object.
 * @since 5.5.0 Add the "uuid" and "hex-color" formats.
 *              Support the "minLength", "maxLength" and "pattern" keywords for strings.
 *              Support the "minItems", "maxItems" and "uniqueItems" keywords for arrays.
 *              Validate required properties.
 *
 * @param mixed  $value The value to validate.
 * @param array  $args  Schema array to use for validation.
 * @param string $param The parameter name, used in error messages.
 * @return true|WP_Error
 */
function rest_validate_value_from_schema($value, $args, $param = '')
{
}