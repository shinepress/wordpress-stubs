<?php


/**
 * Retrieve the approved comments for post $post_id.
 *
 * @since 2.0.0
 * @since 4.1.0 Refactored to leverage WP_Comment_Query over a direct query.
 *
 * @param  int   $post_id The ID of the post.
 * @param  array $args    Optional. See WP_Comment_Query::__construct() for information on accepted arguments.
 * @return int|array $comments The approved comments, or number of comments if `$count`
 *                             argument is true.
 */
function get_approved_comments($post_id, $args = array())
{
}