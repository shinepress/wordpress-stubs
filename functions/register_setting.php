<?php


/**
 * Registers a setting and its data.
 *
 * @since 2.7.0
 * @since 4.7.0 `$args` can be passed to set flags on the setting, similar to `register_meta()`.
 *
 * @global array $new_whitelist_options
 * @global array $wp_registered_settings
 *
 * @param string $option_group A settings group name. Should correspond to a whitelisted option key name.
 *                             Default whitelisted option key names include 'general', 'discussion', 'media',
 *                             'reading', 'writing', 'misc', 'options', and 'privacy'.
 * @param string $option_name The name of an option to sanitize and save.
 * @param array  $args {
 *     Data used to describe the setting when registered.
 *
 *     @type string     $type              The type of data associated with this setting.
 *                                         Valid values are 'string', 'boolean', 'integer', 'number', 'array', and 'object'.
 *     @type string     $description       A description of the data attached to this setting.
 *     @type callable   $sanitize_callback A callback function that sanitizes the option's value.
 *     @type bool|array $show_in_rest      Whether data associated with this setting should be included in the REST API.
 *                                         When registering complex settings, this argument may optionally be an
 *                                         array with a 'schema' key.
 *     @type mixed      $default           Default value when calling `get_option()`.
 * }
 */
function register_setting($option_group, $option_name, $args = array())
{
}