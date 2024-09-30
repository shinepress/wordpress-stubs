<?php


/**
 * Update metadata of user.
 *
 * There is no need to serialize values, they will be serialized if it is
 * needed. The metadata key can only be a string with underscores. All else will
 * be removed.
 *
 * Will remove the metadata, if the meta value is empty.
 *
 * @since 2.0.0
 * @deprecated 3.0.0 Use update_user_meta()
 * @see update_user_meta()
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int $user_id User ID
 * @param string $meta_key Metadata key.
 * @param mixed $meta_value Metadata value.
 * @return bool True on successful update, false on failure.
 */
function update_usermeta($user_id, $meta_key, $meta_value)
{
}