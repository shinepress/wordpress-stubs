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
 * @param array|false    $overrides {
 *     An array of override parameters for this file, or boolean false if none are provided.
 *
 *     @type callable $upload_error_handler     Function to call when there is an error during the upload process.
 *                                              @see wp_handle_upload_error().
 *     @type callable $unique_filename_callback Function to call when determining a unique file name for the file.
 *                                              @see wp_unique_filename().
 *     @type string[] $upload_error_strings     The strings that describe the error indicated in
 *                                              `$_FILES[{form field}]['error']`.
 *     @type bool     $test_form                Whether to test that the `$_POST['action']` parameter is as expected.
 *     @type bool     $test_size                Whether to test that the file size is greater than zero bytes.
 *     @type bool     $test_type                Whether to test that the mime type of the file is as expected.
 *     @type string[] $mimes                    Array of allowed mime types keyed by their file extension regex.
 * }
 * @param string         $time      Time formatted in 'yyyy/mm'.
 * @param string         $action    Expected value for `$_POST['action']`.
 * @return string[] On success, returns an associative array of file attributes.
 *                  On failure, returns `$overrides['upload_error_handler']( &$file, $message )`
 *                  or `array( 'error' => $message )`.
 * @phpstan-param false|array{
 *   upload_error_handler?: callable,
 *   unique_filename_callback?: callable,
 *   upload_error_strings?: string[],
 *   test_form?: bool,
 *   test_size?: bool,
 *   test_type?: bool,
 *   mimes?: string[],
 * } $overrides
 */
function _wp_handle_upload(&$file, $overrides, $time, $action)
{
}