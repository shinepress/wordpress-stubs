<?php


/**
 * Retrieve the time at which the post was written.
 *
 * @since 1.5.0
 *
 * @param string      $d    Optional. Format to use for retrieving the time the post
 *                          was written. Either 'G', 'U', or php date format defaults
 *                          to the value specified in the time_format option. Default empty.
 * @param int|WP_Post $post WP_Post object or ID. Default is global $post object.
 * @return string|int|false Formatted date string or Unix timestamp if `$d` is 'U' or 'G'. False on failure.
 */
function get_the_time($d = '', $post = \null)
{
}