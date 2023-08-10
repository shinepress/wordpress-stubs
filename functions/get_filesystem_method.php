<?php


/**
 * Determines which method to use for reading, writing, modifying, or deleting
 * files on the filesystem.
 *
 * The priority of the transports are: Direct, SSH2, FTP PHP Extension, FTP Sockets
 * (Via Sockets class, or `fsockopen()`). Valid values for these are: 'direct', 'ssh2',
 * 'ftpext' or 'ftpsockets'.
 *
 * The return value can be overridden by defining the `FS_METHOD` constant in `wp-config.php`,
 * or filtering via {@see 'filesystem_method'}.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/#wordpress-upgrade-constants
 *
 * Plugins may define a custom transport handler, See WP_Filesystem().
 *
 * @since 2.5.0
 *
 * @global callable $_wp_filesystem_direct_method
 *
 * @param array  $args                         Optional. Connection details. Default empty array.
 * @param string $context                      Optional. Full path to the directory that is tested
 *                                             for being writable. Default empty.
 * @param bool   $allow_relaxed_file_ownership Optional. Whether to allow Group/World writable.
 *                                             Default false.
 * @return string The transport to use, see description for valid return values.
 */
function get_filesystem_method($args = array(), $context = '', $allow_relaxed_file_ownership = \false)
{
}