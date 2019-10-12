<?php


/**
 * Retrieve metadata from a file.
 *
 * Searches for metadata in the first 8kiB of a file, such as a plugin or theme.
 * Each piece of metadata must be on its own line. Fields can not span multiple
 * lines, the value will get cut at the end of the first line.
 *
 * If the file data is not within that first 8kiB, then the author should correct
 * their plugin file and move the data headers to the top.
 *
 * @link https://codex.wordpress.org/File_Header
 *
 * @since 2.9.0
 *
 * @param string $file            Absolute path to the file.
 * @param array  $default_headers List of headers, in the format `array('HeaderKey' => 'Header Name')`.
 * @param string $context         Optional. If specified adds filter hook {@see 'extra_$context_headers'}.
 *                                Default empty.
 * @return array Array of file headers in `HeaderKey => Header Value` format.
 */
function get_file_data($file, $default_headers, $context = '')
{
}