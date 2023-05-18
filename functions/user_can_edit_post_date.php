<?php


/**
 * Whether user can delete a post.
 *
 * @since 1.5.0
 * @deprecated 2.0.0 Use current_user_can()
 * @see current_user_can()
 *
 * @param int $user_id
 * @param int $post_id
 * @param int $blog_id Not Used
 * @return bool returns true if $user_id can edit $post_id's date
 */
function user_can_edit_post_date($user_id, $post_id, $blog_id = 1)
{
}