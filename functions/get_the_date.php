<?php


/**
 * Retrieve the date on which the post was written.
 *
 * Unlike the_date() this function will always return the date.
 * Modify output with the {@see 'get_the_date'} filter.
 *
 * @since 3.0.0
 *
 * @param  string      $d    Optional. PHP date format defaults to the date_format option if not specified.
 * @param  int|WP_Post $post Optional. Post ID or WP_Post object. Default current post.
 * @return false|string Date the current post was written. False on failure.
 */
function get_the_date($d = '', $post = \null)
{
}