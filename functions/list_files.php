<?php


/**
 * Returns a listing of all files in the specified folder and all subdirectories up to 100 levels deep.
 * The depth of the recursiveness can be controlled by the $levels param.
 *
 * @since 2.6.0
 *
 * @param string $folder Optional. Full path to folder. Default empty.
 * @param int    $levels Optional. Levels of folders to follow, Default 100 (PHP Loop limit).
 * @return bool|array False on failure, Else array of files
 */
function list_files($folder = '', $levels = 100)
{
}