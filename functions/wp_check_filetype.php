<?php


/**
 * Retrieve the file type from the file name.
 *
 * You can optionally define the mime array, if needed.
 *
 * @since 2.0.4
 *
 * @param string   $filename File name or path.
 * @param string[] $mimes    Optional. Array of allowed mime types keyed by their file extension regex.
 * @return array {
 *     Values for the extension and mime type.
 *
 *     @type string|false $ext  File extension, or false if the file doesn't match a mime type.
 *     @type string|false $type File mime type, or false if the file doesn't match a mime type.
 * }
 * @phpstan-return array{
 *   ext: string|false,
 *   type: string|false,
 * }
 */
function wp_check_filetype($filename, $mimes = \null)
{
}