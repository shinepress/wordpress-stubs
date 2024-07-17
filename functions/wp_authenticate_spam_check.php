<?php


/**
 * For Multisite blogs, checks if the authenticated user has been marked as a
 * spammer, or if the user's primary blog has been marked as spam.
 *
 * @since 3.7.0
 *
 * @param WP_User|WP_Error|null $user WP_User or WP_Error object from a previous callback. Default null.
 * @return WP_User|WP_Error WP_User on success, WP_Error if the user is considered a spammer.
 */
function wp_authenticate_spam_check($user)
{
}