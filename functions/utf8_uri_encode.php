<?php


/**
 * Encode the Unicode values to be used in the URI.
 *
 * @since 1.5.0
 * @since 5.8.3 Added the `encode_ascii_characters` parameter.
 *
 * @param string $utf8_string             String to encode.
 * @param int    $length                  Max length of the string
 * @param bool   $encode_ascii_characters Whether to encode ascii characters such as < " '
 * @return string String with Unicode encoded for URI.
 */
function utf8_uri_encode($utf8_string, $length = 0, $encode_ascii_characters = \false)
{
}