<?php


/**
 * Retrieve user metadata.
 *
 * If $user_id is not a number, then the function will fail over with a 'false'
 * boolean return value. Other returned values depend on whether there is only
 * one item to be returned, which be that single item type. If there is more
 * than one metadata value, then it will be list of metadata values.
 *
 * @since 2.0.0
 * @deprecated 3.0.0 Use get_user_meta()
 * @see get_user_meta()
 *
 * @param int $user_id User ID
 * @param string $meta_key Optional. Metadata key.
 * @return mixed
 */
function get_usermeta($user_id, $meta_key = '')
{
}