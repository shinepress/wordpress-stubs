<?php


/**
 * Notify a user that their account activation has been successful.
 *
 * Filter {@see 'wpmu_welcome_user_notification'} to disable or bypass.
 *
 * Filter {@see 'update_welcome_user_email'} and {@see 'update_welcome_user_subject'} to
 * modify the content and subject line of the notification email.
 *
 * @since MU
 *
 * @param int    $user_id
 * @param string $password
 * @param array  $meta     Optional. Not used in the default function, but is passed along to hooks for customization.
 * @return bool
 */
function wpmu_welcome_user_notification($user_id, $password, $meta = array())
{
}