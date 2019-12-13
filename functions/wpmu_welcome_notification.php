<?php


/**
 * Notify a user that their blog activation has been successful.
 *
 * Filter {@see 'wpmu_welcome_notification'} to disable or bypass.
 *
 * Filter {@see 'update_welcome_email'} and {@see 'update_welcome_subject'} to
 * modify the content and subject line of the notification email.
 *
 * @since MU
 *
 * @param int    $blog_id
 * @param int    $user_id
 * @param string $password
 * @param string $title    The new blog's title
 * @param array  $meta     Optional. Not used in the default function, but is passed along to hooks for customization.
 * @return bool
 */
function wpmu_welcome_notification($blog_id, $user_id, $password, $title, $meta = array())
{
}