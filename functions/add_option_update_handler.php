<?php


/**
 * Register a setting and its sanitization callback
 *
 * @since 2.7.0
 * @deprecated 3.0.0 Use register_setting()
 * @see register_setting()
 *
 * @param string $option_group A settings group name. Should correspond to a whitelisted option key name.
 * 	Default whitelisted option key names include "general," "discussion," and "reading," among others.
 * @param string $option_name The name of an option to sanitize and save.
 * @param callable $sanitize_callback A callback function that sanitizes the option's value.
 */
function add_option_update_handler($option_group, $option_name, $sanitize_callback = '')
{
}