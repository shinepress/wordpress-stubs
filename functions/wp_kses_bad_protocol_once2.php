<?php


/**
 * Callback for wp_kses_bad_protocol_once() regular expression.
 *
 * This function processes URL protocols, checks to see if they're in the
 * whitelist or not, and returns different data depending on the answer.
 *
 * @access private
 * @since 1.0.0
 *
 * @param string $string            URI scheme to check against the whitelist
 * @param string $allowed_protocols Allowed protocols
 * @return string Sanitized content
 */
function wp_kses_bad_protocol_once2($string, $allowed_protocols)
{
}