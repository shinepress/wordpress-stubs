<?php


/**
 * Marks a file as deprecated and inform when it has been used.
 *
 * There is a hook {@see 'deprecated_file_included'} that will be called that can be used
 * to get the backtrace up to what file and function included the deprecated
 * file.
 *
 * The current behavior is to trigger a user error if `WP_DEBUG` is true.
 *
 * This function is to be used in every file that is deprecated.
 *
 * @since 2.5.0
 * @since 5.4.0 This function is no longer marked as "private".
 * @since 5.4.0 The error type is now classified as E_USER_DEPRECATED (used to default to E_USER_NOTICE).
 *
 * @param string $file        The file that was included.
 * @param string $version     The version of WordPress that deprecated the file.
 * @param string $replacement Optional. The file that should have been included based on ABSPATH.
 *                            Default empty string.
 * @param string $message     Optional. A message regarding the change. Default empty string.
 */
function _deprecated_file($file, $version, $replacement = '', $message = '')
{
}