<?php


/**
 * Retrieves the time of the post.
 *
 * @since 1.5.0
 *
 * @param string      $format Optional. Format to use for retrieving the time the post
 *                            was written. Accepts 'G', 'U', or PHP date format.
 *                            Defaults to the 'time_format' option.
 * @param int|WP_Post $post   Post ID or post object. Default is global `$post` object.
 * @return string|int|false Formatted date string or Unix timestamp if `$format` is 'U' or 'G'.
 *                          False on failure.
 */
function get_the_time($format = '', $post = \null)
{
}