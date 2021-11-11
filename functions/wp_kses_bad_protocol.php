<?php


/**
 * Sanitizes a string and removed disallowed URL protocols.
 *
 * This function removes all non-allowed protocols from the beginning of the
 * string. It ignores whitespace and the case of the letters, and it does
 * understand HTML entities. It does its work recursively, so it won't be
 * fooled by a string like `javascript:javascript:alert(57)`.
 *
 * @since 1.0.0
 *
 * @param string   $string            Content to filter bad protocols from.
 * @param string[] $allowed_protocols Array of allowed URL protocols.
 * @return string Filtered content.
 */
function wp_kses_bad_protocol($string, $allowed_protocols)
{
}