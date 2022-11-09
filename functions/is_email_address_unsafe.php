<?php


//
// Admin functions.
//
/**
 * Checks an email address against a list of banned domains.
 *
 * This function checks against the Banned Email Domains list
 * at wp-admin/network/settings.php. The check is only run on
 * self-registrations; user creation at wp-admin/network/users.php
 * bypasses this check.
 *
 * @since MU (3.0.0)
 *
 * @param string $user_email The email provided by the user at registration.
 * @return bool Returns true when the email address is banned.
 */
function is_email_address_unsafe($user_email)
{
}