<?php


/**
 * Unregisters a setting.
 *
 * @since 2.7.0
 * @since 4.7.0 `$sanitize_callback` was deprecated. The callback from `register_setting()` is now used instead.
 * @since 5.5.0 `$new_whitelist_options` was renamed to `$new_allowed_options`.
 *              Please consider writing more inclusive code.
 *
 * @global array $new_allowed_options
 * @global array $wp_registered_settings
 *
 * @param string   $option_group The settings group name used during registration.
 * @param string   $option_name  The name of the option to unregister.
 * @param callable $deprecated   Optional. Deprecated.
 */
function unregister_setting($option_group, $option_name, $deprecated = '')
{
}