<?php


/**
 * Displays the language string for the number of comments the current post has.
 *
 * @since 0.71
 * @since 5.4.0 The `$deprecated` parameter was changed to `$post_id`.
 *
 * @param string      $zero       Optional. Text for no comments. Default false.
 * @param string      $one        Optional. Text for one comment. Default false.
 * @param string      $more       Optional. Text for more than one comment. Default false.
 * @param int|WP_Post $post_id    Optional. Post ID or WP_Post object. Default is the global `$post`.
 */
function comments_number($zero = \false, $one = \false, $more = \false, $post_id = 0)
{
}