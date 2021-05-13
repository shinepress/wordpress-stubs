<?php


/**
 * Callback for `wp_kses_bad_protocol_once()` regular expression.
 *
 * This function processes URL protocols, checks to see if they're in the
 * list of allowed protocols or not, and returns different data depending
 * on the answer.
 *
 * @access private
 * @ignore
 * @since 1.0.0
 *
 * @param string   $string            URI scheme to check against the list of allowed protocols.
 * @param string[] $allowed_protocols Array of allowed URL protocols.
 * @return string Sanitized content.
 */
function wp_kses_bad_protocol_once2($string, $allowed_protocols)
{
}