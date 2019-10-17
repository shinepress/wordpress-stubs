<?php


/**
 * Initiates email notifications related to the creation of new users.
 *
 * Notifications are sent both to the site admin and to the newly created user.
 *
 * @since 4.4.0
 * @since 4.6.0 Converted the `$notify` parameter to accept 'user' for sending
 *              notifications only to the user created.
 *
 * @param int    $user_id ID of the newly created user.
 * @param string $notify  Optional. Type of notification that should happen. Accepts 'admin'
 *                        or an empty string (admin only), 'user', or 'both' (admin and user).
 *                        Default 'both'.
 */
function wp_send_new_user_notifications($user_id, $notify = 'both')
{
}