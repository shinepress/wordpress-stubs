<?php


/**
 * Get the size of a directory recursively.
 *
 * Used by get_dirsize() to get a directory's size when it contains
 * other directories.
 *
 * @since MU
 * @since 4.3.0 $exclude parameter added.
 *
 * @param string $directory Full path of a directory.
 * @param string $exclude   Optional. Full path of a subdirectory to exclude from the total.
 * @return int|false Size in MB if a valid directory. False if not.
 */
function recurse_dirsize($directory, $exclude = \null)
{
}