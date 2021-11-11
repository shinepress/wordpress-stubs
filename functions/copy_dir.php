<?php


/**
 * Copies a directory from one location to another via the WordPress Filesystem Abstraction.
 * Assumes that WP_Filesystem() has already been called and setup.
 *
 * @since 2.5.0
 *
 * @global WP_Filesystem_Base $wp_filesystem Subclass
 *
 * @param string $from source directory
 * @param string $to destination directory
 * @param array $skip_list a list of files/folders to skip copying
 * @return mixed WP_Error on failure, True on success.
 */
function copy_dir($from, $to, $skip_list = array())
{
}