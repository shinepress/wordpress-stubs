<?php


/**
 * Copies a directory from one location to another via the WordPress Filesystem
 * Abstraction.
 *
 * Assumes that WP_Filesystem() has already been called and setup.
 *
 * @since 2.5.0
 *
 * @global WP_Filesystem_Base $wp_filesystem WordPress filesystem subclass.
 *
 * @param string $from     Source directory.
 * @param string $to       Destination directory.
 * @param array $skip_list A list of files/folders to skip copying.
 * @return true|WP_Error True on success, WP_Error on failure.
 */
function copy_dir($from, $to, $skip_list = array())
{
}