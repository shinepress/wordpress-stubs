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
 * @param array       $file      Reference to a single element of `$_FILES`.
 *                               Call the function once for each uploaded file.
 *                               See _wp_handle_upload() for accepted values.
 * @param array|false $overrides Optional. An associative array of names => values
 *                               to override default variables. Default false.
 *                               See _wp_handle_upload() for accepted values.
 * @param string      $time      Optional. Time formatted in 'yyyy/mm'. Default null.
 * @return array See _wp_handle_upload() for return value.
 * @phpstan-param array{
 *   name?: string,
 *   type?: string,
 *   tmp_name?: string,
 *   size?: int,
 *   error?: int,
 * } $file See _wp_handle_upload()
 * @phpstan-param false|array{
 *   upload_error_handler?: callable,
 *   unique_filename_callback?: callable,
 *   upload_error_strings?: string[],
 *   test_form?: bool,
 *   test_size?: bool,
 *   test_type?: bool,
 *   mimes?: string[],
 * } $overrides See _wp_handle_upload()
 */
function wp_handle_upload(&$file, $overrides = \false, $time = \null)
{
}