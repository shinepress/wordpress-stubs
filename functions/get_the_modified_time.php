<?php


/**
 * Retrieve the time at which the post was last modified.
 *
 * @since 2.0.0
 * @since 4.6.0 Added the `$post` parameter.
 *
 * @param string      $d     Optional. Format to use for retrieving the time the post
 *                           was modified. Either 'G', 'U', or php date format defaults
 *                           to the value specified in the time_format option. Default empty.
 * @param int|WP_Post $post  Optional. Post ID or WP_Post object. Default current post.
 * @return false|string Formatted date string or Unix timestamp. False on failure.
 */
function get_the_modified_time($d = '', $post = \null)
{
}