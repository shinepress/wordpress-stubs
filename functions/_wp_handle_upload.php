<?php


/**
 * Handles PHP uploads in WordPress.
 *
 * Sanitizes file names, checks extensions for mime type, and moves the file
 * to the appropriate directory within the uploads directory.
 *
 * @access private
 * @since 4.0.0
 *
 * @see wp_handle_upload_error
 *
 * @param string[]       $file      Reference to a single element of `$_FILES`.
 *                                  Call the function once for each uploaded file.
 * @param string[]|false $overrides An associative array of names => values
 *                                  to override default variables. Default false.
 * @param string         $time      Time formatted in 'yyyy/mm'.
 * @param string         $action    Expected value for `$_POST['action']`.
 * @return string[] On success, returns an associative array of file attributes.
 *                  On failure, returns `$overrides['upload_error_handler']( &$file, $message )`
 *                  or `array( 'error' => $message )`.
 */
function _wp_handle_upload(&$file, $overrides, $time, $action)
{
}