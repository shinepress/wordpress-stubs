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
 * @return array {
 *     Plugin data. Values will be empty if not supplied by the plugin.
 *
 *     @type string $Name        Name of the plugin. Should be unique.
 *     @type string $Title       Title of the plugin and link to the plugin's site (if set).
 *     @type string $Description Plugin description.
 *     @type string $Author      Author's name.
 *     @type string $AuthorURI   Author's website address (if set).
 *     @type string $Version     Plugin version.
 *     @type string $TextDomain  Plugin textdomain.
 *     @type string $DomainPath  Plugins relative directory path to .mo files.
 *     @type bool   $Network     Whether the plugin can only be activated network-wide.
 * }
 */
function _get_plugin_data_markup_translate($plugin_file, $plugin_data, $markup = \true, $translate = \true)
{
}