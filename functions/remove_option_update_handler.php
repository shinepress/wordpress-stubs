<?php


/**
 * Unregister a setting
 *
 * @since 2.7.0
 * @deprecated 3.0.0 Use unregister_setting()
 * @see unregister_setting()
 *
 * @param string   $option_group      The settings group name used during registration.
 * @param string   $option_name       The name of the option to unregister.
 * @param callable $sanitize_callback Optional. Deprecated.
 */
function remove_option_update_handler($option_group, $option_name, $sanitize_callback = '')
{
}