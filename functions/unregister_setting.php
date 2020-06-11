<?php


/**
 * Unregisters a setting.
 *
 * @since 2.7.0
 * @since 4.7.0 `$sanitize_callback` was deprecated. The callback from `register_setting()` is now used instead.
 *
 * @global array $new_whitelist_options
 * @global array $wp_registered_settings
 *
 * @param string   $option_group      The settings group name used during registration.
 * @param string   $option_name       The name of the option to unregister.
 * @param callable $deprecated        Deprecated.
 */
function unregister_setting($option_group, $option_name, $deprecated = '')
{
}