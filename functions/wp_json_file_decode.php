<?php


/**
 * Reads and decodes a JSON file.
 *
 * @since 5.9.0
 *
 * @param string $filename Path to the JSON file.
 * @param array  $options  {
 *     Optional. Options to be used with `json_decode()`.
 *
 *     @type bool associative Optional. When `true`, JSON objects will be returned as associative arrays.
 *                            When `false`, JSON objects will be returned as objects.
 * }
 *
 * @return mixed Returns the value encoded in JSON in appropriate PHP type.
 *               `null` is returned if the file is not found, or its content can't be decoded.
 */
function wp_json_file_decode($filename, $options = array())
{
}