<?php


/**
 * Notifies the network admin that a new user has been activated.
 *
 * Filter {@see 'newuser_notify_siteadmin'} to change the content of
 * the notification email.
 *
 * @since MU (3.0.0)
 *
 * @param int $user_id The new user's ID.
 * @return bool
 */
function newuser_notify_siteadmin($user_id)
{
}