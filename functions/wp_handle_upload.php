<?php


/**
 * Wrapper for _wp_handle_upload().
 *
 * Passes the {@see 'wp_handle_upload'} action.
 *
 * @since 2.0.0
 *
 * @see _wp_handle_upload()
 *
 * @param array      $file      Reference to a single element of `$_FILES`.
 *                              Call the function once for each uploaded file.
 * @param array|bool $overrides Optional. An associative array of names => values
 *                              to override default variables. Default false.
 * @param string     $time      Optional. Time formatted in 'yyyy/mm'. Default null.
 * @return array On success, returns an associative array of file attributes.
 *               On failure, returns `$overrides['upload_error_handler']( &$file, $message )`
 *               or `array( 'error' => $message )`.
 */
function wp_handle_upload(&$file, $overrides = \false, $time = \null)
{
}