<?php


/**
 * Sanitizes plugin data, optionally adds markup, optionally translates.
 *
 * @since 2.7.0
 *
 * @see get_plugin_data()
 *
 * @access private
 *
 * @param string $plugin_file Path to the main plugin file.
 * @param array  $plugin_data An array of plugin data. See `get_plugin_data()`.
 * @param bool   $markup      Optional. If the returned data should have HTML markup applied.
 *                            Default true.
 * @param bool   $translate   Optional. If the returned data should be translated. Default true.
 * @return array Plugin data. Values will be empty if not supplied by the plugin.
 *               See get_plugin_data() for the list of possible values.
 */
function _get_plugin_data_markup_translate($plugin_file, $plugin_data, $markup = \true, $translate = \true)
{
}