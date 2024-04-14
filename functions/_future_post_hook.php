<?php


/**
 * Hook used to schedule publication for a post marked for the future.
 *
 * The $post properties used and must exist are 'ID' and 'post_date_gmt'.
 *
 * @since 2.3.0
 * @access private
 *
 * @param int     $deprecated Not used. Can be set to null. Never implemented. Not marked
 *                            as deprecated with _deprecated_argument() as it conflicts with
 *                            wp_transition_post_status() and the default filter for _future_post_hook().
 * @param WP_Post $post       Post object.
 */
function _future_post_hook($deprecated, $post)
{
}