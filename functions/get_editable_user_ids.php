<?php


/**
 * Gets the IDs of any users who can edit posts.
 *
 * @deprecated 3.1.0 Use get_users()
 *
 * @param int  $user_id       User ID.
 * @param bool $exclude_zeros Optional. Whether to exclude zeroes. Default true.
 * @return array Array of editable user IDs, empty array otherwise.
 */
function get_editable_user_ids($user_id, $exclude_zeros = \true, $post_type = 'post')
{
}