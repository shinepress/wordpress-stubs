<?php


/**
 * Deprecated functionality to validate an email address.
 *
 * @since MU
 * @deprecated 3.0.0 Use is_email()
 * @see is_email()
 *
 * @param string $email        Email address to verify.
 * @param bool   $check_domain Deprecated.
 * @return string|bool Either false or the valid email address.
 */
function validate_email($email, $check_domain = \true)
{
}