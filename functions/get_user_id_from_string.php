<?php


/**
 * Get a numeric user ID from either an email address or a login.
 *
 * A numeric string is considered to be an existing user ID
 * and is simply returned as such.
 *
 * @since MU (3.0.0)
 * @deprecated 3.6.0 Use get_user_by()
 * @see get_user_by()
 *
 * @param string $email_or_login Either an email address or a login.
 * @return int
 */
function get_user_id_from_string($email_or_login)
{
}