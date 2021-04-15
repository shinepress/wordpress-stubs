<?php


/**
 * Adds a trashed suffix for a given post.
 *
 * Store its desired (i.e. current) slug so it can try to reclaim it
 * if the post is untrashed.
 *
 * For internal use.
 *
 * @since 4.5.0
 * @access private
 *
 * @param WP_Post $post The post.
 * @return string New slug for the post.
 */
function wp_add_trashed_suffix_to_post_name_for_post($post)
{
}