<?php


/**
 * Upgrade the revisions author, add the current post as a revision and set the revisions version to 1
 *
 * @since 3.6.0
 * @access private
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param WP_Post $post      Post object
 * @param array   $revisions Current revisions of the post
 * @return bool true if the revisions were upgraded, false if problems
 */
function _wp_upgrade_revisions_of_post($post, $revisions)
{
}