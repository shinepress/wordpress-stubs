<?php


/**
 * Adds meta data to a user.
 *
 * @since 3.0.0
 *
 * @param int    $user_id    User ID.
 * @param string $meta_key   Metadata name.
 * @param mixed  $meta_value Metadata value. Arrays and objects are stored as serialized data and
 *                           will be returned as the same type when retrieved. Other data types will
 *                           be stored as strings in the database:
 *                           - false is stored and retrieved as an empty string ('')
 *                           - true is stored and retrieved as '1'
 *                           - numbers (both integer and float) are stored and retrieved as strings
 *                           Must be serializable if non-scalar.
 * @param bool   $unique     Optional. Whether the same key should not be added.
 *                           Default false.
 * @return int|false Meta ID on success, false on failure.
 */
function add_user_meta($user_id, $meta_key, $meta_value, $unique = \false)
{
}