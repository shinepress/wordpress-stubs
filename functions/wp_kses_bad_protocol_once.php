<?php


/**
 * Sanitizes content from bad protocols and other characters.
 *
 * This function searches for URL protocols at the beginning of the string, while
 * handling whitespace and HTML entities.
 *
 * @since 1.0.0
 *
 * @param string   $content           Content to check for bad protocols.
 * @param string[] $allowed_protocols Array of allowed URL protocols.
 * @param int      $count             Depth of call recursion to this function.
 * @return string Sanitized content.
 */
function wp_kses_bad_protocol_once($content, $allowed_protocols, $count = 1)
{
}