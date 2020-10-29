<?php


/**
 * Returns a list of meta keys to be (maybe) populated in wp_update_user().
 *
 * The list of keys returned via this function are dependent on the presence
 * of those keys in the user meta data to be set.
 *
 * @since 3.3.0
 * @access private
 *
 * @param WP_User $user WP_User instance.
 * @return string[] List of user keys to be populated in wp_update_user().
 */
function _get_additional_user_keys($user)
{
}