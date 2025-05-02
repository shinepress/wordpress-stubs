<?php


/**
 * Verifies that an email is valid.
 *
 * Does not grok i18n domains. Not RFC compliant.
 *
 * @since 0.71
 *
 * @param string $email      Email address to verify.
 * @param bool   $deprecated Deprecated.
 * @return string|false Valid email address on success, false on failure.
 */
function is_email($email, $deprecated = \false)
{
}