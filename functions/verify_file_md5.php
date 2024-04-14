<?php


/**
 * Calculates and compares the MD5 of a file to its expected value.
 *
 * @since 3.7.0
 *
 * @param string $filename     The filename to check the MD5 of.
 * @param string $expected_md5 The expected MD5 of the file, either a base64-encoded raw md5,
 *                             or a hex-encoded md5.
 * @return bool|WP_Error True on success, false when the MD5 format is unknown/unexpected,
 *                       WP_Error on failure.
 */
function verify_file_md5($filename, $expected_md5)
{
}