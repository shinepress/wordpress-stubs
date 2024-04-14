<?php


/**
 * Sets up the user contact methods.
 *
 * Default contact methods were removed in 3.6. A filter dictates contact methods.
 *
 * @since 3.7.0
 *
 * @param WP_User|null $user Optional. WP_User object.
 * @return string[] Array of contact method labels keyed by contact method.
 */
function wp_get_user_contact_methods($user = \null)
{
}