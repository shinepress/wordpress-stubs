<?php


/**
 * Remove user meta data.
 *
 * @since 2.0.0
 * @deprecated 3.0.0 Use delete_user_meta()
 * @see delete_user_meta()
 *
 * @param int $user_id User ID.
 * @param string $meta_key Metadata key.
 * @param mixed $meta_value Metadata value.
 * @return bool True deletion completed and false if user_id is not a number.
 */
function delete_usermeta($user_id, $meta_key, $meta_value = '')
{
}