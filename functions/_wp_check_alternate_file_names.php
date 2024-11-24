<?php


/**
 * Helper function to test if each of an array of file names could conflict with existing files.
 *
 * @since 5.8.1
 * @access private
 *
 * @param string[] $filenames Array of file names to check.
 * @param string   $dir       The directory containing the files.
 * @param array    $files     An array of existing files in the directory. May be empty.
 * @return bool True if the tested file name could match an existing file, false otherwise.
 */
function _wp_check_alternate_file_names($filenames, $dir, $files)
{
}