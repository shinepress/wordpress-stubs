<?php


/**
 * Multisite administration functions.
 *
 * @package WordPress
 * @subpackage Multisite
 * @since 3.0.0
 */
/**
 * Determines whether uploaded file exceeds space quota.
 *
 * @since 3.0.0
 *
 * @param array $file An element from the `$_FILES` array for a given file.
 * @return array The `$_FILES` array element with 'error' key set if file exceeds quota. 'error' is empty otherwise.
 */
function check_upload_size($file)
{
}