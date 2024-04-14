<?php


/**
 * Attempts to unzip an archive using the ZipArchive class.
 *
 * This function should not be called directly, use `unzip_file()` instead.
 *
 * Assumes that WP_Filesystem() has already been called and set up.
 *
 * @since 3.0.0
 * @see unzip_file()
 * @access private
 *
 * @global WP_Filesystem_Base $wp_filesystem WordPress filesystem subclass.
 *
 * @param string $file       Full path and filename of ZIP archive.
 * @param string $to         Full path on the filesystem to extract archive to.
 * @param array $needed_dirs A partial list of required folders needed to be created.
 * @return true|WP_Error True on success, WP_Error on failure.
 */
function _unzip_file_ziparchive($file, $to, $needed_dirs = array())
{
}