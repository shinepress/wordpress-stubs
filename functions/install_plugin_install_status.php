<?php


/**
 * Determine the status we can perform on a plugin.
 *
 * @since 3.0.0
 *
 * @param  array|object $api  Data about the plugin retrieved from the API.
 * @param  bool         $loop Optional. Disable further loops. Default false.
 * @return array {
 *     Plugin installation status data.
 *
 *     @type string $status  Status of a plugin. Could be one of 'install', 'update_available', 'latest_installed' or 'newer_installed'.
 *     @type string $url     Plugin installation URL.
 *     @type string $version The most recent version of the plugin.
 *     @type string $file    Plugin filename relative to the plugins directory.
 * }
 * @phpstan-return array{
 *   status: string,
 *   url: string,
 *   version: string,
 *   file: string,
 * }
 */
function install_plugin_install_status($api, $loop = \false)
{
}