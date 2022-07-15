<?php


/**
 * Adds a suffix if any trashed posts have a given slug.
 *
 * Store its desired (i.e. current) slug so it can try to reclaim it
 * if the post is untrashed.
 *
 * For internal use.
 *
 * @since 4.5.0
 * @access private
 *
 * @param string $post_name Post slug.
 * @param int    $post_ID   Optional. Post ID that should be ignored. Default 0.
 */
function wp_add_trashed_suffix_to_post_name_for_trashed_posts($post_name, $post_ID = 0)
{
}