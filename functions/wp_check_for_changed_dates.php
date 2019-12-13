<?php


/**
 * Check for changed dates for published post objects and save the old date.
 *
 * The function is used when a post object of any type is updated,
 * by comparing the current and previous post objects.
 *
 * If the date was changed and not already part of the old dates then it will be
 * added to the post meta field ('_wp_old_date') for storing old dates for that
 * post.
 *
 * The most logically usage of this function is redirecting changed post objects, so
 * that those that linked to an changed post will be redirected to the new post.
 *
 * @since 4.9.3
 *
 * @param int     $post_id     Post ID.
 * @param WP_Post $post        The Post Object
 * @param WP_Post $post_before The Previous Post Object
 */
function wp_check_for_changed_dates($post_id, $post, $post_before)
{
}