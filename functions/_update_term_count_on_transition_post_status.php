<?php


/**
 * Updates the custom taxonomies' term counts when a post's status is changed.
 *
 * For example, default posts term counts (for custom taxonomies) don't include
 * private / draft posts.
 *
 * @since 3.3.0
 * @access private
 *
 * @param string  $new_status New post status.
 * @param string  $old_status Old post status.
 * @param WP_Post $post       Post object.
 */
function _update_term_count_on_transition_post_status($new_status, $old_status, $post)
{
}