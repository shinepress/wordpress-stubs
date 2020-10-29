<?php


/**
 * Displays the language string for the number of comments the current post has.
 *
 * @since 4.0.0
 * @since 5.4.0 Added the `$post_id` parameter to allow using the function outside of the loop.
 *
 * @param string      $zero    Optional. Text for no comments. Default false.
 * @param string      $one     Optional. Text for one comment. Default false.
 * @param string      $more    Optional. Text for more than one comment. Default false.
 * @param int|WP_Post $post_id Optional. Post ID or WP_Post object. Default is the global `$post`.
 * @return string Language string for the number of comments a post has.
 */
function get_comments_number_text($zero = \false, $one = \false, $more = \false, $post_id = 0)
{
}