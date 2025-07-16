<?php


/**
 * Retrieves the date of the post.
 *
 * Unlike the_date() this function will always return the date.
 * Modify output with the {@see 'get_the_date'} filter.
 *
 * @since 3.0.0
 *
 * @param string      $format Optional. PHP date format. Defaults to the 'date_format' option.
 * @param int|WP_Post $post   Optional. Post ID or WP_Post object. Default current post.
 * @return string|int|false Date the current post was written. False on failure.
 */
function get_the_date($format = '', $post = \null)
{
}