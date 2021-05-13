<?php


/**
 * Add meta data field to a user.
 *
 * Post meta data is called "Custom Fields" on the Administration Screens.
 *
 * @since 3.0.0
 * @link https://codex.wordpress.org/Function_Reference/add_user_meta
 *
 * @param int    $user_id    User ID.
 * @param string $meta_key   Metadata name.
 * @param mixed  $meta_value Metadata value.
 * @param bool   $unique     Optional, default is false. Whether the same key should not be added.
 * @return int|false Meta ID on success, false on failure.
 */
function add_user_meta($user_id, $meta_key, $meta_value, $unique = \false)
{
}