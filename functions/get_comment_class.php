<?php


/**
 * Returns the classes for the comment div as an array.
 *
 * @since 2.7.0
 * @since 4.4.0 Added the ability for `$comment_id` to also accept a WP_Comment object.
 *
 * @global int $comment_alt
 * @global int $comment_depth
 * @global int $comment_thread_alt
 *
 * @param string|string[] $css_class  Optional. One or more classes to add to the class list. Default empty.
 * @param int|WP_Comment  $comment_id Comment ID or WP_Comment object. Default current comment.
 * @param int|WP_Post     $post_id    Post ID or WP_Post object. Default current post.
 * @return string[] An array of classes.
 */
function get_comment_class($css_class = '', $comment_id = \null, $post_id = \null)
{
}