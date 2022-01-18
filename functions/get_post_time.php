<?php


/**
 * Retrieve the time at which the post was written.
 *
 * @since 2.0.0
 *
 * @param string      $d         Optional. Format to use for retrieving the time the post
 *                               was written. Either 'G', 'U', or php date format. Default 'U'.
 * @param bool        $gmt       Optional. Whether to retrieve the GMT time. Default false.
 * @param int|WP_Post $post      WP_Post object or ID. Default is global $post object.
 * @param bool        $translate Whether to translate the time string. Default false.
 * @return string|int|false Formatted date string or Unix timestamp if `$id` is 'U' or 'G'. False on failure.
 */
function get_post_time($d = 'U', $gmt = \false, $post = \null, $translate = \false)
{
}