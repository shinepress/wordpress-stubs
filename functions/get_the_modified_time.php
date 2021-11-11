<?php


/**
 * Retrieve the time at which the post was last modified.
 *
 * @since 2.0.0
 * @since 4.6.0 Added the `$post` parameter.
 *
 * @param string      $format Optional. Format to use for retrieving the time the post
 *                            was modified. Either 'G', 'U', or PHP date format defaults
 *                            to the value specified in the time_format option. Default empty.
 * @param int|WP_Post $post   Optional. Post ID or WP_Post object. Default current post.
 * @return string|false Formatted date string or Unix timestamp. False on failure.
 */
function get_the_modified_time($format = '', $post = \null)
{
}