<?php


/**
 * Unzips a specified ZIP file to a location on the Filesystem via the WordPress Filesystem Abstraction.
 * Assumes that WP_Filesystem() has already been called and set up. Does not extract a root-level __MACOSX directory, if present.
 *
 * Attempts to increase the PHP Memory limit to 256M before uncompressing,
 * However, The most memory required shouldn't be much larger than the Archive itself.
 *
 * @since 2.5.0
 *
 * @global WP_Filesystem_Base $wp_filesystem Subclass
 *
 * @param string $file Full path and filename of zip archive
 * @param string $to Full path on the filesystem to extract archive to
 * @return mixed WP_Error on failure, True on success
 */
function unzip_file($file, $to)
{
}