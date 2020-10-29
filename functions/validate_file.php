<?php


/**
 * File validates against allowed set of defined rules.
 *
 * A return value of '1' means that the $file contains either '..' or './'. A
 * return value of '2' means that the $file contains ':' after the first
 * character. A return value of '3' means that the file is not in the allowed
 * files list.
 *
 * @since 1.2.0
 *
 * @param string $file File path.
 * @param array  $allowed_files List of allowed files.
 * @return int 0 means nothing is wrong, greater than 0 means something was wrong.
 */
function validate_file($file, $allowed_files = '')
{
}