<?php


/**
 * Retrieve the post status based on the Post ID.
 *
 * If the post ID is of an attachment, then the parent post status will be given
 * instead.
 *
 * @since 2.0.0
 *
 * @param int|WP_Post $ID Optional. Post ID or post object. Default empty.
 * @return string|false Post status on success, false on failure.
 */
function get_post_status($ID = '')
{
}