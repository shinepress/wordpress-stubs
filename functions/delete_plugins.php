<?php


/**
 * Remove directory and files of a plugin for a list of plugins.
 *
 * @since 2.6.0
 *
 * @global WP_Filesystem_Base $wp_filesystem
 *
 * @param array  $plugins    List of plugins to delete.
 * @param string $deprecated Deprecated.
 * @return bool|null|WP_Error True on success, false is $plugins is empty, WP_Error on failure.
 *                            Null if filesystem credentials are required to proceed.
 */
function delete_plugins($plugins, $deprecated = '')
{
}