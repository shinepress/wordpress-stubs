<?php


/**
 * Cleans all user caches.
 *
 * @since 3.0.0
 * @since 4.4.0 'clean_user_cache' action was added.
 * @since 5.8.0 Refreshes the global user instance if cleaning the user cache for the current user.
 *
 * @global WP_User $current_user The current user object which holds the user data.
 *
 * @param WP_User|int $user User object or ID to be cleaned from the cache
 */
function clean_user_cache($user)
{
}