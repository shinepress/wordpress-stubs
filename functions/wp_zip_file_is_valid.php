<?php


/**
 * Determines whether the given file is a valid ZIP file.
 *
 * This function does not test to ensure that a file exists. Non-existent files
 * are not valid ZIPs, so those will also return false.
 *
 * @since 6.4.4
 *
 * @param string $file Full path to the ZIP file.
 * @return bool Whether the file is a valid ZIP file.
 */
function wp_zip_file_is_valid($file)
{
}