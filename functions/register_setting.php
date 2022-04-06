<?php


/**
 * Register a setting and its data.
 *
 * @since 2.7.0
 * @since 4.7.0 `$args` can be passed to set flags on the setting, similar to `register_meta()`.
 *
 * @global array $new_whitelist_options
 * @global array $wp_registered_settings
 *
 * @param string $option_group A settings group name. Should correspond to a whitelisted option key name.
 *  Default whitelisted option key names include "general," "discussion," and "reading," among others.
 * @param string $option_name The name of an option to sanitize and save.
 * @param array  $args {
 *     Data used to describe the setting when registered.
 *
 *     @type string   $type              The type of data associated with this setting.
 *                                       Valid values are 'string', 'boolean', 'integer', and 'number'.
 *     @type string   $description       A description of the data attached to this setting.
 *     @type callable $sanitize_callback A callback function that sanitizes the option's value.
 *     @type bool     $show_in_rest      Whether data associated with this setting should be included in the REST API.
 *     @type mixed    $default           Default value when calling `get_option()`.
 * }
 * @phpstan-param array{
 *   type?: string,
 *   description?: string,
 *   sanitize_callback?: callable,
 *   show_in_rest?: bool,
 *   default?: mixed,
 * } $args
 */
function register_setting($option_group, $option_name, $args = array())
{
}