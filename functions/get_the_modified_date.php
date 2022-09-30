<?php


/**
 * Retrieve the date on which the post was last modified.
 *
 * @since 2.1.0
 * @since 4.6.0 Added the `$post` parameter.
 *
 * @param string      $format Optional. PHP date format defaults to the date_format option if not specified.
 * @param int|WP_Post $post   Optional. Post ID or WP_Post object. Default current post.
 * @return string|false Date the current post was modified. False on failure.
 */
function get_the_modified_date($format = '', $post = \null)
{
}