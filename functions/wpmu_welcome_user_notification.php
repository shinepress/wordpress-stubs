<?php


/**
 * Notifies a user that their account activation has been successful.
 *
 * Filter {@see 'wpmu_welcome_user_notification'} to disable or bypass.
 *
 * Filter {@see 'update_welcome_user_email'} and {@see 'update_welcome_user_subject'} to
 * modify the content and subject line of the notification email.
 *
 * @since MU (3.0.0)
 *
 * @param int    $user_id  User ID.
 * @param string $password User password.
 * @param array  $meta     Optional. Signup meta data. Default empty array.
 * @return bool
 */
function wpmu_welcome_user_notification(
    $user_id,
    #[\SensitiveParameter]
    $password,
    $meta = array()
)
{
}