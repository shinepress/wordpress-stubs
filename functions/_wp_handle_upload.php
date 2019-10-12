<?php


/**
 * Handle PHP uploads in WordPress, sanitizing file names, checking extensions for mime type,
 * and moving the file to the appropriate directory within the uploads directory.
 *
 * @access private
 * @since 4.0.0
 *
 * @see wp_handle_upload_error
 *
 * @param array       $file      Reference to a single element of $_FILES. Call the function once for each uploaded file.
 * @param array|false $overrides An associative array of names => values to override default variables. Default false.
 * @param string      $time      Time formatted in 'yyyy/mm'.
 * @param string      $action    Expected value for $_POST['action'].
 * @return array On success, returns an associative array of file attributes. On failure, returns
 *               $overrides['upload_error_handler'](&$file, $message ) or array( 'error'=>$message ).
 */
function _wp_handle_upload(&$file, $overrides, $time, $action)
{
}