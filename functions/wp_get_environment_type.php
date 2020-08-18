<?php


/**
 * Retrieves the current environment type.
 *
 * The type can be set via the `WP_ENVIRONMENT_TYPE` global system variable,
 * or a constant of the same name.
 *
 * Possible values include 'development', 'staging', 'production'. If not set,
 * the type defaults to 'production'.
 *
 * @since 5.5.0
 *
 * @return string The current environment type.
 */
function wp_get_environment_type()
{
}