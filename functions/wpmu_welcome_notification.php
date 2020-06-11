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
 * @param int    $blog_id  Blog ID.
 * @param int    $user_id  User ID.
 * @param string $password User password.
 * @param string $title    Site title.
 * @param array  $meta     Optional. Signup meta data. By default, contains the requested privacy setting and lang_id.
 * @return bool
 */
function wpmu_welcome_notification($blog_id, $user_id, $password, $title, $meta = array())
{
}