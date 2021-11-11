<?php


/**
 * Verifies the contents of a file against its ED25519 signature.
 *
 * @since 5.2.0
 *
 * @param string       $filename            The file to validate.
 * @param string|array $signatures          A Signature provided for the file.
 * @param string       $filename_for_errors A friendly filename for errors. Optional.
 *
 * @return bool|WP_Error true on success, false if verification not attempted, or WP_Error describing an error condition.
 */
function verify_file_signature($filename, $signatures, $filename_for_errors = \false)
{
}