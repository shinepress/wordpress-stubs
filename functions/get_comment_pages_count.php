<?php


/**
 * Calculate the total number of comment pages.
 *
 * @since 2.7.0
 *
 * @uses Walker_Comment
 *
 * @global WP_Query $wp_query
 *
 * @param array $comments Optional array of WP_Comment objects. Defaults to $wp_query->comments
 * @param int   $per_page Optional comments per page.
 * @param bool  $threaded Optional control over flat or threaded comments.
 * @return int Number of comment pages.
 */
function get_comment_pages_count($comments = \null, $per_page = \null, $threaded = \null)
{
}