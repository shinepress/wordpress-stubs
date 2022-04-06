<?php


/**
 * This function should not be called directly, use unzip_file instead. Attempts to unzip an archive using the ZipArchive class.
 * Assumes that WP_Filesystem() has already been called and set up.
 *
 * @since 3.0.0
 * @see unzip_file
 * @access private
 *
 * @global WP_Filesystem_Base $wp_filesystem Subclass
 *
 * @param string $file Full path and filename of zip archive
 * @param string $to Full path on the filesystem to extract archive to
 * @param array $needed_dirs A partial list of required folders needed to be created.
 * @return mixed WP_Error on failure, True on success
 */
function _unzip_file_ziparchive($file, $to, $needed_dirs = array())
{
}