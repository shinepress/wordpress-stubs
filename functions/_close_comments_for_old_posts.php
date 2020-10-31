<?php


//
// Internal.
//
/**
 * Close comments on old posts on the fly, without any extra DB queries. Hooked to the_posts.
 *
 * @access private
 * @since 2.7.0
 *
 * @param WP_Post  $posts Post data object.
 * @param WP_Query $query Query object.
 * @return array
 */
function _close_comments_for_old_posts($posts, $query)
{
}